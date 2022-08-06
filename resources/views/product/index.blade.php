@extends('layouts.light')

@section('pagetitle')
    Product
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-primary"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                aria-labelledby="dropdownMenuLink">
                {{-- <div class="dropdown-header">Dropdown Header:</div> --}}
                <a class="dropdown-item" href="{{url('product/create')}}">
                    <i class="fas fa-plus fa-sm fa-fw mr-2 text-primary"></i>
                    Add
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-file-pdf fa-sm fa-fw mr-2 text-primary"></i>
                    PDF
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-print fa-sm fa-fw mr-2 text-primary"></i>
                    Print
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-file-csv fa-sm fa-fw mr-2 text-primary"></i>
                    CSV
                </a>
            </div>
        </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>#</th>
                        <th>Name</th>
                        <th>Barcode</th>
                        <th>Brand</th>
                        <th>Supplier</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Image</th>
                        <th>Feature</th>
                        <th>Description</th>
                        <th>Information</th>
                        <th>Regular Price</th>
                        <th>Price</th>
                        <th>Wholesale Price</th>
                        <th>Purchase Price</th>
                        <th>Discount</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Action</th>
                        <th>#</th>
                        <th>Name</th>
                        <th>Barcode</th>
                        <th>Brand</th>
                        <th>Supplier</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Image</th>
                        <th>Feature</th>
                        <th>Description</th>
                        <th>Information</th>
                        <th>Regular Price</th>
                        <th>Price</th>
                        <th>Wholesale Price</th>
                        <th>Purchase Price</th>
                        <th>Discount</th>
                        <th>Quantity</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($allproduct as $product)
                    <tr>
                        <td class="d-flex justify-content-center">
                            {!! Form::open(['method' => 'delete','route' => ['product.destroy', $product->id],'id'=>'deleteform']) !!}
                            <a href="javascript:void(0)" class="btn btn-primary btn-circle btn-sm" title="Delete" onclick="event.preventDefault();if (!confirm('Are you sure?')) return; document.getElementById('deleteform').submit();">
                                <i class="fas fa-trash"></i>
                            </a>
                            {!! Form::close() !!}
                            <a href="{{url('product/'.$product->id.'/edit')}}" class="btn btn-primary btn-circle btn-sm" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            {{-- <a href="#" class="btn btn-primary btn-circle btn-sm" title="Delete">
                                <i class="fas fa-trash"></i>
                            </a> --}}
                            <a href="{{url('product/'.$product->id)}}" class="btn btn-primary btn-circle btn-sm" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->barcode }}</td>
                        <td>{{ $product->brand->name }}</td>
                        <td>{{ $product->supplier->name }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->subcategory->name }}</td>
                        <td>
                            @if ($product->image)
                                <img src="{{url(Storage::url($product->image))}}" class="iconimage" alt="Image">       
                            @else            
                            @endif
                        </td>
                        <td>{{ $product->feature }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->information }}</td>
                        <td>{{ $product->regular_price }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->wholesale_price }}</td>
                        <td>{{ $product->purchase_price }}</td>
                        <td>{{ $product->discount }}</td>
                        <td>{{ $product->quantity }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection