@extends('layouts.light')

@section('pagetitle')
    Update Transfer
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Transfer</h6>
            <a href="{{url('transfer')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Transfer List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($transfer, ['method' => 'put','enctype'=>'multipart/form-data','class'=>'user','route' => ['transfer.update', $transfer->id]]) !!}
            @include('transfer.form')

            <div class="form-group">
                {!! Form::submit('Update Transfer', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

