@extends('layouts.home')

@section('title','Gallery')

@include('home._menu')

@section('content')
    <body>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Gallery</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <span>Gallery</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <!-- Gallery Section Begin -->
    <div class="gallery-section gallery-page">
        <div class="gallery">
            <div class="grid-sizer"></div>
            @foreach($datalist as $rs)
            <div class="gs-item set-bg" data-setbg="{{Storage::url($rs->image)}}">
                <a href="{{Storage::url($rs->image)}}" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            @endforeach

        </div>
    </div>
    <!-- Gallery Section End -->


    </body>
@endsection
