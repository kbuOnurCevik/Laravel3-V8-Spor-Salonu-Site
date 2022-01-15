@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<!-- Offcanvas Menu Section Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="fa fa-close"></i>
    </div>

    <div class="logo">
        <a href="/home">
            <img src="{{ asset('assets')}}/img/logo2.png" alt="">
        </a>
    </div>
   <br>



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
    <div id="mobile-menu-wrap"></div>



    <nav class="canvas-menu mobile-menu">

        <ul>



            @auth
                <li>
                    @if (Auth::user()->profile_photo_path)
                        <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" height="40" width="40"
                             style="border-radius: 10px" alt="User Image">
                    @endif
                    <a href="#"><b>{{Auth::user()->name}}</b></a>

                    <ul class="dropdown">

                        <li><a href="{{route('myprofile')}}">My Account</a></li>
                        <li>
                            <a href="{{route('logout')}}">Logout</a>
                        </li>
                    </ul>
                </li>
            @endauth
            @guest()
                <li><a href="/home">Login</a></li>
                <li><a href="/register">Register</a></li>
            @endguest




            <li><a href="#">Categories</a>

                <ul class="dropdown">

                        @foreach($parentCategories as $rs)
                        <div class="dropdown">
                            <li><a href="#">{{$rs->title}}</a>

                                    <ul>
                                        @if(count($rs->children))
                                            <li>
                                                <a href="#">@include('home.categorytree',['children' => $rs->children])</a>
                                            </li>

                                        @endif
                                    </ul>

                            </li>
                        </div>
                        @endforeach
                    </ul>
            </li>

            <li><a href="{{route('schedule')}}">Information</a></li>
            <li><a href="{{route('aboutus')}}">About Us</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            <li><a href="{{route('faq')}}">FAQ</a></li>

        </ul>
    </nav>







</div>
<!-- Offcanvas Menu Section End -->
