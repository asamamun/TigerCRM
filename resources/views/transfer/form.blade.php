@include('partial.flash')
@include("partial.error")

<div class="form-group row">  
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::select('sender_account', $accounts, null, ['placeholder' => 'Sender Account', 'class'=>'form-control form-control-profile']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::select('receiver_account', $accounts, null, ['placeholder' => 'Receiver Account', 'class'=>'form-control form-control-profile']) !!}
    </div>
</div>
<div class="form-group row">  
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::number('amount', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'description', 'placeholder'=>'Amount']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::text('description', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'description', 'placeholder'=>'Description']) !!}
    </div>
</div>