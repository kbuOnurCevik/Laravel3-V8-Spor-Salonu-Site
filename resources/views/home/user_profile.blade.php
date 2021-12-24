@extends('layouts.home')

@section('title','User Profile')

@section('content')
    <body>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>My Account</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <span>Profile</span>
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
                @include('home.usermenu')
                <div class="col-lg-8 col-md-8">
                    @include('profile.show')
                </div>
            </div>
        </div>
    </section>
    </body>
@endsection
