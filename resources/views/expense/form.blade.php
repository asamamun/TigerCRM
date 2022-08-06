@include('partial.flash')
@include("partial.error")

<div class="form-group row">
    <div class="col-sm-4 mb-3 mb-sm-0">
        {!! Form::text('name', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'name', 'placeholder'=>'Name']) !!}
    </div>
    <div class="col-sm-4 mb-3 mb-sm-0">
        {!! Form::number('amount', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'amount', 'placeholder'=>'Amount']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::select('payment_type', $accounts, null, ['placeholder' => 'Payment Type', 'class'=>'form-control form-control-profile']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::text('description', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'description', 'placeholder'=>'Description']) !!}
</div>
