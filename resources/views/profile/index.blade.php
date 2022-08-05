@extends('layouts.light')

@section('pagetitle')
    Profile
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Your Profile</h6>
        <a href="{{url('dashboard')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Dashboard">
            <i class="fas fa-undo"></i>
        </a>
    </div>
    <div class="card-body">
        @include('partial.flash')
        @include('partial.error')

        @if ($user->profile)
        <div class="mb-3">
            <img src="{{url(Storage::url($user->profile->image))}}" class="profileimage" alt="Profile Image">
        </div>        
        @else            
        @endif
        <form class="user" action="{{route('updateprofile')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-profile" id="fullname" name="fullname" placeholder="Full Name" value="{{$user->profile?->fullname}}">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-profile" id="phone" name="phone" placeholder="Phone Number" value="{{$user->profile?->phone}}">
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-profile" id="address" name="address" placeholder="Address" value="{{$user->profile?->address}}">
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="file" class="form-control form-control-profile" id="image" name="image">
                </div>
                <div class="col-sm-6">
                    <select name="bloodgroup" id="bloodgroup" class="form-control form-control-profile">
                        <option selected value="-1">Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-profile btn-block">
                Update Profile
            </button>
        </form>
    </div>
</div>
@endsection