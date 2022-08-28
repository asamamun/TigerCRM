<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Invoice</title>
  <link rel="stylesheet" href="style.css" media="all" />
  <link rel="stylesheet" href="{{url('assets/css/invoicestyle.css')}}" media="all" />
</head>

<body>
  <header class="clearfix">
    <div id="logo">
    <img src="{{url('assets/img/logo.png')}}" alt="">
    </div>
    <div id="company">
      <h2 class="name">TigerCRM</h2>
      <div>Mirpur-10, Dhaka-1216</div>
      <div>+8801911977900</div>
      <div><a href="mailto:info@tigercrm.com">info@tigercrm.com</a></div>
    </div>
    </div>
  </header>
  <main>
    @foreach ($orderdetails as $details)
    @endforeach
    <div id="details" class="clearfix">
      <div id="client">
        <div class="to">INVOICE TO:</div>
        <h2 class="name"><strong>{{$details->order->customer->name}}</strong></h2>
        <div class="mobile">{{$details->order->customer->mobile}}</div>
        <div class="email">{{$details->order->customer->email}}</div>
        <div class="address">Customer Address</div>
      </div>
      <div id="invoice">
        <h1>INVOICE #{{$details->order->id}}</h1>
        <div class="date">Date: {{$details->order->created_at}}</div>
        <!-- <div class="date">Due Date: 30/06/2014</div> -->
      </div>
    </div>
    <table border="0" cellspacing="0" cellpadding="0">
      <thead>
        <tr>
          <th class="no">#</th>
          <th class="desc">DESCRIPTION</th>
          <th class="unit">UNIT PRICE</th>
          <th class="qty">QUANTITY</th>
          <th class="total">TOTAL</th>
        </tr>
      </thead>
      <tbody>
        @php
            $sl = 1;
        @endphp
        @foreach ($orderdetails as $details)
        <tr>
          <td class="no">{{$sl++}}</td>
          <td class="desc">{{$details->product->name}}</td>
          <td class="unit"> {{$details->price}}</td>
          <td class="qty">{{$details->quantity}}</td>
          <td class="total">&#2547; {{$details->total}}</td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <td colspan="2"></td>
          <td colspan="2">SUBTOTAL</td>
          <td>&#2547; {{$details->order->nettotal}}</td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td colspan="2">DISCOUNT</td>
          <td>&#2547; {{$details->order->discount}}</td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td colspan="2">GRAND TOTAL</td>
          <td>&#2547; {{$details->order->grandtotal}}</td>
        </tr>
      </tfoot>
    </table>
    <div id="thanks">Thank you!</div>
    <div id="notices">
      <div>NOTICE:</div>
      <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
    </div>
  </main>
  <footer>
    Invoice was created on a computer and is valid without the signature and seal.
  </footer>
</body>

</html>