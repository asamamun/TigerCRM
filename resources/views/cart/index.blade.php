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
                            <td class="align-middle"><img src="" alt="{{$row->id}}" style="width: 50px;">img</td>
                            <td class="align-middle">{{ $row->name }}</td>
                            <td class="align-middle">Tk {{ $row->price }}</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="number" class="form-control form-control-sm bg-secondary border-0 text-center" value="{{ $row->quantity }}">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">Tk {{ $row->quantity * $row->price}}</td>
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
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        <h6>Tk {{ $total }}</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">Tk <span>50</span></h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <h5>Tk 160</h5>
                    </div>
                    <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->
@endsection

@section('script')
    <script>
        // var BASE_URL = "{{ url('/') }}";
        // this function is for update card
/*         $(".update-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data:
               id: ele.attr("data-id"), 
               quantity: ele.parents("tr").find(".quantity").val()
            }),
               success: function (response) {
                   window.location.reload();
               }
        }); */
        //delete product
        /* $(document).on('click', '.deleteproduct', function(e) {
        e.preventDefault();
        $(this).closest('tr').remove();
        var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: BASE_URL +  '/remove-from-cart',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                        
                    }
                });
            }
        }); */
        //remove from cart
        /* $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                        
                    }
                });
            }
        }); */
    </script>
@endsection