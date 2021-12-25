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
                                <h2>%10 DISCOUNT</h2>
                                <h2>{{$rs->price * 0.9}}₺</h2>
                                <span><a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="primary-btn pricing-btn">Detaylara Git</a></span>
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
                            <a href="{{route('addtocart',['id'=>$rs->id])}}" class="primary-btn pricing-btn">Paketi Satın Al</a>
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
                                <span><a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="primary-btn pricing-btn">Detaylara Git</a></span>
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
                            <a href="{{route('addtocart',['id'=>$rs->id])}}" class="primary-btn pricing-btn">Paketi Satın Al</a>
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
                                <span><a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="primary-btn pricing-btn">Detaylara Git</a></span>
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
                            <a href="{{route('addtocart',['id'=>$rs->id])}}" class="primary-btn pricing-btn">Paketi Satın Al</a>
                            <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Pricing Section End -->

    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-034-stationary-bike"></span>
                        <h4>Modern equipment</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"></span>
                        <h4>Proffesponal training plan</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"></span>
                        <h4>Unique to your needs</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Classes Section Begin -->
    <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Classes</span>
                        <h2>WHAT WE CAN OFFER</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="{{ asset('assets')}}/img/classes/class-1.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>STRENGTH</span>
                            <h5>Weightlifting</h5>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="{{ asset('assets')}}/img/classes/class-2.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Cardio</span>
                            <h5>Indoor cycling</h5>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="{{ asset('assets')}}/img/classes/class-3.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>STRENGTH</span>
                            <h5>Kettlebell power</h5>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="{{ asset('assets')}}/img/classes/class-4.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Cardio</span>
                            <h4>Indoor cycling</h4>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="{{ asset('assets')}}/img/classes/class-5.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Training</span>
                            <h4>Boxing</h4>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="{{ asset('assets')}}/img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>registration now to get more deals</h2>
                        <div class="bt-tips">Where health, beauty and fitness meet.</div>
                        <a href="#" class="primary-btn  btn-normal">Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->



    <!-- Gallery Section Begin -->
    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gs-item grid-wide set-bg" data-setbg="{{ asset('assets')}}/img/gallery/gallery-1.jpg">
                <a href="{{ asset('assets')}}/img/gallery/gallery-1.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="{{ asset('assets')}}/img/gallery/gallery-2.jpg">
                <a href="{{ asset('assets')}}/img/gallery/gallery-2.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="{{ asset('assets')}}/img/gallery/gallery-3.jpg">
                <a href="{{ asset('assets')}}/img/gallery/gallery-3.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="{{ asset('assets')}}/img/gallery/gallery-4.jpg">
                <a href="{{ asset('assets')}}/img/gallery/gallery-4.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="{{ asset('assets')}}/img/gallery/gallery-5.jpg">
                <a href="{{ asset('assets')}}/img/gallery/gallery-5.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item grid-wide set-bg" data-setbg="{{ asset('assets')}}/img/gallery/gallery-6.jpg">
                <a href="{{ asset('assets')}}/img/gallery/gallery-6.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

    <!-- Team Section Begin -->
    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>Our Team</span>
                            <h2>TRAIN WITH EXPERTS</h2>
                        </div>
                        <a href="#" class="primary-btn btn-normal appoinment-btn">appointment</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ts-slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="{{ asset('assets')}}/img/team/team-1.jpg">
                            <div class="ts_text">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="{{ asset('assets')}}/img/team/team-2.jpg">
                            <div class="ts_text">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="{{ asset('assets')}}/img/team/team-3.jpg">
                            <div class="ts_text">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="{{ asset('assets')}}/img/team/team-4.jpg">
                            <div class="ts_text">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="{{ asset('assets')}}/img/team/team-5.jpg">
                            <div class="ts_text">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="{{ asset('assets')}}/img/team/team-6.jpg">
                            <div class="ts_text">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->





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


