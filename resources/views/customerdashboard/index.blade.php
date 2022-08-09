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
            <div class="col-md-3">
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <img src="http://localhost/Zayed/laravel/TigerCRM/public/storage/profiles/oHmP7NallA2CPB4UB5XmcdPCaODJA7ITr453DfrC.jpg" class="profileimage" alt="Profile Image">
                        <div class="profilename">Syed Zayed Hossain</div>
                        <div>
                            <a class="active" href="#">
                                <i class="fas fa-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </div>
                        <div>
                            <a class="" href="#">
                                <i class="fas fa-file-alt"></i>
                                <span>Purchase History</span>
                            </a>
                        </div>
                        <div>
                            <a class="" href="#">
                                <i class="fas fa-user"></i>
                                <span>Manage Profile</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card border-left-primary shadow mb-3">
                    <div class="card-body">
                        Dashboard
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-left-primary shadow">
                            <div class="card-body">
                                <h3>0 Product(s)</h3>
                                <p>in your cart</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-left-primary shadow">
                            <div class="card-body">
                                <h3>0 Product(s)</h3>
                                <p>in your wishlist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-left-primary shadow">
                            <div class="card-body">
                                <h3>Order(s)</h3>
                                <p>my order</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        Purchase History
                    </div>
                </div>
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h5>#424515262541</h5>
                                <p>01-08-2022 02:10PM</p>
                            </div>
                            <div class="col-md-4">
                                33,572.00 Tk
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        Confirmed | Paid
                                    </div>
                                    <div class="col-md-6">
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