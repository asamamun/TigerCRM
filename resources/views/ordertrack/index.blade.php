@extends('layouts.ecommerce')

@section('pagetitle')
Order Track
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
                    @if ($customer->profile)
                  <img src="{{url(Storage::url($customer->profile->image))}}" class="profileimage" alt="Profile Image">
                  @else
                  <img src="{{asset('assets/img/undraw_profile.svg')}}" class="profileimage" alt="Profile Image">
                  @endif
                  <div class="profilename text-center py-2">
                      {{ $customer->name  }}
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
                <a class="" href="{{url('manageprofile')}}">
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
                        <div class="container">
                            <article class="card">
                                <header class="card-header"><h6>Order ID: OD45345345435</h6></header>
                                <div class="card-body">
                                    <h6>Customer Name: shariful islam</h6>
                                    <h6>Phone: 01746959342</h6>
                                    <h6>Address: Mirpur, dhaka</h6>
                              
                                    <hr>
                                    <div class="row  my-3 justify-content-between">
                                        <div class="col-md-2">
                                          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/13.webp"
                                            class="img-fluid" alt="Phone">
                                        </div>
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                          <p class="text-muted mb-0">Samsung Galaxy</p>
                                        </div>
                                      {{--   <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                          <p class="text-muted mb-0 small">White</p>
                                        </div> --}}
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                          <p class="text-muted mb-0 small">Capacity: 64GB</p>
                                        </div>
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                          <p class="text-muted mb-0 small">Qty: 1</p>
                                        </div>
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0 small">$499</p>
                                         </div>
                                    </div>
                                    <div class="row  my-3 justify-content-between">
                                        <div class="col-md-2">
                                          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/13.webp"
                                            class="img-fluid" alt="Phone">
                                        </div>
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                          <p class="text-muted mb-0">Samsung Galaxy</p>
                                        </div>
                                      {{--   <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                          <p class="text-muted mb-0 small">White</p>
                                        </div> --}}
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                          <p class="text-muted mb-0 small">Capacity: 64GB</p>
                                        </div>
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                          <p class="text-muted mb-0 small">Qty: 1</p>
                                        </div>
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0 small">$499</p>
                                         </div>
                                    </div>
                                    <hr>
                                    <div class="row  my-3 justify-content-between">
                                        <div class="col-md-2">
                                          
                                        </div>
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                          <p class="text-muted mb-0"></p>
                                        </div>
                                      {{--   <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                          <p class="text-muted mb-0 small">White</p>
                                        </div> --}}
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                          <p class="text-muted mb-0 small"></p>
                                        </div>
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                          <p class="text-muted mb-0 small">Total:  </p>
                                        </div>
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0 small">$499</p>
                                         </div>
                                    </div>
                                    <article class="card">
                                        <div class="card-body row">
                                            <div class="col"> <strong>Estimated Delivery time:</strong> <br>29 nov 2021 </div>
                                            <div class="col"> <strong>Shipping BY:</strong> <br> shariful, | <i class="fa fa-phone"></i> +8801746959315</div>
                                            <div class="col"> <strong>Status:</strong> <br> Picked by the courier </div>
                                            <div class="col"> <strong>Tracking #:</strong> <br> BD045903594059 </div>
                                        </div>
                                    </article>
                                    <div class="track">
                                        <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>
                                        <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Picked by courier</span> </div>
                                        <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> On the way </span> </div>
                                        <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Ready for pickup</span> </div>
                                    </div>
                                    
                                    <a href="#" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to Dashboard</a>
                                </div>
                            </article>
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