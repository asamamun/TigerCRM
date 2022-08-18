@extends('layouts.light')

@section('pagetitle')
    Add Product
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Add Product</h6>
            <a href="{{url('product')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Product List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'product.store','class'=>'user','enctype'=>'multipart/form-data'])}}
            @include('product.form')

            <div class="form-group">
                {!! Form::submit('Add Product', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            function createselect(ob){
            $("#subcategory_id").html("");
            let html = "";
                for (const key in ob) {
                    if (Object.hasOwnProperty.call(ob, key)) {
                        //const element = ob[key];
                        html += "<option value='"+key+"'>"+ob[key]+"</option>";
                    }
                }
                $("#subcategory_id").html(html);
            }
            $("#category_id").change(function(){
            // console.log( $(this).val() )
            let URL = "{{url("getsubcategories")}}";
            $.ajax({
                type: "get",
                url: URL + '/'+ $(this).val(),
                data: "data",
                dataType: "json",
                success: function (response) {
                    createselect(response);
                }
            });
            });
        });
    </script>
@endsection