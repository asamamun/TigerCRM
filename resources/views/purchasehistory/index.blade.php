@extends('layouts.ecommerce')

@section('pagetitle')
Purchase History
@endsection

@section('catmenu')
@include('partial.catmenu',['categories'=>$categories])
@endsection

@section('content')


<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="{{url('/')}}">Home</a>
                <span class="breadcrumb-item active">Purchase History</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

{{-- dashboard start --}}
<div class="container">
    <div class="row">
        <div class="col-lg-3 mb-4">
            <div class="card border-left-primary shadow py-2">
                <div class="card-body">
                    @if ($customer->customerprofile)
                    <img src="{{url(Storage::url($customer->customerprofile->image))}}" class="profileimage" alt="Profile Image">
                    @else
                    <img src="{{asset('assets/img/undraw_profile.svg')}}" class="profileimage" alt="Profile Image">
                    @endif
                    <div class="profilename text-center py-2">
                        {{ $customer->name  }}
                    </div>
                </div>
                <a class="" href="{{url('customerdashboard')}}">
                    <div class="dashboard-sidebar">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </div>
                </a>
                <a class="" href="{{url('purchasehistory')}}">
                    <div class="dashboard-sidebar">
                        <i class="fas fa-file-alt"></i>
                        <span>Purchase History</span>
                    </div>
                </a>
                <a class="" href="{{url('customerprofile')}}">
                    <div class="dashboard-sidebar">
                        <i class="fas fa-user"></i>
                        <span>Manage Profile</span>
                    </div>
                </a>

            </div>
        </div>
        <div class="col-lg-9">
            <div class="row">
                <div class="card border-left-primary col-12 shadow mb-4">
                    <div class="card-body">
                        Purchase History
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($codorders as $order)
                <div class="card border-left-primary col-12 mb-4 shadow">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-5 invoice-number">
                                <a href="{{url('ordertrack')}}">
                                    {{$order->order_number}}
                                </a>
                                <p>{{$order->created_at->format('d-m-Y h:i A')}}</p>
                            </div>
                            <div class="col-3">
                                <a href="{{url('ordertrack')}}">{{number_format($order->total,2)}}</a>
                            </div>
                            <div class="col-2 text-left d-flex">
                                @if ($order->created_at->diffInDays(now()) < 3 && $order->delivery_status == 'Pending')
                                <button role="button" data-id="{{$order->id}}" class="btn btn-sm btn-danger mr-1 cancelBtn" title="Calcel this order?">Cancel</button>
                                @endif
                                <div class="btn-group btn-group-sm" role="group">
                                    @if ($order->delivery_status == 'Pending')
                                    <button type="button" class="btn btn-secondary" disabled>{{$order->delivery_status}}</button>
                                    @elseif($order->delivery_status == 'Cancelled')
                                    <button type="button" class="btn btn-danger" disabled>{{$order->delivery_status}}</button>
                                    @elseif($order->delivery_status == 'Delivered')
                                    <button type="button" class="btn btn-success" disabled>{{$order->delivery_status}}</button>
                                    @elseif($order->delivery_status == 'Confirmed')
                                    <button type="button" class="btn btn-info" disabled>{{$order->delivery_status}}</button>
                                    @endif
                                    <button class="button2" disabled>Unpaid</button>
                                </div>
                            </div>
                            <div class="col-2 text-right">
                                <a href="#" role="button" class="download-btn" title="Download Invoice">
                                    <i class="fas fa-arrow-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="card border-left-primary col-12 mb-4 shadow">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-12 text-center">
                                <h3>No Order Found</h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>

        </div>
    </div>
</div>
</div>
{{-- dashboard end --}}
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $('.cancelBtn').click(function(){
            var order_id = $(this).data('id');
            // alert(order_id); return;
            $.ajax({
                url: "{{url('ordercancel')}}",
                type: "POST",
                data: {
                    order_id: order_id
                },
                success: function (response) {
                    alert(response.success);
                    location.reload();
                }
            });
        });
    });
</script>
@endsection