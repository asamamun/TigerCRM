@extends('layouts.light')

@section('pagetitle')
    Update Capital
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Capital</h6>
            <a href="{{url('capital')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Capital List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($capital, ['method' => 'put','enctype'=>'multipart/form-data','class'=>'user','route' => ['capital.update', $capital->id]]) !!}
            @include('capital.form')

            <div class="form-group">
                {!! Form::submit('Update capital', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

