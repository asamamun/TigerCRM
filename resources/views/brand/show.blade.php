@extends('layouts.light')

@section('pagetitle')
    Brand
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Brand Details</h6>
        <a href="{{url('brnd')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Brand List">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <tr class="table-bordered">
                <th>Id</th>
                <td>{{ $brnd->id }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Name</th>
                <td>{{ $brnd->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Icon</th>
                <td>
                    @if ($brnd->icon)
                    <img src="{{url(Storage::url($brnd->icon))}}" class="iconimage" alt="Icon">       
                @else            
                @endif
                </td>
            </tr>
            <tr class="table-bordered">
                <th>Description</th>
                <td>{{ $brnd->description }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection