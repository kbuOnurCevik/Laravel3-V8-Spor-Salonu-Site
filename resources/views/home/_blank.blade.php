@extends('layouts.home')

@section('title')

    {{$setting->title}}

@endsection

@section('description')
    {{$setting->description}}
@endsection
@section('keywords', $setting->keywords)

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Blank</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <span>Blank</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class="team-section team-page spad">
        <div class="container">
            <div class="row">
                    İçerik Alanı

            </div>
        </div>
    </section>
@endsection
