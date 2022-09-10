@extends('layouts.light')

@section('pagetitle')
    Order List
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Order List</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-primary"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{url('export_order_pdf')}}">
                    <i class="fas fa-file-pdf fa-sm fa-fw mr-2 text-primary"></i>
                    PDF
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-print fa-sm fa-fw mr-2 text-primary"></i>
                    Print
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-file-csv fa-sm fa-fw mr-2 text-primary"></i>
                    CSV
                </a>
            </div>
        </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Customer</th>
                        <th>Net Total</th>
                        <th>Discount</th>
                        <th>Grand Total</th>
                        <th>Payment Type</th>
                        <th>TrxID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Customer</th>
                        <th>Net Total</th>
                        <th>Discount</th>
                        <th>Grand Total</th>
                        <th>Payment Type</th>
                        <th>TrxID</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                    $sl = 1;
                    @endphp
                    @foreach ($allorder as $order)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $order->user->name .' '. $order->user->lname }}</td>
                        <td>{{ $order->customer->name }}</td>
                        <td>{{ $order->nettotal }}</td>
                        <td>{{ $order->discount }}</td>
                        <td>{{ $order->grandtotal }}</td>
                        <td>{{ $order->account->name }}</td>
                        <td>{{ $order->trxId }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{url('order/pdf/'.$order->id)}}" class="btn btn-primary btn-circle btn-sm" title="View">
                                <i class="fas fa-file-pdf"></i>
                            </a>
                            <a href="{{url('order/print/'.$order->id)}}" class="btn btn-primary btn-circle btn-sm" title="View">
                                <i class="fas fa-print"></i>
                            </a>
                            <a href="{{url('order/details/'.$order->id)}}" class="btn btn-primary btn-circle btn-sm" title="View">
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection