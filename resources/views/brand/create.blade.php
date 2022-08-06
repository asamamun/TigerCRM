@extends('layouts.light')

@section('pagetitle')
    Add Brand
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Add Brand</h6>
            <a href="{{url('brand')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Brand List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'brand.store','class'=>'user','enctype'=>'multipart/form-data'])}}
            @include('brand.form')

            <div class="form-group">
                {!! Form::submit('Add Brand', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

