@extends('layouts.light')

@section('pagetitle')
    Purchase
@endsection

@section('content')



<div class="card card-hover shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Purchase</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">
                {!! Form::open(['class'=>'user','url' => 'purchase']) !!}
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
                    {!! Form::text('suppliersearch', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'suppliersearch', 'placeholder'=>'Enter Supplier Mobile Number']) !!}
                </div>
                <div id="dyn_customer"></div>
                <hr>
                <div class="row sale-table">
                    <div class="col-md-7 mb-3">Total:</div>
                    <div class="col-md-5 text-right">&#2547; <span id="total"></span></div>
                </div>
                <div class="row sale-table">
                    <div class="col-md-7">Discount:</div>
                    <div class="form-group col-md-5 text-right">
                        {!! Form::number('discount', '0', ['required', 'class'=>'form-control form-control-profile text-right', 'id'=>'discount']) !!}
                        {{-- <span>&#2547;</span> --}}
                    </div>
                </div>
                <div class="row sale-table">
                    <div class="col-md-7 mb-4"><b>Grand Total: </b></div>
                    <div class="col-md-5 text-right">&#2547; <span id="grandtotal"></span></div>
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
                {!! Form::text('purchasenote', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'purchasenote','placeholder'=>'Purchase Note']) !!}
            </div>
            <div class="form-group col-12">
                {!! Form::submit('Save', ['class'=>'btn btn-primary btn-profile btn-block','id'=>'saveBtn']) !!}
            </div>
            <h3 id="responseMessage"></h3>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script>
        
    </script>
@endsection