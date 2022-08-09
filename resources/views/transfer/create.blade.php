@extends('layouts.light')

@section('pagetitle')
    Transfer
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Transfer</h6>
            <a href="{{url('transfer')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Category List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'transfer.store','class'=>'user','enctype'=>'multipart/form-data'])}}
            @include('transfer.form')

            <div class="form-group">
                {!! Form::submit('Transfer', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

