@extends('layouts.admin')

@section('pagetitle')
    Employee
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Employee Details</h6>
        <a href="{{url('employee')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Employee List">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <tr class="table-bordered">
                <th>Id</th>
                <td>{{ $employee->id }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Name</th>
                <td>{{ $employee->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Mobile</th>
                <td>{{ $employee->mobile }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Email</th>
                <td>{{ $employee->email }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Address</th>
                <td>{{ $employee->address }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Designation</th>
                <td>{{ $employee->designation }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Salary</th>
                <td>{{ $employee->salary }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection