@extends('layouts.home')

@section('title','About Us-' . $setting->title)

@section('description')
    {{$setting->description}}
@endsection
@section('keywords', $setting->keywords)

@section('content')
    <body>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>About Us</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0 m-auto">
                    <div class="blog-details-text">

                        {!!$setting->aboutus!!}

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-034-stationary-bike"></span>
                        <h4>Modern equipment</h4>
                        <p>With the right gym equipment and exercises, strength training just twice a week has been
                            shown to change the way your body looks and feels. Benefits include increased metabolism,
                            enhanced sport performance and the prevention of injury</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>Minimally processed foods are the best for sports and weight lifting nutrition. Lean protein,
                            complex carbs and fiber are your best friends, especially if you're trying to lose weight.
                            Your body needs lean protein such as turkey, nonfat Greek yogurt, fish and egg whites to
                            build muscle and stay full.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"></span>
                        <h4>Professional training plan</h4>
                        <p>A professional development plan documents the goals, required skill and competency
                            development, and objectives a staff member will need to accomplish in order to support
                            continuous improvement and career development.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"></span>
                        <h4>Unique to your needs</h4>
                        <p>What does it mean to be fit? Finding a discrete definition is somewhat difficult. According
                            to the dictionary, fitness means: “the quality or state of being fit." (1) (The definition
                            of “fit” is: “sound physically and mentally.") (2) If you find those words somewhat vague,
                            you’re not alone.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
@endsection
