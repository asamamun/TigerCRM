@extends('layouts.light')

@section('pagetitle')
    Subcategory
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Subcategory Details</h6>
        <a href="{{url('subcat')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Subcategory List">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <tr class="table-bordered">
                <th>Id</th>
                <td>{{ $subcat->id }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Name</th>
                <td>{{ $subcat->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Category</th>
                <td>{{ $subcat->category->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Icon</th>
                <td>
                    @if ($subcat->icon)
                    <img src="{{url(Storage::url($subcat->icon))}}" class="iconimage" alt="Icon">       
                @else            
                @endif
                </td>
            </tr>
            <tr class="table-bordered">
                <th>Description</th>
                <td>{{ $subcat->description }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection