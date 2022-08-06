@include('partial.flash')
@include("partial.error")

<div class="form-group row">
    <div class="col-sm-4 mb-3 mb-sm-0">
        {!! Form::text('name', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'name', 'placeholder'=>'Name']) !!}
    </div>
    <div class="col-sm-4 mb-3 mb-sm-0">
        {!! Form::text('accountnumber', null, ['class'=>'form-control form-control-profile', 'id'=>'accountnumber', 'placeholder'=>'Account Number']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::number('balance', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'balance', 'placeholder'=>'Balance']) !!}
    </div>

</div>
