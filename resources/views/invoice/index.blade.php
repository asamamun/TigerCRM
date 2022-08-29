@extends('layouts.light')

@section('pagetitle')
    Purchase
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Purchase List</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-primary"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                aria-labelledby="dropdownMenuLink">
                {{-- <div class="dropdown-header">Dropdown Header:</div> --}}
                <a class="dropdown-item" href="{{url('purchase')}}">
                    <i class="fas fa-plus fa-sm fa-fw mr-2 text-primary"></i>
                    Add
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
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
                        <th>Supplier</th>
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
                        <th>Supplier</th>
                        <th>Net Total</th>
                        <th>Discount</th>
                        <th>Grand Total</th>
                        <th>Payment Type</th>
                        <th>TrxID</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($allinvoice as $invoice)
                    <tr>
                        <td>{{ $invoice->id }}</td>
                        <td>{{ $invoice->supplier->name }}</td>                        
                        <td>{{ $invoice->nettotal }}</td>          
                        <td>{{ $invoice->discount }}</td>          
                        <td>{{ $invoice->grandtotal }}</td>          
                        <td>{{ $invoice->account->name }}</td>          
                        <td>{{ $invoice->trxId }}</td>          
                        <td class="d-flex justify-content-center">

                            <a href="{{url('invoice/pdf/'.$invoice->id)}}" class="btn btn-primary btn-circle btn-sm" title="PDF">
                                <i class="far fa-file-pdf"></i>
                            </a>
                            <a href="{{url('invoice/print/'.$invoice->id)}}" class="btn btn-primary btn-circle btn-sm" title="Print">
                                <i class="fas fa-print"></i>
                            </a>
                            <a href="{{url('invoice/details/'.$invoice->id)}}" class="btn btn-primary btn-circle btn-sm" title="View">
                                <i class="fas fa-eye"></i>
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