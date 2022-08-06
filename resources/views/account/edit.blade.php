@extends('layouts.light')

@section('pagetitle')
    Update Account
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Account</h6>
            <a href="{{url('account')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Account List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($account, ['method' => 'put','enctype'=>'multipart/form-data','class'=>'user','route' => ['account.update', $account->id]]) !!}
            @include('account.form')

            <div class="form-group">
                {!! Form::submit('Update Account', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

