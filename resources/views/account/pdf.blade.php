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

<h1 class="title">Account List</h1>

<table id="customers">
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Account No</th>
    <th>Balance</th>
  </tr>
  @foreach ($allaccount as $account)
  <tr>
    <td>{{$account->id}}</td>
    <td>{{$account->name}}</td>
    <td>{{$account->accountnumber}}</td>
    <td>{{$account->balance}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
