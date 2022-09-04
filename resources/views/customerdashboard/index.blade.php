@extends('layouts.ecommerce')

@section('pagetitle')
    Customer Dashboard
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
                    <span class="breadcrumb-item active">Customer Dashboard</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    {{-- dashboard start --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-4">
                <div class="card border-left-primary shadow py-2">
                    <div class="card-body">
                        @if ($customer->customerprofile)
                        <img src="{{url(Storage::url($customer->customerprofile->image))}}" class="profileimage" alt="Profile Image">
                        @else
                        <img src="{{asset('assets/img/undraw_profile.svg')}}" class="profileimage" alt="Profile Image">
                        @endif
                        <div class="profilename text-center py-2">
                            {{ $customer->name  }}
                        </div>
                    </div>
                    <a class="" href="{{url('customerdashboard')}}">
                        <div class="dashboard-sidebar">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </div>
                    </a>
                    <a class="" href="{{url('purchasehistory')}}">
                        <div class="dashboard-sidebar">
                            <i class="fas fa-file-alt"></i>
                            <span>Purchase History</span>
                        </div>
                    </a>
                    <a class="" href="{{url('customerprofile')}}">
                        <div class="dashboard-sidebar">
                            <i class="fas fa-user"></i>
                            <span>Manage Profile</span>
                        </div>
                    </a>

                </div>
            </div>
            <div class="col-lg-9 ">
                <div class="card border-left-primary shadow mb-4">
                    <div class="card-body">
                        Dashboard
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card border-left-primary shadow py-2">
                            <div class="card-body">
                                <h3>0 Product(s)</h3>
                                <p>in your cart</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card border-left-primary shadow py-2">
                            <div class="card-body">
                                <h3>0 Product(s)</h3>
                                <p>in your wishlist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card border-left-primary shadow py-2">
                            <div class="card-body">
                                <h3>Order(s)</h3>
                                <p>my order</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- dashboard end --}}
@endsection