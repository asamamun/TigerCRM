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
                        <th>#</th>
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
                        $sl = 1;
                        $total = 0;
                    @endphp
                    @forelse ($cartlists as $row)
                    @php
                        $total += $row->product->price * $row->quantity;
                    @endphp
                        <tr>
                            <td class="align-middle">{{$sl++}}</td>
                            <td class="align-middle"><a href="{{url('item/'.$row->product->slug)}}"><img src="{{url(Storage::url($row->product->productimages->first()->name))}}" alt="Image" style="width: 60px;"></a></td>
                            <td class="align-middle"><a href="{{url('item/'.$row->product->slug)}}">{{$row->product->name}}</a></td>
                            <td class="align-middle">Tk {{$row->product->price}}</td>
                            <td class="align-middle">
                                <input type="number" class="form-control form-control-sm border-0 text-center qty" min="1" value="1">
                            </td>
                            <td class="align-middle">Tk {{$row->product->price * 1}}</td>
                            <td class="align-middle">
                                <button class="btn btn-sm btn-danger delete" type="button" value="{{$row->id}}"><i class="fa fa-times"></i></button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7"><h2><i class="fas fa-heart"></i> Empty</h2></td>
                        </tr>
                        @endforelse                 
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
            $(document).on('blur change keyup', '.qty', function() {
                var row = $(this).closest('tr');
                // alert(row); return;
                // console.log(row);
                var qty = row.find('.qty').val();
                var price = row.find('.pprice').text();
                var itemtotal = qty * price;
                // console.log(itemtotal);
                row.find('.itemtotal').text(financial(itemtotal));
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
                // alert($idArr); return;
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
                            if(response.error == false){
                            alert(response.message);
                            window.location.href = BASE_URL + '/purchasehistory';
                            // location.reload();
                            }else{
                                alert(response.message);
                            }
                        }
                });            
                    //post data
            });
            // save button end

            //remove item from cart start
            $('.delete').click(function(e){
                e.preventDefault();
                var id = $(this).val();
                // alert(id);
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, remove it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: 'POST',
                        url: BASE_URL + '/cart_delete',
                        data: {
                            'cart_id' : id,
                            'delete' : true
                        },
                        success: function(response){
                            location.reload();
                            Swal.fire(
                            'Deleted!',
                            'Your item has been removed.',
                            'success'
                        );
                        }
                    })
                    
                }
                })
            });
            //remove item from cart end
        });
    </script>
@endsection