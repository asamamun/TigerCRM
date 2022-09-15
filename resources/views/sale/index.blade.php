@extends('layouts.light')

@section('pagetitle')
    Sale
@endsection

@section('content')



<div class="card card-hover shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Sale</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">
                {!! Form::open(['class'=>'user','url' => 'sale']) !!}
                <div class="form-group">
                    {!! Form::text('search', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'productsearch', 'placeholder'=>'Enter Product Name/SKU/Scan Bar Code']) !!}
                </div>
                {!! Form::close() !!}
                <div class="sale-table">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Barcode</th>
                                <th>Product(s)</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>x</th>
                            </tr>
                        </thead>
                        <tbody id="dyn_tr"></tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group row">
                    <div class="col-10">
                        {!! Form::text('customersearch', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'customersearch', 'placeholder'=>'Enter Customer Mobile Number']) !!}
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-primary btn-profile" data-toggle="modal" data-target="#newCustomerModal"> + </button>
                    </div>
                </div>
                <div id="dyn_customer"></div>
                <hr>
                <div class="row sale-table">
                    <div class="col-md-7 mb-3">Total:</div>
                    <div class="col-md-5 text-right">&#2547; <span id="total"></span></div>
                </div>
                <div class="row sale-table">
                    <div class="col-md-7">Discount:</div>
                    <div class="form-group col-md-5 text-right">
                        {!! Form::number('discount', '0', ['required', 'class'=>'form-control form-control-profile text-right', 'id'=>'discount']) !!}
                        {{-- <span>&#2547;</span> --}}
                    </div>
                </div>
                <div class="row sale-table">
                    <div class="col-md-7 mb-4"><b>Grand Total: </b></div>
                    <div class="col-md-5 text-right">&#2547; <span id="grandtotal"></span></div>
                </div>
                <hr>
                <div class="row sale-table">
                    <div class="form-group col-12">
                        {!! Form::select('payment_method', $accounts, null, ['id' => 'payment_method', 'placeholder' => 'Payment Method', 'class'=>'form-control form-control-profile']) !!}
                        {!! Form::text('trxId', null, ['class'=>'d-none form-control form-control-profile', 'id'=>'trxId', 'placeholder'=>'Transaction ID']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group col-12">
                {!! Form::text('salenote', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'salenote','placeholder'=>'Sale Note']) !!}
            </div>
            <div class="form-group col-12">
                {!! Form::submit('Save', ['class'=>'btn btn-primary btn-profile btn-block','id'=>'saveBtn']) !!}
            </div>
            <h3 id="responseMessage"></h3>
        </div>
    </div>
</div>

<!-- new customer modal -->
<!-- Modal -->
<div class="modal fade" id="newCustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::text('ncname', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'ncname', 'placeholder'=>'Name']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::text('ncemail', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'ncemail', 'placeholder'=>'Email']) !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::text('ncmobile', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'ncmobile', 'placeholder'=>'Mobile']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::password('ncpassword', ['required', 'class'=>'form-control form-control-profile', 'id'=>'ncpassword', 'placeholder'=>'password']) !!}
    </div>
</div>
<!-- error -->
<ul class="modalerror"></ul>
<!-- error -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="newCustomer" class="btn btn-primary">Create</button>
      </div>
    </div>
  </div>
</div>
<!-- new customer modal end -->
@endsection

@section('script')
<script>
    var BASE_URL = "{{url('/')}}";
    function financial(x) {
			return Number.parseFloat(x).toFixed(2);
		}
    $(document).ready(function() {
        //autocomplete
        $("#productsearch").autocomplete({
            source: BASE_URL + '/search',
            minLength: 1,
            select: function(event, ui) {
                // console.log(ui);
                var id = ui.item.id;
                addProduct(id);
            }
        });

        function addProduct(id) {
            // alert("search for ID : " + id);
            $.ajax({
                url: BASE_URL + '/addtocart',
                type: 'post',
                data: {
                    id: id
                },
                success: function(response) {
                    // console.log(response);
                    // return;
                    response = JSON.parse(response);
                    $html = "<tr>";
                    $html += "<th class='productid'>" + response.id + "</th>";
                    $html += "<td class='barcode'>" + response.barcode + "</td>";
                    $html += "<td class='productname'>" + response.name + "</td>";
                    $html += "<td class='pprice'>" + response.price + "</td>";
                    $html += "<td><input class='qu' type='number' min='1' name='quantity' value='1'></td>";
                    $html += "<td class='itemtotal'>" + response.price + "</td>";
                    $html += "<td class='deleteproduct'><i class='fas fa-times'></i></i></td>";
                    $html += "</tr>";
                    $('#dyn_tr').append($html);
                    $("#productsearch").val("").focus();
                    updateTotal();
                }
            });
        }
        //delete product
        $(document).on('click', '.deleteproduct', function(e) {
            e.preventDefault();
            $(this).closest('tr').remove();
        });
        //update total
        $(document).on('blur change keyup', '.qu', function() {
            var $row = $(this).closest('tr');
            var qty = $row.find('.qu').val();
            var price = $row.find('.pprice').text();
            var itemtotal = qty * price;
            //console.log(itemtotal);
            $row.find('.itemtotal').text(financial(itemtotal));
            updateTotal();
        });

        function updateTotal() {
            //console.log($('.itemtotal'));
            var grandtotal = 0;
            $('.itemtotal').each(function() {
                grandtotal += parseFloat($(this).text());
            });
            $('#total').text(grandtotal);
            // alert($("#discount").val());
            $('#grandtotal').text(grandtotal - parseInt($("#discount").val()));
        }
        //
        $("#discount").keyup(function() {
            updateTotal();
        })

        //payment method
        $("#payment_method").change(function() {
            var payment_method = $(this).val();
            if (payment_method == '1') {
                $("#trxId").addClass('d-none');
            } else {
                $("#trxId").removeClass('d-none');
            }
        });

        //customer autocomplete
        $("#customersearch").autocomplete({
            source: BASE_URL + '/customersearch',
            minLength: 1,
            select: function(event, ui) {
                console.log(ui.item);
                    $html2 = "";
                    $html2 += "<div><strong>" + ui.item.name + "</strong></div>";
                    $html2 += "<div>" + ui.item.mobile + "</div>";
                    $('#dyn_customer').html($html2);
                    $("#customersearch").val("").focus();  
                
            }
        });


        // save button start
        $("#saveBtn").click(function(){
        $idArr = [];
        $quanArr = [];
        $priceArr = [];
        $totalArr = [];
        $(".productid").each(function(){$idArr.push($(this).text());})
        // alert($idArr);
        // return;
        $(".qu").each(function(){$quanArr.push($(this).val());})
        $(".pprice").each(function(){$priceArr.push($(this).text());})
        $(".itemtotal").each(function(){$totalArr.push($(this).text());})

        // console.log($quanArr);
        //post data
        $.ajax({
                url: BASE_URL + '/placeorder',
                type: 'post',
                data: {
                    ids: $idArr,
                    quantity: $quanArr,
                    pricearr :$priceArr,
                    totalarr: $totalArr,
                    cid: $("#customersearch").val(),
                    total: $("#total").html(),
                    discount: $("#discount").val(),
                    gtotal: $("#grandtotal").html(),
                    pmethod: $("#payment_method").val(),
                    trxid: $("#trxId").val(),
                    comment: $("#salenote").val()
                        },
                success: function(response) {
                    //console.log(response);
                    //return;
                //   $("#responseMessage").html(response);
                //   console.log(response.id);
                    if(!response.error){
                    var w = open(BASE_URL + "/order/details/"+response.orderid , "InvWindow", "width=800,height=500");
                    w.print();
                    location.reload();
                    }

                }
            });            
            //post data
        });
        // save button end

        // new customer start
        $("#newCustomer").click(function(){
            $(".modalerror").html('');
            // alert(5);
            $.ajax({
                type: "post",
                url: "{{url('newcustomer')}}",
                data: {
                    name: $("#ncname").val(),
                    email: $("#ncemail").val(),
                    mobile: $("#ncmobile").val(),
                    password: $("#ncpassword").val(),
                },
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    if(response.success){
                        $("#customersearch").val(response.id);
                        $("#dyn_customer").html(response.name +" , "+ response.mobile);
                        //clear all the form data
                        $("#newCustomerModal").modal("hide");
                        
                    }
                    else{
                        let err = '';
                        console.log(response.errors);
                        for (const key in response.errors) {
                            if (response.errors.hasOwnProperty.call(response.errors, key)) {
                                err +=  "<li>" + response.errors[key] + "</li>";                        
                                
                            }
                        }
                        $(".modalerror").html(err);
                    }
                }
            });

        })
        // new customer end
    });
    
</script>
@endsection
