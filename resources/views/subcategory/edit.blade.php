@extends('layouts.light')

@section('pagetitle')
    Update Subcategory
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Subcategory</h6>
            <a href="{{url('subcategory')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Subcategory List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($subcategory, ['method' => 'put','enctype'=>'multipart/form-data','class'=>'user','route' => ['subcategory.update', $subcategory->id]]) !!}
            @include('subcategory.form')

            <div class="form-group">
                {!! Form::submit('Update Subcategory', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

