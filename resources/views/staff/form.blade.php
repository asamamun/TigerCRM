@include('partial.flash')
@include("partial.error")

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::text('name', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'name', 'placeholder'=>'Name']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::text('mobile', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'mobile', 'placeholder'=>'Mobile']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::email('email', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'email', 'placeholder'=>'Email']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::text('address', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'address', 'placeholder'=>'Address']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::text('designation', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'designation', 'placeholder'=>'Designation']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::text('salary', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'salary', 'placeholder'=>'Salary']) !!}
    </div>
</div>