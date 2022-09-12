@extends('layouts.light')

@section('pagetitle')
    Add Staff
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Add Staff</h6>
            <a href="{{url('staff')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Staff List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'staff.store','class'=>'user','enctype'=>'multipart/form-data'])}}
            @include('staff.form')

            <div class="form-group">
                {!! Form::submit('Add Staff', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

