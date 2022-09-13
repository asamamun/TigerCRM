@extends('layouts.light')

@section('pagetitle')
    Trashed
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Trashed List</h6>
        <div class="dropdown no-arrow">
            <a href="{{url('staff')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Staff List">
                <i class="fas fa-arrow-left"></i>
            </a>
            <a href="{{url('export_stafflist_pdf')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Staff List">
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
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Designation</th>
                        <th>Salary</th>
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
                        <th>Designation</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $sl = 1;
                    @endphp
                    @foreach ($allstaff as $staff)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $staff->name }}</td>
                        <td>{{ $staff->mobile }}</td>
                        <td>{{ $staff->email }}</td>
                        <td>{{ $staff->address }}</td>
                        <td>{{ $staff->designation }}</td>
                        <td>{{ $staff->salary }}</td>
                        <td class="d-flex justify-content-center">
                            {{-- {!! Form::open(['method' => 'delete','route' => ['staff.trashed.destroy', $staff->id],'id'=>'deleteform']) !!}
                            <a href="javascript:void(0)" class="btn btn-primary btn-circle btn-sm" title="Permanent Delete" onclick="event.preventDefault();if (!confirm('Are you sure?')) return; document.getElementById('deleteform').submit();">
                                <i class="fas fa-trash"></i>
                            </a>
                            {!! Form::close() !!} --}}

                            {!! Form::open(['method' => 'post','route' => ['staff.trashed.destroy', $staff->id]]) !!}
                                <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm btn-circle"><i class="fas fa-trash"></i></button>
                            {!! Form::close() !!}

                            {!! Form::open(['method' => 'post','route' => ['staff.trashed.restore', $staff->id]]) !!}
                                <button onclick="return confirm('Are you sure?')" class="btn btn-primary btn-sm btn-circle"><i class="fas fa-undo-alt"></i></button>
                            {!! Form::close() !!}

                            {{-- <a href="{{url('staff/'.$staff->id.'/edit')}}" class="btn btn-primary btn-circle btn-sm" title="Restore">
                                <i class="fas fa-undo-alt"></i>
                            </a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection