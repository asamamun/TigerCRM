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
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-4">
                <div class="card border-left-primary shadow py-2">
                    <div class="card-body">
                        <img src="http://localhost/IsDB_Training-PHP/Laravel/TigerCRM/public/storage/profiles/RvOpryk6PYqKwo5HHzeQMZBx2TMNVPJsuxabnVFT.jpg" class="profileimage" alt="Profile Image">
                        <div class="profilename text-center py-2">
                            Syed Zayed Hossain
                        </div>
                    </div>
                    <a class="" href="{{'customerdashboard'}}">
                        <div class="dashboard-sidebar">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </div>
                    </a>
                    <a class="" href="{{'purchasehistory'}}">
                        <div class="dashboard-sidebar">
                            <i class="fas fa-file-alt"></i>
                            <span>Purchase History</span>
                        </div>
                    </a>
                    <a class="" href="#">
                        <div class="dashboard-sidebar">
                            <i class="fas fa-user"></i>
                            <span>Manage Profile</span>
                        </div>
                    </a>

                </div>
            </div>
            <div class="col-lg-9">
                <div class="card border-left-primary shadow mb-4">
                    <div class="card-body">
                        Purchase History
                    </div>
                </div>
                <div class="card border-left-primary mb-4 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <a href="#">
                                    <h5>#424515262541233</h5>
                                </a>
                                <p>01-08-2022 02:10PM</p>
                            </div>
                            <div class="col-3">
                                <a href="#">33,572.00 Tk</a>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-9">
                                        Confirmed | Paid
                                    </div>
                                    <div class="col-3">
                                        <a href="#">
                                            <i class="fas fa-arrow-down"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-left-primary mb-4 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <a href="#">
                                    <h5>#424515262541233</h5>
                                </a>
                                <p>01-08-2022 02:10PM</p>
                            </div>
                            <div class="col-3">
                                <a href="#">33,572.00 Tk</a>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-success">Delivered</button>
                                            <button type="button" class="btn btn-primary">Paid</button>
                                          </div>
                                    </div>
                                    <div class="col-3">
                                        <a href="#">
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