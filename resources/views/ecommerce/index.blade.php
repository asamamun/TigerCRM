@extends('layouts.ecommerce')
@section('pagetitle')
    Home
@endsection

@section('catmenu')
@include('partial.catmenu',['categories'=>$categories])
@endsection

@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($carousel as $user)
                            @if ($loop->first)
                            <li data-target="#header-carousel" data-slide-to="{{$loop->index}}" class="active"></li>
                            @else
                            <li data-target="#header-carousel" data-slide-to="{{$loop->index}}"></li>
                            @endif
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($carousel as $item)
                        <div class="carousel-item position-relative {{$loop->first?'active':''}}" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="{{url(Storage::url($item->image))}}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{$item->title}}</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">{{$item->description}}</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="{{url('assets/img/offer-1.jpg')}}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="{{url('assets/img/offer-2.jpg')}}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
        <div class="row px-xl-5 pb-3">
            @foreach ($categories as $category)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="{{url('category/'.$category->slug)}}">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{url(Storage::url($category->icon))}}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>{{ $category->name }}</h6>
                            <small class="text-body">
                                @if ($category->products)
                                    {{$category->products->count()}} Products
                                @else
                                    
                                @endif
                            </small>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Categories End -->

    <!-- Brand Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Brands</span></h2>
        <div class="row px-xl-5 pb-3">
            @foreach ($brands as $brand)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="{{url('brand/'.$brand->slug)}}">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{url(Storage::url($brand->icon))}}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>{{ $brand->name }}</h6>
                            <small class="text-body">
                                @if ($brand->products)
                                    {{$brand->products->count()}} Products
                                @else
                                    
                                @endif
                            </small>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Brand End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured Products</span></h2>
        <div class="row px-xl-5">
            @foreach ($featureproducts as $fproduct)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        @if ($fproduct->productimages)
                        <img class="img-fluid w-100" src="{{url(Storage::url($fproduct->productimages->first()->name))}}" alt="">
                        @else            
                        @endif
                        
                        <div class="product-action">
                            <button class="btn btn-outline-dark btn-square" id="cart"><i class="fa fa-shopping-cart mr-1"></i> </button>
                            <button class="btn btn-outline-dark btn-square favbtn" data-productid="{{$fproduct->id}}"><i class="far fa-heart mr-1"></i> </button>
                            <button class="btn btn-outline-dark btn-square" id=""><i class="fa fa-sync-alt mr-1"></i> </button>
                            <button class="btn btn-outline-dark btn-square" id=""><i class="fa fa-search mr-1"></i> </button>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="{{url('item/'.$fproduct->slug)}}">
                            {{Str::substr($fproduct->name, 0, 25)}}...</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>{{$fproduct->price}}</h5><h6 class="text-muted ml-2"><del>{{$fproduct->regular_price}}</del></h6>
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
        </div>
    </div>
    <!-- Products End -->


    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="{{url('assets/img/offer-1.jpg')}}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="{{url('assets/img/offer-2.jpg')}}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Recent Products</span></h2>
        <div class="row px-xl-5">
            @foreach ($recentproducts as $rproduct)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        @if ($rproduct->productimages)
                        <img class="img-fluid w-100" src="{{url(Storage::url($rproduct->productimages->first()->name))}}" alt="">
                        @else            
                        @endif
                        
                        <div class="product-action">
                            <button class="btn btn-outline-dark btn-square" id="cart"><i class="fa fa-shopping-cart mr-1"></i> </button>
                            <button class="btn btn-outline-dark btn-square favbtn" data-productid="{{$rproduct->id}}"><i class="far fa-heart mr-1"></i> </button>
                            <button class="btn btn-outline-dark btn-square" id=""><i class="fa fa-sync-alt mr-1"></i> </button>
                            <button class="btn btn-outline-dark btn-square" id=""><i class="fa fa-search mr-1"></i> </button>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="{{url('item/'.$rproduct->slug)}}">
                            {{Str::substr($rproduct->name, 0, 25)}}...</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>{{$rproduct->price}}</h5><h6 class="text-muted ml-2"><del>{{$rproduct->regular_price}}</del></h6>
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
        </div>
    </div>
    <!-- Products End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel d-flex">
                    @foreach ($brands as $brand)
                    <div class="bg-light p-4">
                        <img src="{{url(Storage::url($brand->icon))}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


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