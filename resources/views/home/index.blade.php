@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title')

{{$setting->title}}

@endsection

@section('description')
    {{$setting->description}}
@endsection
@section('keywords', $setting->keywords)

@section('content')
    <body>
    @include('home._slider')
    @include('home._menu')


    <!-- Pricing Section Begin -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Indirimli Paketlerimizi Kaçırma !</span>
                        <h2>%10 Indirimli Paketlerimiz</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                @foreach($picked as $rs)
                    <div class="col-lg-4 col-md-8">
                        <div class="ps-item">
                            <h3>{{$rs->title}}</h3>
                            <div class="pi-price">
                                <h3>%10 DISCOUNT</h3>
                                <h2>{{$rs->price * 0.9}}₺</h2>
                                <h2>{{$rs->month}} Ay</h2>
                            </div>
                            <ul>
                                <li><img src="{{Storage::url($rs->image)}}" alt=""></li>
                                <li>Free riding</li>
                                <li>Unlimited equipments</li>
                                <li>Personal trainer</li>
                                <li>Weight losing classes</li>
                                <li>Month to mouth</li>
                                <li>No time restriction</li>
                            </ul>
                            <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="primary-btn pricing-btn">Detaylara Git</a>
                            <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Pricing Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>PUSH YOUR LIMITS FORWARD</span>
                        <h2>Son Gelen Paketler</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                @foreach($last as $rs)
                    <div class="col-lg-4 col-md-8">
                        <div class="ps-item">
                            <h3>{{$rs->title}}</h3>
                            <div class="pi-price">
                                <h2>{{$rs->price}}₺</h2>
                                <h2>{{$rs->month}} Ay</h2>
                            </div>
                            <ul>
                                <li><img src="{{Storage::url($rs->image)}}" alt=""></li>
                                <li>Free riding</li>
                                <li>Unlimited equipments</li>
                                <li>Personal trainer</li>
                                <li>Weight losing classes</li>
                                <li>Month to mouth</li>
                                <li>No time restriction</li>
                            </ul>
                            <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="primary-btn pricing-btn">Detaylara Git</a>
                            <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Pricing Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>No Pain No Gain</span>
                        <h2>Onerilen Paketler</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                @foreach($daily as $rs)
                    <div class="col-lg-4 col-md-8">
                        <div class="ps-item">
                            <h3>{{$rs->title}}</h3>
                            <div class="pi-price">
                                <h2>{{$rs->price}}₺</h2>
                                <h2>{{$rs->month}} Ay</h2>
                            </div>
                            <ul>
                                <li><img src="{{Storage::url($rs->image)}}" alt=""></li>
                                <li>Free riding</li>
                                <li>Unlimited equipments</li>
                                <li>Personal trainer</li>
                                <li>Weight losing classes</li>
                                <li>Month to mouth</li>
                                <li>No time restriction</li>
                            </ul>
                            <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="primary-btn pricing-btn">Detaylara Git</a>
                            <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Pricing Section End -->

    @guest
        <!-- Banner Section Begin -->
        <section class="banner-section set-bg" data-setbg="{{ asset('assets')}}/img/banner-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="bs-text">
                            <h2>registration now to get more deals</h2>
                            <div class="bt-tips">Where health, beauty and fitness meet.</div>
                            <a href="/register" class="primary-btn  btn-normal">Register</a>
                            <div class="bt-tips"><br>If you have an account already, just login.</div>
                            <a href="/login" class="primary-btn  btn-normal">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End -->
    @endguest

    <!-- Gallery Section Begin -->
    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            @foreach($gallery as $rs)
            <div class="gs-item  set-bg" data-setbg="{{Storage::url($rs->image)}}">
                <a href="{{Storage::url($rs->image)}}" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            @endforeach

        </div>
    </div>
    <!-- Gallery Section End -->



    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What we do?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($daily as $rs)
                <div class="col-lg-3 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="{{Storage::url($rs->image)}}" style="height: 230px" alt="">
                    </div>
                </div>
                @endforeach

                <div class="col-lg-3 col-md-6 p-0">
                    <div class="ss-text">
                        <h4>Fitness</h4>
                        <p>Speed<br>Flexibility<br>Strength</p>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 p-0">
                    <div class="ss-text">
                        <h4>Combat Sports</h4>
                        <p>Boxing<br>Karate<br>Taekwondo</p>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 p-0">
                    <div class="ss-text second-row">
                        <h4>Workout</h4>
                        <p>Body Building<br>Weight Loose<br>Cardio</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 p-0">
                    <div class="ss-text second-row">
                        <h4>Mind and Body</h4>
                        <p>Pilates<br>Yoga<br>Exercises</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->




    <!-- İnfo Section Start -->
    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0 m-auto">
                    <div class="blog-details-text">
                        <div class="section-title">
                            <span>Information</span>
                            <h2>Trainers Services Schedule</h2>
                        </div>

                        {!!$setting->infopage!!}

                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- İnfo Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    </body>
@endsection


