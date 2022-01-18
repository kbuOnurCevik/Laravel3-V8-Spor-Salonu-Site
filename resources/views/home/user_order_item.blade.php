@extends('layouts.home')

@section('title','My Packets')

@include('home._menu')


@section('content')
    <body>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>User Profile</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <span>My Packets</span>
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

                <div class="col-lg-12">

                    <div class="section-title chart-title">
                        <span>User Panel</span>
                        <div class="chart-table table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th><a href="{{route('myprofile')}}">My Profile</a></th>
                                    <th><a href="{{route('user_orders')}}">My Packet Orders </a></th>
                                    <th><a href="{{route('myreviews')}}">My Reviews </a></th>
                                    <th><a href="{{route('logout')}}">Logout </a></th>
                                    <th>
                                        @php
                                            $userRoles = Auth::user()->roles->pluck('name');
                                        @endphp

                                        @if($userRoles->contains('admin'))
                                            <a href="{{route('admin_home')}}" target="_blank">Admin Panel</a>
                                        @endif
                                    </th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <br>
                        <h2>My Packet Details</h2>

                    </div>

                    <div class="chart-table table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th>Packet Name</th>
                                <th>Member Name</th>
                                <th>Member Phone</th>
                                <th>Start Date</th>
                                <th>Finish Date</th>
                                <th>Months</th>
                                <th>Price</th>


                            </tr>
                            </thead>
                            @foreach($datalist as $rs)
                                <tbody>
                                <td><a href="{{route('product',['id'=>$rs->product_id,'slug'=>$rs->product->slug])}}"
                                       target="_blank">{{$rs->product->title}}</td>
                                <td>{{$rs->order->name}}</td>
                                <td>{{$rs->order->phone}}</td>
                                <td>{{$rs->startdate}}</td>
                                <td>{{$rs->finishdate}}</td>
                                <td>{{$rs->months}}</td>
                                <td>{{$rs->price}}₺</td>

                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
@endsection
