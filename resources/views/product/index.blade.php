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
                <a class="dropdown-item" href="{{url('export_product_pdf')}}">
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
                        <th>#</th>
                        <th>Name</th>
                        <th>Barcode</th>
                        <th>
                            <span class="text-info">Brand</span><br>
                            <span class="text-primary">Supplier</span><br>
                            <span class="text-success">Category</span><br>
                            <span class="text-warning">Subcategory</span>
                        </th>
                        <th>
                            <span class="text-info">Regular Price</span><br>
                            <span class="text-primary">Price</span><br>
                            <span class="text-success">Wholesale Price</span><br>
                            <span class="text-warning">Purchase Price</span>
                        </th>
                        <th>
                            <span class="text-info">Discount</span><br>
                            <span class="text-primary">Quantity</span>
                        </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Barcode</th>
                        <th>
                            <span class="text-info">Brand</span><br>
                            <span class="text-primary">Supplier</span><br>
                            <span class="text-success">Category</span><br>
                            <span class="text-warning">Subcategory</span>
                        </th>
                        <th>
                            <span class="text-info">Regular Price</span><br>
                            <span class="text-primary">Price</span><br>
                            <span class="text-success">Wholesale Price</span><br>
                            <span class="text-warning">Purchase Price</span>
                        </th>
                        <th>
                            <span class="text-info">Discount</span><br>
                            <span class="text-primary">Quantity</span>
                        </th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($allproduct as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->barcode }}</td>
                        <td>
                            <span class="text-info">{{ $product->brand->name }}</span><br>
                            <span class="text-primary">{{ $product->supplier->name }}</span><br>
                            <span class="text-success">{{ $product->category->name }}</span><br>
                            <span class="text-warning">{{ $product->subcategory?->name }}</span>
                        </td>
                        <td>
                            <span class="text-info">{{ $product->regular_price }}</span><br>
                            <span class="text-primary">{{ $product->price }}</span><br>
                            <span class="text-success">{{ $product->wholesale_price }}</span><br>
                            <span class="text-warning">{{ $product->purchase_price }}</span>
                        </td>
                        <td>
                            <span class="text-info">{{ $product->discount }}</span><br>
                            <span class="text-primary">{{ $product->quantity }}</span>
                        </td>
                        <td class="d-flex justify-content-center">
                            {!! Form::open(['method' => 'delete','route' => ['product.destroy', $product->slug],'id'=>'deleteform']) !!}
                            <a href="javascript:void(0)" class="btn btn-primary btn-circle btn-sm" title="Delete" onclick="event.preventDefault();if (!confirm('Are you sure?')) return; document.getElementById('deleteform').submit();">
                                <i class="fas fa-trash"></i>
                            </a>
                            {!! Form::close() !!}
                            {{-- <div class="input-group-btn mx-2">
                                <button class="btn btn-sm btn-danger btn-circle delete" type="button" value="{{$product->id}}"><i class="fa fa-times"></i></button>
                            </div> --}}
                            <a href="{{url('product/'.$product->slug.'/edit')}}" class="btn btn-primary btn-circle btn-sm" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            {{-- <a href="#" class="btn btn-primary btn-circle btn-sm" title="Delete">
                                <i class="fas fa-trash"></i>
                            </a> --}}
                            <a href="{{url('product/'.$product->slug)}}" class="btn btn-primary btn-circle btn-sm" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@section('script')
    <script>
    var BASE_URL = "{{url('/')}}";
        $(document).ready(function(){
            $('.delete').click(function(e){
                e.preventDefault();
                var id = $(this).val();
                // alert(id);
                // return;
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: 'POST',
                        url: BASE_URL + '/product_delete',
                        data: {
                            'product_id' : id,
                            'delete' : true
                        },
                        success: function(response){
                            Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        );
                        // $("#wish_table").load(location.href + " #wish_table");

                        setTimeout(function(){
                        location.reload();
                        }, 1000);
                        }
                    })   
                }
                })
            });
        });

        
    </script>
@endsection