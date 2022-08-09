@extends('layouts.light')

@section('pagetitle')
    Transfer
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Transfer Details</h6>
        <a href="{{url('transfer')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Transfer List">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <tr class="table-bordered">
                <th>Id</th>
                <td>{{ $transfer->id }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Sender Account</th>
                <td>{{ $transfer->sender->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Receiver Account</th>
                <td>{{ $transfer->receiver->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Amount</th>
                <td>{{ $transfer->amount }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Description</th>
                <td>{{ $transfer->description }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection