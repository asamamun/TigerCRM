@extends('layouts.light')

@section('pagetitle')
    Update Supplier
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Supplier</h6>
            <a href="{{url('supplier')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Supplier List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($supplier, ['method' => 'put','class'=>'user','route' => ['supplier.update', $supplier->slug]]) !!}
            @include('supplier.form')

            <div class="form-group">
                {!! Form::submit('Update Supplier', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

