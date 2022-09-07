@extends('layouts.light')

@section('pagetitle')
    Update Product
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Product</h6>
            <a href="{{url('product')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Product List">
                <i class="fas fa-undo"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($product, ['method' => 'put','enctype'=>'multipart/form-data','class'=>'user','route' => ['product.update', $product->slug]]) !!}
            @include('product.form')

            <div class="form-group">
                {!! Form::submit('Update Product', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection


@section('script')
<script>
$(document).ready(function () {
    $(document).on("click",".remove-image",function(){
        if(!confirm("Are You Sure?")){return;}
        $id = $(this).data('id');
        alert("remove" + $id);
/*         $.ajax({
            type: "post",
            url: "url",
            data: {id:$id},
            dataType: "dataType",
            success: function (response) {
                if(response.done = 1){
                    location.reload();
                }
            }
        }); */
    })
});
    </script>
@endsection
