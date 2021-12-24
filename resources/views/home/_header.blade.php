@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp
<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="/home">
                        <img src="{{ asset('assets')}}/img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="nav-menu">
                    <ul>
                        <li class="active"><a href="/home">Home</a></li>

                        <li><a href="#">Categories</a>
                            <ul class="dropdown">

                                @foreach($parentCategories as $rs)
                                    <li><a href="#">{{$rs->title}}</a>
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
                        <li><a href="{{route('aboutus')}}">About Us</a></li>
                        <li><a href="{{route('fag')}}">FAQ</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>


                        @auth<li>
                                <a href="#"><b>{{Auth::user()->name}}</b></a>
                                <ul class="dropdown">
                                    <li><a href="{{route('myprofile')}}">My Account</a></li>
                                    <li><a href="#">Settings</a></li>
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
                    <div class="to-search search-switch">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="to-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
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


