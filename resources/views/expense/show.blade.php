@extends('layouts.light')

@section('pagetitle')
    Expense
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Expense Details</h6>
        <a href="{{url('expense')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Expense List">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <tr class="table-bordered">
                <th>Id</th>
                <td>{{ $expense->id }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Name</th>
                <td>{{ $expense->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Amount</th>
                <td>{{ $expense->amount }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Payment Type</th>
                <td>{{ $expense->payment_type }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Description</th>
                <td>{{ $expense->description }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection