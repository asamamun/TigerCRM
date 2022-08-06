@extends('layouts.light')

@section('pagetitle')
    Supplier
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Supplier Details</h6>
        <a href="{{url('supplier')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Supplier List">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <tr class="table-bordered">
                <th>Id</th>
                <td>{{ $supplier->id }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Name</th>
                <td>{{ $supplier->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Mobile</th>
                <td>{{ $supplier->mobile }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Email</th>
                <td>{{ $supplier->email }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Address</th>
                <td>{{ $supplier->address }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection