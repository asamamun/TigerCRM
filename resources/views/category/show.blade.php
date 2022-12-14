@extends('layouts.light')

@section('pagetitle')
    Category
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Category Details</h6>
        <a href="{{url('cat')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Category List">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <tr class="table-bordered">
                <th>Id</th>
                <td>{{ $cat->id }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Name</th>
                <td>{{ $cat->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Icon</th>
                <td>
                    @if ($cat->icon)
                    <img src="{{url(Storage::url($cat->icon))}}" class="iconimage" alt="Icon">       
                @else            
                @endif
                </td>
            </tr>
            <tr class="table-bordered">
                <th>Description</th>
                <td>{{ $cat->description }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection