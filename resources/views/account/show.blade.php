@extends('layouts.light')

@section('pagetitle')
    Account Details
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
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Account Title</th>
                        <th>Debit</th>
                        <th>Credit</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th colspan="2">Balance</th>
                        <th colspan="2" class="text-end">95000.00</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>15-07-2022</td>
                        <td>Cash in Hand</td>
                        <td></td>
                        <td>100000.00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>16-07-2022</td>
                        <td>Transport Cost</td>
                        <td>12000.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>17-07-2022</td>
                        <td>Transfer in from Nagad</td>
                        <td></td>
                        <td>5000.00</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>18-07-2022</td>
                        <td>Transfer out to nagad</td>
                        <td>10000.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>18-07-2022</td>
                        <td>Product Purchase</td>
                        <td>25000.00</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>





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