@extends('layouts.home')
@section('title')
    {{$data->title}}
@endsection
@section('description')
    {{$data->description}}
@endsection
@section('keywords', $data->keywords)

@include('home._menu')

@section('content')
    <body>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Product Detail</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <span>Product ></span>
                            <span>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}} > </span>
                            <span>{{$data->title}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About US Section Begin -->
    <section class="aboutus-section">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 p-0">
                    <div class="about-text te">
                        <div class="section-title">
                            <span>Packet Details</span>
                            <h2>{{$data->title}}</h2>
                        </div>
                        <div class="at-desc">

                            <div class="section-title">
                                <span>Fiyat : {{$data->price}}₺</span><br><br>
                                <span>Paket Süresi: {{$data->month}} Ay</span><br><br>
                                <span>Description</span><br>
                                <p>{{$data->description}}</p>
                                <span>Services</span><br>
                                <span>{!! $data->detail !!}</span><br><br>
                                <form action="{{route('user_order_add',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <p>Üyelik Başlangıç Tarihinizi Belirleyiniz.Tarih girmezseniz başlangıç tarihi bugün olacaktır.</p>
                                    <input type="date" name="startday" value=<?("Y-m-d")?>>
                                    <input type="hidden" name="price" value="{{$data->price}}">
                                    <input type="hidden" name="month" value="{{$data->month}}">
                                    <button type="submit" class="btn btn-primary">Buy Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 p-0">
                    <div class="gallery-section">
                        <div class="gallery">

                            <div class="grid-sizer"></div>
                            <div class="gs-item grid-wide set-bg" data-setbg="{{Storage::url($data->image)}}">
                                <a href="{{Storage::url($data->image)}}" class="thumb-icon image-popup"><i
                                        class="fa fa-picture-o"></i></a>
                            </div>

                            @foreach($datalist as $rs)
                                <div class="gs-item grid-wide set-bg"
                                     data-setbg="{{Storage::url($rs->image)}}">
                                    <a href="{{Storage::url($rs->image)}}"
                                       class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- About US Section End -->


    <!-- BMI Calculator Section Begin -->
    <section class="bmi-calculator-section spad">
        <div class="container">
            <div class="row">


                <div class="col-lg-12" style="margin-top: -100px">

                    <!-- Testimonial Section Begin -->
                    <section class="testimonial-section spad">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title">
                                        <h2>Reviews</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="ts_slider owl-carousel">

                                @foreach($reviews as $rs)
                                    <div class="ts_item">
                                        <div class="row">
                                            <div class="col-lg-12 text-center">
                                                <div class="ti_pic">
                                                    <img src="{{Storage::url($rs->product->image)}}" alt="">
                                                </div>
                                                <div class="ti_text">
                                                    <h5>{{$rs->subject}}</h5>
                                                    <p>{{$rs->review}}</p>
                                                    <p>{{$rs->user->name}}<br>{{$rs->created_at}}</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </section>
                    <!-- Testimonial Section End -->

                </div>


                <div class="col-lg-12">


                    <div class="section-title chart-calculate-title">
                        <h2>Share Your Reviews</h2>
                    </div>
                    <div class="chart-calculate-form">
                        <p>Görüşlerinizi bizle paylaşabilirsiniz. Bu sayede diğer kullanıcılara yardım edebilirsiniz.
                            Aşağıdaki konu ve inceleme kısmını doldurup yorum yapınız.</p>

                        @livewire('review',['id'=>$data->id])

                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- BMI Calculator Section End -->


    </body>
@endsection
