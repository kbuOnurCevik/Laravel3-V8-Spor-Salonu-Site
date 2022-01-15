@extends('layouts.home')

@section('title','Contact' . $setting->title)

@section('description')
    {{$setting->description}}
@endsection
@section('keywords', $setting->keywords)

@include('home._menu')

@section('content')
    <body>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Contact Us</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="blog-details-text">

                            {!!$setting->contact!!}

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title contact-title">
                        <span>Contact Us</span>
                        <h2>GET IN TOUCH</h2>
                    </div>
                    <div class="leave-comment">
                        @include('home.message')
                        <form action="{{route('sendmessage')}}" method="post">
                            @csrf
                            <input type="text" name="name" placeholder="Name & Surname">
                            <input type="text" name="phone" placeholder="Phone Number">
                            <input type="email" name="email" placeholder="Email">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea class="text" name="message" placeholder="Your Message"></textarea>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </section>
    </body>
@endsection
