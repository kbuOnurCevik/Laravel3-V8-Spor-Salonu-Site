@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{{ asset('assets')}}/img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-7">
                <nav class="nav-menu">
                    <ul>
                        <li class="active"><a href="{{route('home')}}">Home</a></li>

                        <li><a href="#">Categories</a>
                            <ul class="dropdown">

                                @foreach($parentCategories as $rs)
                                    <li><a href="{{route('productlist',['search'=>$rs->title])}}">{{$rs->title}}</a>
                                        <div class="sub-menu">
                                            <ul>
                                                @if(count($rs->children))
                                                    <li><a href="#">@include('home.categorytree',['children' => $rs->children])</a></li>

                                                @endif
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                        <li><a href="{{route('aboutus')}}">About Us</a></li>
                        <li><a href="{{route('faq')}}">FAQ</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>


                        @auth
                            <li>
                                @if (Auth::user()->profile_photo_path)
                                    <img src="{{Storage::url(Auth::user()->profile_photo_path)}}"  height="40" width="40"
                                         style="border-radius: 10px" alt="User Image">
                                @endif
                                <a href="#"><b>{{Auth::user()->name}}</b></a>

                                <ul class="dropdown" style="margin-top: 30px" >

                                    <li><a href="{{route('myprofile')}}">My Account</a></li>
                                    <li>
                                        <a href="{{route('logout')}}">Logout</a>
                                    </li>
                                </ul>
                        </li>
                        @endauth
                        @guest()
                            <li> <a href="/home">Login</a></li>
                            <li> <a href="/register">Register</a></li>
                        @endguest



                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="top-option">

                    <div class="to-search">
                        <form action="{{route('getproduct')}}" method="post">
                            @csrf
                            @livewire('search')
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

                        </form>
                        @section('footerjs')
                        @livewireScripts
                        @endsection
                        <div>
                            <a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas-open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header End -->


