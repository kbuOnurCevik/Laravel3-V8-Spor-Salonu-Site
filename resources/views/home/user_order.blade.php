@extends('layouts.home')

@section('title','My Orders')


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
                            <span>My Orders</span>
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
                        <span>User Profile</span>
                        <h2>My Packet Orders</h2>
                    </div>
                    @include('home.message')
                    <div class="chart-table">
                        <table>
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Total</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Packet Details</th>
                            </tr>
                            </thead>
                            @foreach($datalist as $rs)
                                <tbody>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->phone}}</td>
                                <td>{{$rs->email}}</td>
                                <td>{{$rs->total}}₺</td>
                                <td>{{$rs->created_at}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('user_order_show',['id'=>$rs->id])}}">Click</a></td>
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
