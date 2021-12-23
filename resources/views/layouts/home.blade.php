<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Onur">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/style.css" type="text/css">

    @yield('css')
    @yield('headerjs')

</head>

<body>

@include('home._header')


@section('content')
@show

@include('home._getInTouch')

@include('home._footer')
@yield('footerjs')


</body>
</html>
