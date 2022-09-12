@extends('layouts.light')

@section('pagetitle')
    Trashed
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Trashed Brand List</h6>
        <div class="dropdown no-arrow">
            <a href="{{url('brnd')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Brand List">
                <i class="fas fa-arrow-left"></i>
            </a>
            <a href="{{url('export_brand_trash_pdf')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Brand List">
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
                        <th>Icon</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <th>#</th>
                    <th>Name</th>
                    <th>Icon</th>
                    <th>Description</th>
                    <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $sl = 1;
                    @endphp
                    @foreach ($allbrand as $brand)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $brand->name }}</td>
                        <td>
                            @if ($brand->icon)
                                <img src="{{url(Storage::url($brand->icon))}}" class="iconimage" alt="Icon">       
                            @else            
                            @endif
                        </td>
                        <td>{{ $brand->description }}</td>
                        <td class="d-flex justify-content-center">
                            {!! Form::open(['method' => 'post','route' => ['brnd.trashed.destroy', $brand->id]]) !!}
                                <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm btn-circle"><i class="fas fa-trash"></i></button>
                            {!! Form::close() !!}

                            {!! Form::open(['method' => 'post','route' => ['brnd.trashed.restore', $brand->id]]) !!}
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