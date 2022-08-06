@extends('layouts.light')

@section('pagetitle')
    Account
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Account Details</h6>
        <a href="{{url('account')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Account List">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <tr class="table-bordered">
                <th>Id</th>
                <td>{{ $account->id }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Name</th>
                <td>{{ $account->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Account Number</th>
                <td>{{ $account->accountnumber }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Balance</th>
                <td>{{ $account->balance }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection