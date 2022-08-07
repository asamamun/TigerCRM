@extends('layouts.light')

@section('pagetitle')
    Capital
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Capital Details</h6>
        <a href="{{url('capital')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Capital List">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <tr class="table-bordered">
                <th>Id</th>
                <td>{{ $capital->id }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Name</th>
                <td>{{ $capital->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Amount</th>
                <td>{{ $capital->amount }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Payment Type</th>
                <td>{{ $capital->account->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Description</th>
                <td>{{ $capital->description }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection