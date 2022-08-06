@extends('layouts.light')

@section('pagetitle')
    Add Subcategory
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Add Subcategory</h6>
            <a href="{{url('subcategory')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Category List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'subcategory.store','class'=>'user','enctype'=>'multipart/form-data'])}}
            @include('subcategory.form')

            <div class="form-group">
                {!! Form::submit('Add Subcategory', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

