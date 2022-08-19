@extends('layouts.ecommerce')

@section('pagetitle')
Manage Profile
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
                        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                        <div class="container">
                          <div class="col">
                            <div class="row">
                              <div class="col mb-3">
                                <div class="card">
                                  <div class="card-body">
                                    <div class="e-profile">
                                      <div class="row">
                                        <div class="col-12 col-sm-auto mb-3">
                                          <div class="mx-auto" style="width: 140px;">
                                            <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                                              <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                          <div class="text-center text-sm-left mb-2 mb-sm-0">
                                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">shariful islam</h4>
                                            <p class="mb-0">@sharif</p>
                                            <div class="mt-2">
                                              <button class="btn btn-primary" type="button">
                                                <input type="image" src="" alt="">
                                                <i class="fa fa-fw fa-camera"></i>
                                                <span>Change Photo</span>
                                              </button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="tab-content pt-3">
                                        <div class="tab-pane active">
                                          <form class="form" novalidate="">
                                            <div class="row">
                                              <div class="col">
                                                <div class="row">
                                                  <div class="col">
                                                    <div class="form-group">
                                                      <label>Full Name</label>
                                                      <input class="form-control" type="text" name="name" placeholder="John Smith" value="John Smith">
                                                    </div>
                                                  </div>
                                                  <div class="col">
                                                    <div class="form-group">
                                                      <label>Username</label>
                                                      <input class="form-control" type="text" name="username" placeholder="johnny.s" value="johnny.s">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col">
                                                    <div class="form-group">
                                                      <label>Email</label>
                                                      <input class="form-control" type="text" placeholder="user@example.com">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col mb-3">
                                                    <div class="form-group">
                                                      <label>About</label>
                                                      <textarea class="form-control" rows="5" placeholder="My Bio"></textarea>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-12 col-sm-6 mb-3">
                                                <div class="mb-2"><b>Change Password</b></div>
                                                <div class="row">
                                                  <div class="col">
                                                    <div class="form-group">
                                                      <label>Current Password</label>
                                                      <input class="form-control" type="password" placeholder="••••••">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col">
                                                    <div class="form-group">
                                                      <label>New Password</label>
                                                      <input class="form-control" type="password" placeholder="••••••">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col">
                                                    <div class="form-group">
                                                      <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                                      <input class="form-control" type="password" placeholder="••••••"></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col d-flex justify-content-end">
                                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                              </div>
                                            </div>
                                          </form>
                                      
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          
                            </div>
                        
                          </div>
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