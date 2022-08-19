@extends('layouts.light')

@section('pagetitle')
    Product
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Product Details</h6>
        <a href="{{url('product')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Product List">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <tr class="table-bordered">
                <th>Id</th>
                <td>{{ $product->id }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Name</th>
                <td>{{ $product->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Barcode</th>
                <td>{{ $product->barcode }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Brand</th>
                <td>{{ $product->brand->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Supplier</th>
                <td>{{ $product->supplier->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Category</th>
                <td>{{ $product->category->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Subcategory</th>
                <td>{{ $product->subcategory->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Feature</th>
                <td>{{ $product->feature }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Description</th>
                <td>{{ $product->description }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Information</th>
                <td>{{ $product->information }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Regular Price</th>
                <td>{{ $product->regular_price }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Price</th>
                <td>{{ $product->price }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Wholesale Price</th>
                <td>{{ $product->wholesale_price }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Purchase Price</th>
                <td>{{ $product->purchase_price }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Discount</th>
                <td>{{ $product->discount }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Quantity</th>
                <td>{{ $product->quantity }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection