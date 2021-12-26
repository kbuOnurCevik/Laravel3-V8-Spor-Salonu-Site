@extends('layouts.home')
@section('title')
    {{$data->title}}
@endsection
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
                        <h2>Product Detail</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <span>Product ></span>
                            <span>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}} > </span>
                            <span>{{$data->title}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About US Section Begin -->
    <section class="aboutus-section">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 p-0" >
                    <div class="gallery-section">
                        <div class="gallery">

                            <div class="grid-sizer"></div>
                            <div class="gs-item grid-wide set-bg" data-setbg="{{Storage::url($data->image)}}">
                                <a href="{{Storage::url($data->image)}}" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
                            </div>

                            @foreach($datalist as $rs)
                                <div class="gs-item grid-wide set-bg"
                                     data-setbg="{{Storage::url($rs->image)}}">
                                    <a href="{{Storage::url($rs->image)}}"
                                       class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>


                <div class="col-lg-6 p-0">
                    <div class="about-text te">
                        <div class="section-title">
                            <span>Detaylar</span>
                            <h2>{{$data->title}}</h2>
                        </div>
                        <div class="at-desc">

                            <div class="section-title">
                                <span>Fiyat : {{$data->price}}₺</span><br><br><br>
                                <span>Paket Süresi: {{$data->month}} Ay</span><br><br><br>
                                <span>{{$data->description}}</span><br><br><br>
                                <span>{!! $data->detail !!}</span><br><br><br>
                                <a class="primary-btn"
                                   href="{{route('product',['id'=>$data->id,'slug'=>$data->slug])}}">Shop
                                    Now</a>

                            </div>
                        </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About US Section End -->


    </body>
@endsection
