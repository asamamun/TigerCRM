@extends('layouts.light')

@section('pagetitle')
    Carousel
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Carousel Details</h6>
        <a href="{{url('carousel')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Carousel List">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <tr class="table-bordered">
                <th>Id</th>
                <td>{{ $carousel->id }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Name</th>
                <td>{{ $carousel->title }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Image</th>
                <td>
                    @if ($carousel->image)
                    <img src="{{url(Storage::url($carousel->image))}}" class="iconimage" alt="Image">       
                @else            
                @endif
                </td>
            </tr>
            <tr class="table-bordered">
                <th>Description</th>
                <td>{{ $carousel->description }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Status</th>
                <td>{{ $carousel->status }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection