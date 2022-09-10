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

<h1 class="title">Purchase List</h1>

<table id="customers">
  <tr>
    <th>#</th>
    <th>Supplier</th>
    <th>Net Total</th>
    <th>Discount</th>
    <th>Grand Total</th>
    <th>Payment Type</th>
    <th>TrxID</th>
  </tr>
  @php
  $sl = 1;
  @endphp
  @foreach ($allinvoice as $invoice)
  <tr>
    <td>{{$sl++}}</td>
    <td>{{$invoice->supplier->name}}</td>
    <td>{{$invoice->nettotal}}</td>
    <td>{{$invoice->discount}}</td>
    <td>{{$invoice->grandtotal}}</td>
    <td>{{$invoice->account->name}}</td>
    <td>{{$invoice->trxId}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
