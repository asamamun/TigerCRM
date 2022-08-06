@extends('layouts.light')

@section('pagetitle')
    Subcategory
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Subcategory List</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-primary"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                aria-labelledby="dropdownMenuLink">
                {{-- <div class="dropdown-header">Dropdown Header:</div> --}}
                <a class="dropdown-item" href="{{url('subcategory/create')}}">
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
                        <th>Name</th>
                        <th>Category</th>
                        <th>Icon</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Icon</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($allsubcategory as $subcategory)
                    <tr>
                        <td>{{ $subcategory->id }}</td>
                        <td>{{ $subcategory->name }}</td>                        
                        <td>{{ $subcategory->category->name }}</td>          
                        
                        <td>
                            @if ($subcategory->icon)
                                <img src="{{url(Storage::url($subcategory->icon))}}" class="iconimage" alt="Icon">       
                            @else            
                            @endif
                        </td>
                        <td>{{ $subcategory->description }}</td>
                        <td class="d-flex justify-content-center">
                            {{-- onclick="event.preventDefault(); document.getElementById('submit-form').submit();" --}}
                            {!! Form::open(['method' => 'delete','route' => ['subcategory.destroy', $subcategory->id],'id'=>'deleteform']) !!}
                            <a href="javascript:void(0)" class="btn btn-primary btn-circle btn-sm" title="Delete" onclick="event.preventDefault();if (!confirm('Are you sure?')) return; document.getElementById('deleteform').submit();">
                                <i class="fas fa-trash"></i>
                            </a>
                            {!! Form::close() !!}
                            <a href="{{url('subcategory/'.$subcategory->id.'/edit')}}" class="btn btn-primary btn-circle btn-sm" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            
                            <a href="{{url('subcategory/'.$subcategory->id)}}" class="btn btn-primary btn-circle btn-sm" title="View">
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