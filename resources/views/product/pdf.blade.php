<!DOCTYPE html>
<html>
<head>
<style>
    .title{
        text-align: center;
    }
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1 class="title">Product List</h1>

<table id="customers">
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Features</th>
    <th>Purchase Price</th>
    <th>Price</th>
  </tr>
  @foreach ($allproduct as $product)
  <tr>
    <td>{{$product->id}}</td>
    <td>{{$product->name}}</td>
    <td>{{$product->feature}}</td>
    <td>{{$product->purchase_price}}</td>
    <td>{{$product->price}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
