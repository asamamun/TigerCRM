@extends('layouts.ecommerce')
@section('pagetitle')
    Cartlist
@endsection

@section('catmenu')
@include('partial.catmenu',['categories'=>$categories])
@endsection

@section('content')
<!-- Cart Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Image</th>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @php
                        $total = 0;
                        
                    @endphp

                        @foreach ($items as $row)
                        @php
                        $total += $row->quantity *$row->price
                        @endphp
                        <tr>
                            {{-- {{url(Storage::url($row->productimages->first()->name))}} --}}
                            <input type="hidden" class="productid" data-id="{{$row->id}}">
                            <td class="align-middle"><img src="" alt="{{$row->id}}" style="width: 50px;">img</td>
                            <td class="align-middle">{{ $row->name }}</td>
                            <td class="align-middle pprice">{{ $row->price }}</td>
                            <td class="align-middle">
                                <input type="number" class="form-control form-control-sm border-0 text-center qu" min='1' name='quantity' value="{{ $row->quantity }}">
                            </td>
                            <td class="align-middle itemtotal">{{ $row->quantity * $row->price}}</td>
                            <td class="align-middle"><a href="{{url('removecart/'.$row->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
                        </tr>
                        @endforeach                 
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-30" action="">
                <div class="input-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Apply Coupon</button>
                    </div>
                </div>
            </form>
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Shipping & Billing</span></h5>
            <div class="bg-light p-30 mb-3">
                <div class="">
                    <div class="d-flex justify-content-between mb-3">
                        <h6><i class="fas fa-user"></i> <strong class="ml-1"> {{session('name')}}</strong></h6>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <h6>
                            <input type="text" class="form-control border-1 address" id="address" name="address" placeholder="Address">
                        </h6>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <h6><i class="fas fa-phone-alt"></i><span class="ml-1"> {{session('mobile')}}</span></h6>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <h6><i class="fas fa-envelope"></i><span class="ml-1"> {{session('email')}}</span></h6>
                    </div>
                </div>
            </div>
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        <h6 id="total">{{ $total }}</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium" id="shipping">50</h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <h5 id="grandtotal">{{ $total + 50 }}</h5>
                    </div>
                    {!! Form::submit('Online Payment', ['class'=>'btn btn-block btn-primary font-weight-bold my-3 py-3','id'=>'saveOPBtn']) !!}
                    {!! Form::submit('Cash on Delivery', ['class'=>'btn btn-block btn-primary font-weight-bold my-3 py-3','id'=>'saveCODBtn']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->
@endsection

@section('script')
    <script>
        var BASE_URL = "{{url('/')}}";
        function financial(x) {
            return Number.parseFloat(x).toFixed(2);
		}
        $(document).ready(function() {
            //update total
            $(document).on('blur change keyup', '.qu', function() {
                var $row = $(this).closest('tr');
                var qty = $row.find('.qu').val();
                var price = $row.find('.pprice').text();
                var itemtotal = qty * price;
                // console.log(itemtotal);
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
                $('#grandtotal').text(grandtotal + parseInt($("#shipping").text()));
            }
            //
            $("#shipping").keyup(function() {
                updateTotal();
            });

            // save button start
            $("#saveCODBtn").click(function(){
                $idArr = [];
                $quanArr = [];
                $priceArr = [];
                $totalArr = [];
                $(".productid").each(function(){$idArr.push($(this).data('id'));})
                $(".qu").each(function(){$quanArr.push($(this).val());})
                $(".pprice").each(function(){$priceArr.push($(this).text());})
                $(".itemtotal").each(function(){$totalArr.push($(this).text());})
                // alert($("#address").val());
                // return;
                //post data
                $.ajax({
                        url: BASE_URL + '/codplaceorder',
                        type: 'post',
                        data: {
                            ids: $idArr,
                            quantity: $quanArr,
                            pricearr :$priceArr,
                            totalarr: $totalArr,
                            address: $("#address").val(),
                            subtotal: $("#total").html(),
                            shipping: $("#shipping").html(),
                            total: $("#grandtotal").html()
                            },
                        success: function(response) {
                            if(!response.error){
                            alert(response.message);
                            // location.reload();
                            }
                        }
                });            
                    //post data
            });
        // save button end
        });
    </script>
@endsection