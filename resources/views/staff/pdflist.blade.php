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

<h1 class="title"> Trashed  Staff List</h1>

<table id="customers">
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Mobile No</th>
    <th>email</th>
    <th>Designation</th>
    <th>salary</th>
  </tr>
  @php
  $sl =1;
  @endphp
  @foreach ($allstaff as $staff)
  <tr>
    <td>{{$sl++}}</td>
    <td>{{$staff->name}}</td>
    <td>{{$staff->mobile}}</td>
    <td>{{$staff->email}}</td>
    <td>{{$staff->designation}}</td>
    <td>{{$staff->salary}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
