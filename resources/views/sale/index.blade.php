@extends('layouts.light')

@section('pagetitle')
    Sale
@endsection

@section('content')



<div class="card card-hover shadow mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">
                {!! Form::open(['class'=>'user','url' => 'sale']) !!}
                <div class="form-group">
                    {!! Form::text('search', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'productsearch', 'placeholder'=>'Enter Product Name/SKU/Scan Bar Code']) !!}
                </div>
                {!! Form::close() !!}
                <div class="sale-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Barcode</th>
                                <th>Product(s)</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>x</th>
                            </tr>
                        </thead>
                        <tbody id="dyn_tr"></tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    {!! Form::text('customersearch', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'customersearch', 'placeholder'=>'Enter Customer Mobile Number']) !!}
                </div>
                <div id="dyn_customer"></div>
                <hr>
                <div class="row sale-table">
                    <div class="col-md-7 mb-3">Total:</div>
                    <div class="col-md-5 text-end">&#2547; <span id="total"></span></div>
                </div>
                <div class="row sale-table">
                    <div class="col-md-7">Discount:</div>
                    <div class="form-group col-md-5 text-end">
                        {!! Form::text('discount', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'discount', 'value'=>'0']) !!}
                        {{-- <span>&#2547;</span> --}}
                    </div>
                </div>
                <div class="row sale-table">
                    <div class="col-md-7 mb-4"><b>Grand Total: </b></div>
                    <div class="col-md-5 text-end">&#2547; <span id="grandtotal"></span></div>
                </div>
                <hr>
                <div class="row sale-table">
                    <div class="form-group col-12">
                        {!! Form::text('payment_method', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'payment_method', 'placeholder'=>'Select Payment Method']) !!}
                        {!! Form::text('trxId', null, ['class'=>'d-none form-control form-control-profile', 'id'=>'trxId', 'placeholder'=>'Transaction ID']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group col-12">
                {!! Form::text('salenote', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'salenote','placeholder'=>'Sale Note']) !!}
            </div>
            <div class="form-group col-12">
                {!! Form::submit('Save', ['class'=>'btn btn-primary btn-profile btn-block','id'=>'saveBtn']) !!}
            </div>
            <h3 id="responseMessage"></h3>
        </div>
    </div>
</div>

@endsection
