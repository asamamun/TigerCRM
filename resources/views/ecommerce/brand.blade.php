@extends('layouts.ecommerce')

@section('pagetitle')
    {{$brands->name}}
@endsection

@section('catmenu')
@include('partial.catmenu',['categories'=>$categories])
@endsection

@section('content')
    
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{url('/')}}">Home</a>
                    <span class="breadcrumb-item active">{{$brands->name}}</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                <!-- Price Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by price</span></h5>
                <div class="bg-light p-4 mb-30">
                    {{Form::open(['route' => 'contact.store','class'=>'user','enctype'=>'multipart/form-data'])}}
                    <div class="control-group pb-3">
                        {!! Form::number('min', null, ['required', 'class'=>'form-control', 'id'=>'min', 'placeholder'=>'Min']) !!}
                    </div>
                    <div class="control-group pb-3">
                        {!! Form::number('max', null, ['required', 'class'=>'form-control', 'id'=>'max', 'placeholder'=>'Max']) !!}
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            {!! Form::submit('Apply', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::submit('Reset', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
                <!-- Price End -->
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                                <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="ml-2">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Latest</a>
                                        <a class="dropdown-item" href="#">Popularity</a>
                                        <a class="dropdown-item" href="#">Best Rating</a>
                                    </div>
                                </div>
                                <div class="btn-group ml-2">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Showing</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">10</a>
                                        <a class="dropdown-item" href="#">20</a>
                                        <a class="dropdown-item" href="#">30</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($brands->products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                @if ($product->productimages)
                                <img src="{{url(Storage::url($product->productimages->first()->name))}}" class="img-fluid w-100 iconimage" alt="Icon">       
                                @else            
                                @endif
                                <div class="product-action">
                                    <button class="btn btn-outline-dark btn-square"><i class="fa fa-shopping-cart mr-1"></i> </button>
                                    <button class="btn btn-outline-dark btn-square favbtn" data-productid="{{$product->id}}"><i class="far fa-heart mr-1"></i> </button>
                                    <button class="btn btn-outline-dark btn-square" id=""><i class="fa fa-sync-alt mr-1"></i> </button>
                                    <button class="btn btn-outline-dark btn-square" id=""><i class="fa fa-search mr-1"></i> </button>
                                </div>
                            </div>
               
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="{{url('item/'.$product->slug)}}">
                                    {{Str::substr($product->name, 0, 25)}}...
                                </a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>{{$product->price}}</h5><h6 class="text-muted ml-2"><del>{{$product->regular_price}}</del></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small>(99)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-12">
                        {{-- {{$brands->products->links()}} --}}
                        {{-- {{$brands->products->onEachSide(1)->links()}} --}}
                    </div>
                    <div class="col-12">
                        <nav>
                          <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


@endsection

@section('script')
    <script>
        var BASE_URL = "{{url('/')}}";
        $(document).ready(function() {
            $(".favbtn").click(function() {
                var productid = $(this).data("productid");
                // alert(productid);
                // return;
                $.post( BASE_URL + "/favourite",
                {
                    pid: productid
                }, function(d) {
                    if(d.error){
                        Swal.fire({
                        position: 'top',
                        icon: 'warning',
                        title: d.message,
                        showConfirmButton: false,
                        timer: 1500
                        })
                    }else
                    {
                        $("span.wishlistcount").html(d.ti);
                        Swal.fire({
                        position: 'top',
                        icon: 'success',
                        title: d.message,
                        showConfirmButton: false,
                        timer: 1500
                        })
                    };
                })
            });
        });
    </script>
@endsection