@extends('layouts.home')

@section('title','My Reviews')



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
                            <span>My Reviews</span>
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
                        <div class="chart-table">
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
                        <h2>My Reviews</h2>
                        <br>
                    </div>

                    @include('home.message')
                    <div class="chart-table">
                        <table>
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            @foreach($datalist as $rs)
                                <tbody>
                                <td>{{$rs->id}}</td>
                                <td><a href="{{route('product',['id'=>$rs->product_id,'slug'=>$rs->product->slug])}}"
                                       target="_blank">{{$rs->product->title}}</a></td>
                                <td>{{$rs->subject}}</td>
                                <td>{{$rs->review}}</td>
                                <td>{{$rs->status}}</td>
                                <td>{{$rs->created_at}}</td>
                                <td><a href="{{route('user_review_delete',['id'=>$rs->id])}}"
                                       onclick="return confirm('Delete ! Are you sure ?')"> <img src="{{ asset('assets')}}/img/click.png" alt="" height="40px"></a></td>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    </body>
@endsection
