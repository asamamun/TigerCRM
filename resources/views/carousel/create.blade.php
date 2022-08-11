@extends('layouts.light')

@section('pagetitle')
    Add Carousel
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Add Carousel</h6>
            <a href="{{url('carousel')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Carousel List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'carousel.store','class'=>'user','enctype'=>'multipart/form-data'])}}
            @include('carousel.form')

            <div class="form-group">
                {!! Form::submit('Add Carousel', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

