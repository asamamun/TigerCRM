@extends('layouts.ecommerce')

@section('pagetitle')
    Contact
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
                    <span class="breadcrumb-item active">Contact</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Contact Us</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    @include('partial.flash')
                    @include("partial.error")

                    <div id="success"></div>
                    {{Form::open(['route' => 'contact.store','class'=>'user','enctype'=>'multipart/form-data'])}}

                    <div class="control-group pb-3">
                        {!! Form::text('name', null, ['required', 'class'=>'form-control', 'id'=>'name', 'placeholder'=>'Your Name']) !!}
                    </div>
                    <div class="control-group pb-3">
                        {!! Form::email('email', null, ['required', 'class'=>'form-control', 'id'=>'email', 'placeholder'=>'Your Email']) !!}
                    </div>
                    <div class="control-group pb-3">
                        {!! Form::text('phone', null, ['required', 'class'=>'form-control', 'id'=>'phone', 'placeholder'=>'Your Phone']) !!}
                    </div>
                    <div class="control-group pb-3">
                        {!! Form::text('subject', null, ['required', 'class'=>'form-control', 'id'=>'subject', 'placeholder'=>'Subject']) !!}
                    </div>
                    <div class="control-group pb-3">
                        {!! Form::textarea('message', null, ['required', 'class'=>'form-control', 'id'=>'message', 'placeholder'=>'Message']) !!}
                    </div>
        
                    <div class="form-group">
                        {!! Form::submit('Send Message', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58403.623580669795!2d90.32726083971635!3d23.810544424350393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0c1c61277db%3A0xc7d18838730e2e59!2sMirpur%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1659468598805!5m2!1sen!2sbd" width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                <div class="bg-light p-30 mb-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>24/4, Mirpur, Dhaka-1216</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>zayedbd24@gmail.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+8801629999666</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->



@endsection