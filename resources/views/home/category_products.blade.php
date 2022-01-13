@extends('layouts.home')

@section('title',$data->title ." Product List")

@section('description')
    {{$data->description}}
@endsection
@section('keywords', $data->keywords)

@section('content')
    <body>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Category Products</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <span>Product List></span>
                            <span>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}} </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <!-- Pricing Section Begin -->
    <section class="pricing-section service-pricing spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Paketler</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">


                @foreach($datalist as $rs)

                    <div class="col-lg-4 col-md-8">
                        <div class="ps-item">
                            <h3>{{$rs->title}}</h3>
                            <div class="pi-price">
                                <h2>{{$rs->price}}₺</h2>
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
                        </div>
                    </div>

                @endforeach


            </div>
        </div>
    </section>
    <!-- Pricing Section End -->
    </body>
@endsection
