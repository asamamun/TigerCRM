@extends('layouts.light')

@section('pagetitle')
    Update Category
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Category</h6>
            <a href="{{url('category')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Category List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($category, ['method' => 'put','enctype'=>'multipart/form-data','class'=>'user','route' => ['category.update', $category->id]]) !!}
            @include('category.form')

            <div class="form-group">
                {!! Form::submit('Update Category', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

