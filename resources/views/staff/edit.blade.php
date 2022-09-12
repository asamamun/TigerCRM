@extends('layouts.admin')

@section('pagetitle')
    Update Employee
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Employee</h6>
            <a href="{{url('employee')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Employee List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($employee, ['method' => 'put','enctype'=>'multipart/form-data','class'=>'user','route' => ['employee.update', $employee->id]]) !!}
            @include('employee.form')

            <div class="form-group">
                {!! Form::submit('Update Employee', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

