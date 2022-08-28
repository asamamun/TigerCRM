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
                      @include('partial.flash')
                      @include('partial.error')
              
                      @if ($customer->customerprofile)
                      <div class="mb-3">
                          <img src="{{url(Storage::url($customer->customerprofile->image))}}" class="profileimage" alt="Profile Image">
                      </div>
                      {!! Form::model($customer->customerprofile, ['method' => 'PUT','enctype'=>'multipart/form-data','class'=>'customer','route' => ['customerprofile.update', $customer->customerprofile->id]]) !!}
                      @else
                      {!! Form::open(['route' => ['customerprofile.store'] ,'class'=>'customer', 'enctype'=>'multipart/form-data']) !!}
                      @endif
                      
                      <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                              {!! Form::text('fullname', null, ['required', 'class'=>'form-control', 'id'=>'name', 'placeholder'=>'Full Name']) !!}
                          </div>
                          <div class="col-sm-6">
                            {!! Form::file('image', ['required', 'class'=>'form-control', 'id'=>'image']) !!}
                          </div>
                      </div>
                      <div class="form-group">
                          {!! Form::text('address', null, ['required', 'class'=>'form-control', 'id'=>'address', 'placeholder'=>'Address']) !!}
                      </div>
                      <div class="form-group">
                          {!! Form::submit('Update Profile', ['class'=>'btn btn-primary btn-block']) !!}
                      </div>
                      {!! Form::close() !!}


                      {!! Form::open(['route' => ['customerprofile.store'] ,'class'=>'customer', 'enctype'=>'multipart/form-data']) !!}
                      <div class="form-group">
                        {!! Form::label('oldpassword', 'Old Password',['class' => 'form-label']); !!}
                        {!! Form::password('oldpassword', null, ['required', 'class'=>'form-control', 'id'=>'address', 'placeholder'=>'Old Password']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('newpassword', 'New Password',['class' => 'form-label']); !!}
                        {!! Form::password('newpassword', null, ['required', 'class'=>'form-control', 'id'=>'address', 'placeholder'=>'New Password']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('confirmpassword', 'Re-Type Password',['class' => 'form-label']); !!}
                        {!! Form::password('confirmpassword', null, ['required', 'class'=>'form-control', 'id'=>'address', 'placeholder'=>'Re-type Password']) !!}
                      </div>
                      <div class="form-group">
                          {!! Form::submit('Update Password', ['class'=>'btn btn-primary btn-block']) !!}
                      </div>
                      {!! Form::close() !!}                             
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</div>
{{-- dashboard end --}}
@endsection