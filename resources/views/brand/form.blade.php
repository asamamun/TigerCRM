@include('partial.flash')
@include("partial.error")

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::text('name', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'name', 'placeholder'=>'Name']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::file('icon', ['required', 'class'=>'form-control form-control-profile', 'id'=>'icon']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::text('description', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'description', 'placeholder'=>'Description']) !!}
</div>