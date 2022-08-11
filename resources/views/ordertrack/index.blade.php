@extends('layouts.ecommerce')

@section('pagetitle')
Order Track
@endsection

@section('content')


<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <span class="breadcrumb-item active">Contact</span>
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
                    @if ($user->profile)
                    <img src="{{url(Storage::url($user->profile->image))}}" class="profileimage" alt="Profile Image">
                    @else
                    <img src="{{asset('assets/img/undraw_profile.svg')}}" class="profileimage" alt="Profile Image">
                    @endif
                    <div class="profilename text-center py-2">
                        Syed Zayed Hossain
                    </div>
                </div>
                <a class="" href="{{'customerdashboard'}}">
                    <div class="dashboard-sidebar">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </div>
                </a>
                <a class="" href="{{'purchasehistory'}}">
                    <div class="dashboard-sidebar">
                        <i class="fas fa-file-alt"></i>
                        <span>Purchase History</span>
                    </div>
                </a>
                <a class="" href="#">
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
                        Order Track
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card border-left-primary col-12 shadow mb-4">
                    <div class="card-body">
                        <h1>Hello World</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit porro dolor eveniet nihil quas dicta consectetur consequatur quaerat aperiam minus quos deleniti et excepturi sapiente neque doloremque ullam, in vero.
                        Ut quisquam ad sed error ipsum fuga inventore provident cum magnam. Odio magni, quae, dicta aperiam vero tempore sequi consectetur culpa sint dolor facere non numquam minima accusantium impedit recusandae.
                        Voluptatem expedita voluptatum amet non eos dignissimos modi cum dolore accusamus nobis? Eum, ipsa quaerat aut doloremque ullam maxime odio fuga illum modi temporibus veniam possimus amet dolor, commodi eaque!
                        Quidem ut officia at quaerat libero iste voluptates dolores expedita. Quae distinctio doloremque aut est provident quibusdam illum quos necessitatibus dicta, tempore nobis animi quasi fugit iusto cumque sed ipsum.
                        Nesciunt quod minus dignissimos consectetur accusamus adipisci? Tempora, accusamus. Optio vero doloremque ullam modi magni magnam, reprehenderit eaque voluptas accusamus similique dolorum alias qui fugiat nihil, dolore iste, fugit odit!</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</div>
{{-- dashboard end --}}
@endsection