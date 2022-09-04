@extends('layouts.ecommerce')
@section('pagetitle')
    Wishlist
@endsection

@section('catmenu')
@include('partial.catmenu',['categories'=>$categories])
@endsection

@section('content')

<!-- Cart Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-12 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0" id="wish_table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="">
                    @php
                        $sl = 1;
                    @endphp
                    @forelse ($wishlists as $wishlist)
                    <tr>
                        <td class="align-middle">{{$sl++}}</td>
                        <td class="align-middle"><a href="{{url('item/'.$wishlist->product->slug)}}"><img src="{{url(Storage::url($wishlist->product->productimages->first()->name))}}" alt="Image" style="width: 60px;"></a></td>
                        <td class="align-middle"><a href="{{url('item/'.$wishlist->product->slug)}}">{{$wishlist->product->name}}</a></td>
                        <td class="align-middle">Tk {{$wishlist->product->price}}</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn mx-2">
                                    <button class="btn btn-sm btn-primary btn-minus" ><i class="fas fa-shopping-cart"></i></button>
                                </div>
                                <div class="input-group-btn mx-2">
                                    <button class="btn btn-sm btn-danger delete" type="button" value="{{$wishlist->id}}"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                        </td>
                    </tr>                        
                    @empty
                    <tr>
                        <td colspan="5"><h2><i class="fas fa-heart"></i> Empty</h2></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Cart End -->
@endsection

@section('script')
    <script>
    var BASE_URL = "{{url('/')}}";
        $(document).ready(function(){
            $('.delete').click(function(e){
                e.preventDefault();
                var id = $(this).val();
                // alert(id);
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
                        url: BASE_URL + '/wishlist_delete',
                        data: {
                            'wishlist_id' : id,
                            'delete' : true
                        },
                        success: function(response){
                            location.reload();
                            Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        );
                        // $("#wish_table").load(location.href + " #wish_table");

                        // setTimeout(function(){
                        // location.reload();
                        // }, 1000);
                        }
                    })
                    
                }
                })
            });
        });

        
    </script>
@endsection