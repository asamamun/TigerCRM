@extends('layouts.light')

@section('pagetitle')
    Update Carousel
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Carousel</h6>
            <a href="{{url('carousel')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Carousel List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($carousel, ['method' => 'put','enctype'=>'multipart/form-data','class'=>'user','route' => ['carousel.update', $carousel->id]]) !!}
            @include('carousel.form')

            <div class="col-group mb-3">
                {!! Form::select('status', $status, null, ['placeholder' => 'Select Status', 'class'=>'form-control form-control-profile']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::submit('Update Carousel', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

