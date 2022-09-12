@extends('layouts.light')

@section('pagetitle')
    Update Brand
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Brand</h6>
            <a href="{{url('brnd')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Brand List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($brnd, ['method' => 'put','enctype'=>'multipart/form-data','class'=>'user','route' => ['brnd.update', $brnd->slug]]) !!}
            @include('brand.form')

            <div class="form-group">
                {!! Form::submit('Update Brand', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

