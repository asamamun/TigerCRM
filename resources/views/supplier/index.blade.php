@extends('layouts.light')

@section('pagetitle')
    Supplier
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Supplier List</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-primary"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                aria-labelledby="dropdownMenuLink">
                {{-- <div class="dropdown-header">Dropdown Header:</div> --}}
                <a class="dropdown-item" href="{{url('supplier/create')}}">
                    <i class="fas fa-plus fa-sm fa-fw mr-2 text-primary"></i>
                    Add
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{url('export_supplier_pdf')}}">
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
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{url('supplier/trashed')}}">
                    <i class="fas fa-trash-alt fa-sm fa-fw mr-2 text-primary"></i>
                    Trashed
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
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($allsupplier as $supplier)
                    <tr>
                        <td>{{ $supplier->id }}</td>
                        <td>{{ $supplier->name }}</td>
                        <td>{{ $supplier->mobile }}</td>
                        <td>{{ $supplier->email }}</td>
                        <td>{{ $supplier->address }}</td>
                        <td class="d-flex justify-content-center">
                            {!! Form::open(['method' => 'delete','route' => ['supplier.destroy', $supplier->slug],'id'=>'deleteform']) !!}
                            <a href="javascript:void(0)" class="btn btn-primary btn-circle btn-sm" title="Delete" onclick="event.preventDefault();if (!confirm('Are you sure?')) return; document.getElementById('deleteform').submit();">
                                <i class="fas fa-trash"></i>
                            </a>
                            {!! Form::close() !!}
                            <a href="{{url('supplier/'.$supplier->slug.'/edit')}}" class="btn btn-primary btn-circle btn-sm" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            {{-- <a href="#" class="btn btn-primary btn-circle btn-sm" title="Delete">
                                <i class="fas fa-trash"></i>
                            </a> --}}
                            <a href="{{url('supplier/'.$supplier->slug)}}" class="btn btn-primary btn-circle btn-sm" title="View">
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