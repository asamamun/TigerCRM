@extends('layouts.ecommerce')

@section('pagetitle')
Purchase History
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
                <span class="breadcrumb-item active">Purchase History</span>
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
        <div class="col-lg-9">
            <div class="row">
                <div class="card border-left-primary col-12 shadow mb-4">
                    <div class="card-body">
                        Purchase History
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card border-left-primary col-12 mb-4 shadow">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-5 invoice-number">
                                <a href="{{url('ordertrack')}}">
                                    #424515262541233
                                </a>
                                <p>01-08-2022 02:10PM</p>
                            </div>
                            <div class="col-3">
                                <a href="{{url('ordertrack')}}">33,572.00</a>
                            </div>
                            <div class="col-2 text-left">
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <button class="button1">Delivered</button>
                                    <button class="button2">Paid</button>
                                    {{-- <button type="button" class="btn btn-success">Delivered</button>
                                    <button type="button" class="btn btn-primary">Paid</button> --}}
                                </div>
                            </div>
                            <div class="col-2 text-right">
                                <a href="#" role="button" class="download-btn">
                                    <i class="fas fa-arrow-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
{{-- dashboard end --}}
@endsection