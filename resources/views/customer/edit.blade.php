@extends('layouts.light')

@section('pagetitle')
    Update Customer
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Customer</h6>
            <a href="{{url('customer')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Customer List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($customer, ['method' => 'put','class'=>'user','route' => ['customer.update', $customer->id]]) !!}
            @include('customer.form')

            <div class="form-group">
                {!! Form::submit('Update Customer', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

