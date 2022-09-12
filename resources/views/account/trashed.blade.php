@extends('layouts.light')

@section('pagetitle')
    Trashed
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Trashed Accounts List</h6>
        <div class="dropdown no-arrow">
            <a href="{{url('account')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Staff List">
                <i class="fas fa-arrow-left"></i>
            </a>
            <a href="{{url('export_account_trash_pdf')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Staff List">
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
                        <th>Name</th>
                        <th>Account Number</th>
                        <th>Balance</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <th>#</th>
                    <th>Name</th>
                    <th>Account Number</th>
                    <th>Balance</th>
                    <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $sl = 1;
                    @endphp
                    @foreach ($allaccount as $account)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $account->name }}</td>
                        <td>{{ $account->accountnumber }}</td>
                        <td>{{ $account->balance }}</td>
                        <td class="d-flex justify-content-center">
                            {!! Form::open(['method' => 'post','route' => ['account.trashed.destroy', $account->id]]) !!}
                                <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm btn-circle"><i class="fas fa-trash"></i></button>
                            {!! Form::close() !!}

                            {!! Form::open(['method' => 'post','route' => ['account.trashed.restore', $account->id]]) !!}
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