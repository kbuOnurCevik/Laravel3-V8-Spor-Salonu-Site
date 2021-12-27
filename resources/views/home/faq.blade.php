@extends('layouts.home')

@section('title','Frequently asked question')

@section('footerjs')

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#accordion").accordion();
        });
    </script

@endsection

@section('content')
    <body>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Frequently asked question</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <span>Frequently Asked Question</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-left">
                        <div id="accordion">

                            @foreach($datalist as $rs)
                                <h4>{{$rs->question}}</h4>
                                <div style="background: #0a0a0a">
                                    <p>{!! $rs->answer !!}</p>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
@endsection
