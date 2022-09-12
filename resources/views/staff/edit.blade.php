@extends('layouts.light')

@section('pagetitle')
    Update Staff
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Staff</h6>
            <a href="{{url('staff')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Staff List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($staff, ['method' => 'put','enctype'=>'multipart/form-data','class'=>'user','route' => ['staff.update', $staff->id]]) !!}
            @include('staff.form')

            <div class="form-group">
                {!! Form::submit('Update Staff', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

