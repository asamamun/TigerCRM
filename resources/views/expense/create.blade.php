@extends('layouts.light')

@section('pagetitle')
    Add Expense
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Add Expense</h6>
            <a href="{{url('expense')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Expense List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'expense.store','class'=>'user','enctype'=>'multipart/form-data'])}}
            @include('expense.form')

            <div class="form-group">
                {!! Form::submit('Add Expense', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

