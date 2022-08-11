@include('partial.flash')
@include("partial.error")

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::text('title', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'name', 'placeholder'=>'Title']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::file('image', ['required', 'class'=>'form-control form-control-profile', 'id'=>'image']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::text('description', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'description', 'placeholder'=>'Description']) !!}
</div>