@extends('layouts.light')

@section('pagetitle')
    Customer
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Customer Details</h6>
        <a href="{{url('customer')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Customer List">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <tr class="table-bordered">
                <th>Id</th>
                <td>{{ $customer->id }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Name</th>
                <td>{{ $customer->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Mobile</th>
                <td>{{ $customer->email }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Email</th>
                <td>{{ $customer->mobile }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Address</th>
                <td>{{ $customer->address }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection