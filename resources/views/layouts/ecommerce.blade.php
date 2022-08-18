<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tiger Ecommerce | @yield('pagetitle')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="#" rel="icon">

    <!-- Google Web Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/lib/owlcarousel/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('assets/css/ecomercestyle.css')}}" rel="stylesheet">
    <style> 
        .profileimage{
        height: 100px;
        width: 100px;
        border-radius: 50%;
        margin-top: 0;
        display: block;
        margin: 0 auto;
        }
        .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #e3e6f0;
        border-radius: 0.35rem;
        transition: transform .3s;
        }
        /* .card:hover{
        transform: scale(1.04);
        } */
        .row .border-left-primary {
        border-left: 0.25rem solid #f6c23e;
        }
        /* .shadow {
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        } */
        .profilename{
            font-size: 20px;
            font-weight: 600;
        }
        .dashboard-sidebar{
            text-decoration: none;
            /* background-color: #f6c23e; */
            color: black;
            padding: 10px;
            padding-left: 20px;

        }
        .dashboard-sidebar:hover{
            background-color: #f6c23e;
        }
        .card .card-body .align-items-center{
            font-size: 16px;
        }
        .card .card-body .align-items-center .col-2 .btn-group .button1{
            background-color: #4CAF50;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        .card .card-body .align-items-center .col-2 .btn-group .button2{
            background-color: #f6c23e;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        .card .card-body .align-items-center .col-2 .download-btn .fa-arrow-down{
            background-color: #f6c23e;
            border: none;
            border-radius: 50%;
            color: black;
            text-decoration: none;
            /* display: inline-block; */
            padding: 9px;
            text-align: center;
            font-size: 15px;
        }
        .card .card-body .align-items-center .invoice-number{
            /* background-color: #f6c23e; */
        }
        .card .card-body .align-items-center .invoice-number a{
            /* background-color: #f6c23e; */
            /* color: aqua; */
            /* font-size: 14px; */
        }
        .card .card-body .align-items-center .invoice-number p{
            font-size: 14px;
        }
        /* .product-info-group{
            display: flex;
        } */
        .product-info{
            display: inline-block;
            background: rgba(55,73,187,.07);
            /* background-color: #bcccda; */
            color: #000;
            margin: 2px;
            padding: 5px 10px;
            border-radius: 15px;
        }

        body{background-color: #eeeeee;.container{margin-top:50px;margin-bottom: 50px}.card{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-orient: vertical;-webkit-box-direction: normal;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0, 0, 0, 0.1);border-radius: 0.10rem}.card-header:first-child{border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0}.card-header{padding: 0.75rem 1.25rem;margin-bottom: 0;background-color: #fff;border-bottom: 1px solid rgba(0, 0, 0, 0.1)}.track{position: relative;background-color: #ddd;height: 7px;display: -webkit-box;display: -ms-flexbox;display: flex;margin-bottom: 60px;margin-top: 50px}.track .step{-webkit-box-flex: 1;-ms-flex-positive: 1;flex-grow: 1;width: 25%;margin-top: -18px;text-align: center;position: relative}.track .step.active:before{background: #FF5722}.track .step::before{height: 7px;position: absolute;content: "";width: 100%;left: 0;top: 18px}.track .step.active .icon{background: #ee5435;color: #fff}.track .icon{display: inline-block;width: 40px;height: 40px;line-height: 40px;position: relative;border-radius: 100%;background: #ddd}.track .step.active .text{font-weight: 400;color: #000}.track .text{display: block;margin-top: 7px}.itemside{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;width: 100%}.itemside .aside{position: relative;-ms-flex-negative: 0;flex-shrink: 0}.img-sm{width: 80px;height: 80px;padding: 7px}ul.row, ul.row-sm{list-style: none;padding: 0}.itemside .info{padding-left: 15px;padding-right: 7px}.itemside .title{display: block;margin-bottom: 5px;color: #212529}p{margin-top: 0;margin-bottom: 1rem}.btn-warning{color: #ffffff;background-color: #ee5435;border-color: #ee5435;border-radius: 1px}.btn-warning:hover{color: #ffffff;background-color: #ff2b00;border-color: #ff2b00;border-radius: 1px}
    </style>

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="">Email: tigereco@gmail.com</a>
                    <a class="text-body mr-3" href=""> Phone: 0123456789</a>
                    {{-- <a class="text-body mr-3" href="">Help</a>
                    <a class="text-body mr-3" href="">FAQs</a> --}}
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    @auth
                        @php
                        $r = Auth::user()->role;    
                        @endphp
                        @if($r == "1")
                        <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown">My Account</button>
                        <div class="dropdown-menu dropdown-menu-right no-arrow">
                            <a href="{{ url('profile') }}" class="dropdown-item" type="button">Profile</a>
                            <a href="{{url('dashboard')}}" class="dropdown-item" type="button">Dashboard</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{url('logout')}}" class="dropdown-item" type="button" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                            </form>
                        </div>
                        @endif
                        @if($r == "2")
                        <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown">My Account</button>
                        <div class="dropdown-menu dropdown-menu-right no-arrow">
                            <a href="{{ url('profile') }}" class="dropdown-item" type="button">Profile</a>
                            <a href="{{url('dashboard')}}" class="dropdown-item" type="button">Dashboard</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{url('logout')}}" class="dropdown-item" type="button" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                            </form>
                        </div>
                        @endif
                        @if($r == "3")
                        <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown">My Account</button>
                        <div class="dropdown-menu dropdown-menu-right no-arrow">
                            <a href="{{url('customerdashboard')}}" class="dropdown-item" type="button">Dashboard</a>
                            <a href="{{ url('purchasehistory') }}" class="dropdown-item" type="button">Purchase History</a>
                            <a href="#" class="dropdown-item" type="button">Manage Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{url('logout')}}" class="dropdown-item" type="button" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                            </form>
                        </div>
                        @endif
                    @endauth
                    @guest
                        @if (session('clogged_in'))
                        <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown">My Account</button>
                        <div class="dropdown-menu dropdown-menu-right no-arrow">
                            <a href="{{url('customerdashboard')}}" class="dropdown-item" type="button">Dashboard</a>
                            <a href="{{ url('purchasehistory') }}" class="dropdown-item" type="button">Purchase History</a>
                            <a href="#" class="dropdown-item" type="button">Manage Profile</a>
                            <form method="POST" action="{{ route('customerlogout') }}">
                                @csrf
                                <a href="{{url('customerlogout')}}" class="dropdown-item" type="button" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                            </form>
                        </div>
                        @else
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown">My Account</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{ route('customerlogin') }}" class="dropdown-item" type="button">Login</a>
                                <a href="{{route('customerregister')}}" class="dropdown-item" type="button">Register</a>
                            </div>
                        </div> 
                        @endif

                    @endguest
                    
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="{{url('/')}}" class="text-decoration-none">
                    <span class="h2 text-uppercase text-primary bg-dark px-2">Tiger</span>
                    <span class="h2 text-uppercase text-dark bg-primary px-2 ml-n1">Ecommerce</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0"> 12369 <i class="fa fa-phone" aria-hidden="true"></i> </h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Shirts</a>
                        <a href="" class="nav-item nav-link">Jeans</a>
                        <a href="" class="nav-item nav-link">Swimwear</a>
                        <a href="" class="nav-item nav-link">Sleepwear</a>
                        <a href="" class="nav-item nav-link">Sportswear</a>
                        <a href="" class="nav-item nav-link">Jumpsuits</a>
                        <a href="" class="nav-item nav-link">Blazers</a>
                        <a href="" class="nav-item nav-link">Jackets</a>
                        <a href="" class="nav-item nav-link">Shoes</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h2 text-uppercase text-dark bg-light px-2">Tiger</span>
                        <span class="h2 text-uppercase text-light bg-primary px-2 ml-n1">Ecommerce</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{url('/')}}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                            <a href="{{url('shop')}}" class="nav-item nav-link {{ Request::is('shop') ? 'active' : '' }}">Shop</a>
                            <a href="{{url('contact')}}" class="nav-item nav-link  {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>24/4, Mirpur, Dhaka-1216</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>tigereco@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>01234567890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="{{url('/')}}"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                        <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">TigerGroup</a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" href="#">TigerGroup</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="{{url('assets/img/payments.png')}}" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{url('assets/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{url('assets/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('assets/js/main.js')}}"></script>

    @yield('script')
</body>

</html>