@extends('layouts.light')

@section('pagetitle')
    Update User Role
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update User Role</h6>
            <a href="{{url('user')}}" class="btn btn-primary btn-circle btn-sm" title="Back to User List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            @include('partial.flash')
            @include("partial.error")
            
            {!! Form::model($user, ['method' => 'put','enctype'=>'multipart/form-data','class'=>'user','route' => ['user.update', $user->id]]) !!}

            <div class="form-group">
                {!! Form::select('role', $role, null, ['placeholder' => 'Select Role', 'class'=>'form-control form-control-profile']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Role', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

