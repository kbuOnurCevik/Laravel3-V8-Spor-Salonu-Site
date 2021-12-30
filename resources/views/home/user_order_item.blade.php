@extends('layouts.home')

@section('title','My Packets')


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
                        <span>User Profile</span>
                        <h2>My Packet Details</h2>
                    </div>

                    <div class="chart-table">
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
                                <th>Status</th>

                            </tr>
                            </thead>
                            @foreach($datalist as $rs)
                                <tbody>
                                <td>{{$rs->product->title}}</td>
                                <td>{{$rs->order->name}}</td>
                                <td>{{$rs->order->phone}}</td>
                                <td>{{$rs->startdate}}</td>
                                <td>{{$rs->finishdate}}</td>
                                <td>{{$rs->months}}</td>
                                <td>{{$rs->price}}₺</td>
                                <td>{{$rs->status}}</td>
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
