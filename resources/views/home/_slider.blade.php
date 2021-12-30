<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hs-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="{{ asset('assets')}}/img/hero/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hi-text">
                            <span>Shape your body</span>
                            <h1>Be <strong>strong</strong> traning hard</h1>
                        </div>
                    </div>

                    <div class="col-lg-6 ">
                        <div class="ts_slider owl-carousel">
                            @foreach($slider as $rs)
                                <div class="ts_item">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <div class="ti_pic">
                                                <img src="{{Storage::url($rs->image)}}" alt="">
                                            </div>
                                            <div class="ti_text">
                                                <h5>{{$rs->title}}</h5>
                                                <p>Fiyat:{{$rs->price}}TL</p>
                                                <a class="primary-btn"
                                                   href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">Detaylara git</a>
                                                <div class="tt-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
