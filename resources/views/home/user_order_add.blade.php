@extends('layouts.home')

@section('title','Order Products')


@include('home._menu')


@section('content')
    <body>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Packet Payment</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <span>Payment</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- BMI Calculator Section Begin -->
    <section class="bmi-calculator-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title chart-title">
                        <span>{{$dataproduct->title}}</span>
                        <h2>Packet Details</h2>
                    </div>
                    <div class="chart-table">
                        <table>
                            <thead>
                            <tr>
                                <th>Paket ÖZELLİKLERİ</th>
                                <th>Değerler</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Paket Süresi</td>
                                <td>{{$month}} Ay</td>
                            </tr>
                            <tr>
                                <td>Paket Fiyatı</td>
                                <td>{{$price}} ₺</td>
                            </tr>
                            <tr>
                                <td>Paket Süresi Başlangıç</td>
                                <td>{{$startday}}</td>
                            </tr>
                            <tr>
                                <td>Paket Süresi Bitiş</td>
                                <td>{{$finishday}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="section-title chart-calculate-title">
                        <span>Payment</span>
                        <h2>Payment Details</h2>
                    </div>
                    <div class="chart-calculate-form">
                        <p>Paketi kimin adına alıyorsanız alttaki bilgileri buna göre doldurmalı ve ödemeyi kart
                            bilgilerinizi girerek tamamlamalısınız.
                            Paket başlangıç
                            tarihinde spor salonumuza gelerek üyelik kartınızı, kimliğinizi girilen üyelik bilgilerine
                            göre
                            onayladıktan sonra teslim alabilir ve girişlerde
                            bu kartı kullanabilirsiniz.</p>
                        <div class="leave-comment">
                            <form action="{{route('user_order_store',['id'=>$dataproduct->id])}}" method="post">
                                @csrf

                                <div class="section-title chart-calculate-title">
                                    <span>Üyelik Detayları</span>
                                </div>

                                <input type="text" name="name" value="{{Auth::user()->name}}" placeholder="Name & Surname">
                                <input type="text" name="email" value="{{Auth::user()->email}}" placeholder="Email">
                                <input type="text" name="phone" value="{{Auth::user()->phone}}" placeholder="Phone Number">
                                <input type="hidden" name="finishday" value="{{$finishday}}">
                                <input type="hidden" name="startday" value="{{$startday}}">
                                <input type="hidden" name="month" value="{{$month}}">
                                <input type="hidden" name="total" value="{{$price}}">
                                <div class="section-title chart-calculate-title">
                                    <span>Card Details</span>
                                </div>

                                <input type="text" name="cardname" placeholder="Card Name & Surname">
                                <input type="number" name="cardnumber" placeholder="Card Number">
                                <input type="text" name="dates" placeholder="Valid Dates mm/yy">
                                <input type="text" name="key" placeholder="Secret Number">
                                <button type="submit">Complete Payment</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BMI Calculator Section End -->

    </body>
@endsection
