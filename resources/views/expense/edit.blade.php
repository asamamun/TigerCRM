@extends('layouts.light')

@section('pagetitle')
    Update Expense
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Expense</h6>
            <a href="{{url('expense')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Expense List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($expense, ['method' => 'put','enctype'=>'multipart/form-data','class'=>'user','route' => ['expense.update', $expense->id]]) !!}
            @include('expense.form')

            <div class="form-group">
                {!! Form::submit('Update expense', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

