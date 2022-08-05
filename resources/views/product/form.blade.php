@include('partial.flash')
@include("partial.error")

<div class="form-group">
    {!! Form::text('name', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'name', 'placeholder'=>'Name']) !!}
</div>
<div class="form-group row">
    <div class="col-sm-4 mb-3 mb-sm-0">
        {!! Form::select('brand_id', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Select Brand', 'class'=>'form-control form-control-profile']) !!}
    </div>
    <div class="col-sm-4 mb-3 mb-sm-0">
        {!! Form::select('supplier_id', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Select Supplier', 'class'=>'form-control form-control-profile']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::select('category_id', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Select Category', 'class'=>'form-control form-control-profile']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::select('subcategory_id', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Select Subcategory', 'class'=>'form-control form-control-profile']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::file('image', ['required', 'class'=>'form-control form-control-profile', 'id'=>'image']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::text('feature', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'feature', 'placeholder'=>'Feature']) !!}
</div>
<div class="form-group">
    {!! Form::text('description', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'description', 'placeholder'=>'Description']) !!}
</div>
<div class="form-group">
    {!! Form::text('information', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'information', 'placeholder'=>'Information']) !!}
</div>
<div class="form-group row">
    <div class="col-sm-4 mb-3 mb-sm-0">
        {!! Form::text('regular_price', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'regular_price', 'placeholder'=>'Regular Price']) !!}
    </div>
    <div class="col-sm-4 mb-3 mb-sm-0">
        {!! Form::text('price', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'price', 'placeholder'=>'Price']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::text('wholesale_price', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'wholesale_price', 'placeholder'=>'Wholesale Price']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::text('purchase_price', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'purchase_price', 'placeholder'=>'Purchase Price']) !!}
    </div>
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::text('discount', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'discount', 'placeholder'=>'Discount (%)']) !!}
    </div>
</div>