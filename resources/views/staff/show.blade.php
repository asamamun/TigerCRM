@extends('layouts.light')

@section('pagetitle')
    Staff
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Staff Details</h6>
        <a href="{{url('staff')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Staff List">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <tr class="table-bordered">
                <th>Id</th>
                <td>{{ $staff->id }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Name</th>
                <td>{{ $staff->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Mobile</th>
                <td>{{ $staff->mobile }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Email</th>
                <td>{{ $staff->email }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Address</th>
                <td>{{ $staff->address }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Designation</th>
                <td>{{ $staff->designation }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Salary</th>
                <td>{{ $staff->salary }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection