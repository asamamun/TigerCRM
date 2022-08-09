@extends('layouts.light')

@section('pagetitle')
    User
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">User Details</h6>
        <a href="{{url('user')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Category List">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <tr class="table-bordered">
                <th>Id</th>
                <td>{{ $user->id }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Name</th>
                <td>{{ $user->name . ' ' . $user->lname}}</td>
            </tr>
            <tr class="table-bordered">
                <th>Email</th>
                <td>{{ $user->email}}</td>
            </tr>
            <tr class="table-bordered">
                <th>Role</th>
                <td>{{ $user->role }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection