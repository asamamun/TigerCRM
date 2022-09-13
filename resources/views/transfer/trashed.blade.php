@extends('layouts.light')

@section('pagetitle')
    Trashed
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Trashed Transfer List</h6>
        <div class="dropdown no-arrow">
            <a href="{{url('transfer')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Staff List">
                <i class="fas fa-arrow-left"></i>
            </a>
            <a href="{{url('export_transferlist_pdf')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Staff List">
                <i class="fas fa-file-pdf"></i>
            </a>
        </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Sender Account</th>
                        <th>Receiver Account</th>
                        <th>Amount</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Sender Account</th>
                        <th>Receiver Account</th>
                        <th>Amount</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $sl = 1;
                    @endphp
                    @foreach ($alltransfer as $transfer)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $transfer->sender->name }}</td>
                        <td>{{ $transfer->receiver->name }}</td>
                        <td>{{ $transfer->amount }}</td>
                        <td>{{ $transfer->description }}</td>
                        <td class="d-flex justify-content-center">
                            {!! Form::open(['method' => 'post','route' => ['transfer.trashed.destroy', $transfer->id]]) !!}
                                <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm btn-circle"><i class="fas fa-trash"></i></button>
                            {!! Form::close() !!}

                            {!! Form::open(['method' => 'post','route' => ['transfer.trashed.restore', $transfer->id]]) !!}
                                <button onclick="return confirm('Are you sure?')" class="btn btn-primary btn-sm btn-circle"><i class="fas fa-undo-alt"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection