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

<h1 class="title">Order List</h1>

<table id="customers">
  <tr>
    <th>#</th>
    <th>User</th>
    <th>Customer</th>
    <th>Net Total</th>
    <th>Discount</th>
    <th>Grand Total</th>
    <th>Payment Type</th>
    <th>TrxID</th>
  </tr>
  @php
  $sl = 1;
  @endphp
  @foreach ($allorder as $order)
  <tr>
    <td>{{$sl++}}</td>
    <td>{{$order->user->name.' '.$order->user->lname}}</td>
    <td>{{$order->customer->name}}</td>
    <td>{{$order->nettotal}}</td>
    <td>{{$order->discount}}</td>
    <td>{{$order->grandtotal}}</td>
    <td>{{$order->account->name}}</td>
    <td>{{$order->trxId}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
