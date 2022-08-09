@extends('layouts.ecommerce')

@section('pagetitle')
    Customer Dashboard
@endsection

@section('content')
    
    
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <span class="breadcrumb-item active">Contact</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    {{-- dashboard start --}}
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">
                <div class="aiz-user-sidenav-wrap pt-4 position-relative z-1 shadow-sm">
                    <div class="absolute-top-right d-xl-none">
                        <button class="btn btn-sm p-2" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav"
                            data-same=".mobile-side-nav-thumb">
                            <i class="las la-times la-2x"></i>
                        </button>
                    </div>
                    <div class="absolute-top-left d-xl-none">
                        <a class="btn btn-sm p-2" href="#">
                            <i class="las la-sign-out-alt la-2x"></i>
                        </a>
                    </div>
                    <div class="aiz-user-sidenav rounded overflow-hidden  c-scrollbar-light">
                        <div class="px-4 text-center mb-4">
                            <span class="avatar avatar-md mb-3">
                                <img src="#" class="image rounded-circle" onerror="this.onerror=null;this.src='#';">
                            </span>
                            <h4 class="h5 fw-600">Syed Zayed Hossain</h4>
                        </div>
    
                        <div class="sidemnenu mb-3">
                            <ul class="aiz-side-nav-list metismenu" data-toggle="aiz-side-menu">
    
                                <li class="aiz-side-nav-item mm-active">
                                    <a href="#" class="aiz-side-nav-link active" aria-expanded="true">
                                        <i class="las la-home aiz-side-nav-icon"></i>
                                        <span class="aiz-side-nav-text">Dashboard</span>
                                    </a>
                                </li>
    
    
                                <li class="aiz-side-nav-item">
                                    <a href="#" class="aiz-side-nav-link ">
                                        <i class="las la-file-alt aiz-side-nav-icon"></i>
                                        <span class="aiz-side-nav-text">Purchase History</span>
                                    </a>
                                </li>
    
                                <li class="aiz-side-nav-item">
                                    <a href="#" class="aiz-side-nav-link ">
                                        <i class="las la-user aiz-side-nav-icon"></i>
                                        <span class="aiz-side-nav-text">Manage Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-block btn-soft-primary rounded-0">Be A Seller</a>
                        </div>
                    </div>
                </div>
                <div class="aiz-user-panel">
                    <div class="aiz-titlebar mt-2 mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="h3">Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-10">
                        <div class="col-md-4">
                            <div class="bg-grad-1 text-white rounded-lg mb-4 overflow-hidden">
                                <div class="px-3 pt-3">
                                    <div class="h3 fw-700">0 Product</div>
                                    <div class="opacity-50">in your cart</div>
                                </div>
                                <img src="#" alt="">
                            </div>
                        </div>
    
                        <div class="col-md-4">
                            <div class="bg-grad-2 text-white rounded-lg mb-4 overflow-hidden">
                                <div class="px-3 pt-3">
    
                                    <div class="h3 fw-700">0 Product(s)</div>
                                    <div class="opacity-50">in your wishlist</div>
                                </div>
                                <img src="#" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
                                <div class="px-3 pt-3 ">
                                    <a href="#">
                                        <div class="h3 fw-700" style="color: #fff;">Orders</div>
                                        <div class="opacity-50" style="color: #fff;">My Order</div>
                                    </a>
                                </div>
                                <img src="#" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-10">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0">Default Shipping Address</h6>
                                </div>
                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- dashboard end --}}
@endsection