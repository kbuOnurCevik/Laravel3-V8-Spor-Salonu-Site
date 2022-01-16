@php
$setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<!-- Footer Section Begin -->
<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="fs-about">
                    <div class="fa-logo">
                        <a href="#"><img src="{{ asset('assets')}}/img/logo.png" alt=""></a>
                    </div>
                    <p>En güncel bilgiler için bizi sosyal medyadan takip etmeyi unutmayın.
                        Aşağıdaki sosyal medya logolarımıza tıklayarak doğrudan sayfalarımıza gidebilirsiniz.</p>
                    <div class="fa-social">
                        @if ($setting->facebook != null) <a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a> @endif
                            @if ($setting->twitter != null) <a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a> @endif
                            @if ($setting->instagram != null) <a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a> @endif

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-6">
                <div class="fs-widget">
                    <h4>Useful links</h4>
                    <ul>
                        <li><a href="{{route('aboutus')}}">About</a></li>
                        <li><a href="{{route('faq')}}">FAQ</a></li>
                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="fs-widget">
                    <h4>Tips & Guides</h4>
                    <div class="fw-recent">
                        <h6><a href="#">Physical fitness may help prevent depression, anxiety</a></h6>
                    </div>
                    <div class="fw-recent">
                        <h6><a href="#">Fitness: The best exercise to lose belly fat and tone up.</a></h6>
                    </div>
                    <div class="fw-recent">
                        <h6><a href="#">Building confidence. Building fitness.</a></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="copyright-text">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | {{$setting->company}}
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section End -->
<!-- Js Plugins -->
<script src="{{ asset('assets')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('assets')}}/js/masonry.pkgd.min.js"></script>
<script src="{{ asset('assets')}}/js/jquery.barfiller.js"></script>
<script src="{{ asset('assets')}}/js/jquery.slicknav.js"></script>
<script src="{{ asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{ asset('assets')}}/js/main.js"></script>

