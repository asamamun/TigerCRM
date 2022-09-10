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

<h1 class="title">Category List</h1>

<table id="customers">
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Icon</th>
  </tr>
  @php
      $sl = 1;
  @endphp
  @foreach ($allcategory as $category)
  <tr>
    <td>{{$sl++}}</td>
    <td>{{$category->name}}</td>
    <td> <img src="{{url(Storage::url($category->icon))}}" class="iconimage" alt="Icon" width="70px" height="70px">  </td>
  </tr>
  @endforeach
</table>

</body>
</html>
