@extends('layouts.home')

@section('title','Information')


@include('home._menu')

@section('content')
    <body>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Information</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <span>Information</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What we do?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 order-lg-1 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="{{asset('assets')}}/img/services/services-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-2 col-md-6 p-0">
                    <div class="ss-text">
                        <h4>Fitness</h4>
                        <p>Speed<br>Flexibility<br>Strength</p>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-3 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="{{asset('assets')}}/img/services/services-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-4 col-md-6 p-0">
                    <div class="ss-text">
                        <h4>Combat Sports</h4>
                        <p>Boxing<br>Karate<br>Taekwondo</p>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-8 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="{{asset('assets')}}/img/services/services-4.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-7 col-md-6 p-0">
                    <div class="ss-text second-row">
                        <h4>Workout</h4>
                        <p>Body Building<br>Weight Loose<br>Cardio</p>

                    </div>
                </div>
                <div class="col-lg-3 order-lg-6 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="{{asset('assets')}}/img/services/services-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-5 col-md-6 p-0">
                    <div class="ss-text second-row">
                        <h4>Mind and Body</h4>
                        <p>Pilates<br>Yoga<br>Exercises</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->


    <!-- Class Timetable Section Begin -->
    <section class="class-timetable-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <span>Schedule</span>
                        <h2>Find Your Time</h2>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="class-timetable">
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="class-time">Workout 6.00am - 8.00am</td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="workout">
                                    <h5>WEIGHT LOOSE</h5>
                                    <span>RLefew D. Loee</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="fitness">
                                    <h5>Cardio</h5>
                                    <span>RLefew D. Loee</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="workout">
                                    <h5>Body building</h5>
                                    <span>Keaf Shen</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="fitness">
                                    <h5>Body building</h5>
                                    <span>Kimberly Stone</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="motivation">
                                    <h5>Cardio</h5>
                                    <span>Rachel Adam</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="motivation">
                                    <h5>weight loose</h5>
                                    <span>Rachel Adam</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="workout">
                                    <h5>Cardio</h5>
                                    <span>Robert Cage</span>
                                </td>
                            </tr>


                            <tr>
                                <td class="class-time">Fitness 10.00am - 12.00am</td>
                                <td class="hover-bg ts-meta" data-tsmeta="workout">
                                    <h5>Strength</h5>
                                    <span>Robert Cage</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="fitness">
                                    <h5>Speed </h5>
                                    <span>Kimberly Stone</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="workout">
                                    <h5>Flexibility </h5>
                                    <span>RLefew D. Loee</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="motivation">
                                    <h5>Strength</h5>
                                    <span>RLefew D. Loee</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="workout">
                                    <h5>Speed</h5>
                                    <span>Robert Cage</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="motivation">
                                    <h5>Strength</h5>
                                    <span>Donald Grey</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="workout">
                                    <h5>Flexibility</h5>
                                    <span>Robert Cage</span>
                                </td>
                            </tr>


                            <tr>
                                <td class="class-time">Mind And Body 5.00pm - 7.00pm</td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="fitness">
                                    <h5>Pilates</h5>
                                    <span>Rachel Adam</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="motivation">
                                    <h5>Yoga </h5>
                                    <span>Donald Grey</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="workout">
                                    <h5>Exercise</h5>
                                    <span>Robert Cage</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="motivation">
                                    <h5>Yoga </h5>
                                    <span>Donald Grey</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="workout">
                                    <h5>Yoga</h5>
                                    <span>Keaf Shen</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="motivation">
                                    <h5>Pilates</h5>
                                    <span>RLefew D. Loee</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="fitness">
                                    <h5>Exercise</h5>
                                    <span>Kimberly Stone</span>
                                </td>
                            </tr>


                            <tr>
                                <td class="class-time">Combat Sports 7.00pm - 9.00pm</td>
                                <td class="hover-bg ts-meta" data-tsmeta="motivation">
                                    <h5>Boxing</h5>
                                    <span>RLefew D. Loee</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="workout">
                                    <h5>taekwondo</h5>
                                    <span>Keaf Shen</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="fitness">
                                    <h5>Karate </h5>
                                    <span>Rachel Adam</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="workout">
                                    <h5>taekwondo</h5>
                                    <span>Keaf Shen</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="motivation">
                                    <h5>Karate</h5>
                                    <span>Donald Grey</span>
                                </td>
                                <td class="dark-bg hover-bg ts-meta" data-tsmeta="fitness">
                                    <h5>taekwondo</h5>
                                    <span>Rachel Adam</span>
                                </td>
                                <td class="hover-bg ts-meta" data-tsmeta="workout">
                                    <h5>Boxing </h5>
                                    <span>RLefew D. Loee</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Class Timetable Section End -->


    <!-- Team Section Begin -->
    <section class="team-section team-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>Our Team</span>
                            <h2>TRAIN WITH EXPERTS</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg" data-setbg="{{asset('assets')}}/img/team/team-1.jpg">
                        <div class="ts_text">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                            <div class="tt_social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg" data-setbg="{{asset('assets')}}/img/team/team-2.jpg">
                        <div class="ts_text">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                            <div class="tt_social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg" data-setbg="{{ asset('assets')}}/img/team/team-3.jpg">
                        <div class="ts_text">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                            <div class="tt_social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg" data-setbg="{{ asset('assets')}}/img/team/team-4.jpg">
                        <div class="ts_text">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                            <div class="tt_social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg" data-setbg="{{ asset('assets')}}/img/team/team-5.jpg">
                        <div class="ts_text">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                            <div class="tt_social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg" data-setbg="{{ asset('assets')}}/img/team/team-6.jpg">
                        <div class="ts_text">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                            <div class="tt_social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->


    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0 m-auto">
                    <div class="blog-details-text">
                        <div class="section-title">
                            <span>Information</span>
                            <h2>Trainers and Services</h2>
                        </div>

                        <div class="class-details-text">

                            <div class="cd-text">
                                <div class="cd-single-item">
                                    <h3>Fitness</h3>
                                    <p>"Fitness" is a broad term that means something different to each person, but it
                                        refers to your own optimal health and overall well-being. Being fit not only
                                        means physical health, but emotional and mental health, too. It defines every
                                        aspect of your health. Smart eating and active living are fundamental to
                                        fitness.</p>
                                </div>
                                <div class="cd-single-item">
                                    <h3>Mind and Body</h3>
                                    <p>The mind–body problem is a debate concerning the relationship between thought and
                                        consciousness in the human mind, and the brain as part of the physical body.[1]
                                        It is distinct from the question of how mind and body function chemically and
                                        physiologically, as that question presupposes an interactionist account of
                                        mind–body relations.[2] This question arises when mind and body are considered
                                        as distinct, based on the premise that the mind and the body are fundamentally
                                        different in nature</p>
                                </div>
                            </div>

                            <div class="cd-text">
                                <div class="cd-single-item">
                                    <h3>Combat Sports</h3>
                                    <p>A combat sport, or fighting sport, is a competitive contact sport that usually
                                        involves one-on-one combat. In many combat sports, a contestant wins by scoring
                                        more points than the opponent, disabling the opponent (knockout, KO), or
                                        attacking the opponent in a specific or designated technique. Combat sports
                                        share a long pedigree with the martial arts</p>
                                </div>
                                <div class="cd-single-item">
                                    <h3>Workout</h3>
                                    <p>It is performed for various reasons, to aid growth and improve strength, prevent
                                        aging, develop muscles and the cardiovascular system, hone athletic skills,
                                        weight loss or maintenance, improve health,[2] or simply for enjoyment. Many
                                        individuals choose to exercise outdoors where they can congregate in groups,
                                        socialize, and improve well-being as well as mental health.</p>
                                </div>
                            </div>


                            <div class="cd-trainer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="cd-trainer-pic">
                                            <img src="{{asset('assets')}}/img/team/team-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cd-trainer-text">
                                            <div class="trainer-title">
                                                <h4>Angelina Jolie</h4>
                                                <span>Gym Trainer</span>
                                            </div>
                                            <div class="trainer-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                            </div>

                                            <ul class="trainer-info">
                                                <li><span>Age</span>46</li>
                                                <li><span>Weight</span>50kg</li>
                                                <li><span>Height</span> 1,69 m</li>
                                                <li><span>Summary</span>Angelina Jolie, Amerikalı oyuncu, film
                                                    yapımcısı ve hayırsever. Üç Altın Küre, iki Sinema Oyuncuları
                                                    Derneği Ödülü ve bir de Oscar sahibidir. Hayırsever çalışmalarıyla
                                                    da tanınan Jolie, pek çok kez dünyanın en çekici insanları
                                                    listelerinde yer aldı
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="cd-trainer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="cd-trainer-pic">
                                            <img src="{{asset('assets')}}/img/team/team-2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cd-trainer-text">
                                            <div class="trainer-title">
                                                <h4>LeBron James</h4>
                                                <span>Gym Trainer</span>
                                            </div>
                                            <div class="trainer-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                            </div>

                                            <ul class="trainer-info">
                                                <li><span>Age</span>37</li>
                                                <li><span>Weight</span>113 kg</li>
                                                <li><span>Height</span> 2,06 m</li>
                                                <li><span>Summary</span>LeBron Raymone James, NBA takımlarından Los
                                                    Angeles Lakers'ta forma giyen Amerikalı profesyonel basketbolcu. NBA
                                                    tarihinin en önemli basketbolcularından biri olarak kabul edilir.
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="cd-trainer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="cd-trainer-pic">
                                            <img src="{{asset('assets')}}/img/team/team-3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cd-trainer-text">
                                            <div class="trainer-title">
                                                <h4>Leonardo DiCaprio</h4>
                                                <span>Gym Trainer</span>
                                            </div>
                                            <div class="trainer-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                            </div>

                                            <ul class="trainer-info">
                                                <li><span>Age</span>47</li>
                                                <li><span>Weight</span>75 kg</li>
                                                <li><span>Height</span>1,83 m</li>
                                                <li><span>Summary</span>Leonardo Wilhelm DiCaprio, Amerikalı oyuncu
                                                    ve yapımcı. DiCaprio, 1990'ların başında televizyon reklamlarında
                                                    görünerek oyunculuk hayatına başladı
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="cd-trainer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="cd-trainer-pic">
                                            <img src="{{asset('assets')}}/img/team/team-4.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cd-trainer-text">
                                            <div class="trainer-title">
                                                <h4>Brad Pitt</h4>
                                                <span>Gym Trainer</span>
                                            </div>
                                            <div class="trainer-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                            </div>

                                            <ul class="trainer-info">
                                                <li><span>Age</span>58</li>
                                                <li><span>Weight</span>73 kg</li>
                                                <li><span>Height</span> 1,8 m</li>
                                                <li><span>Summary</span>William Bradley Pitt, Amerikalı oyuncu ve film
                                                    yapımcısıdır. Yapım şirketi Plan B Entertainment ile yapımcı olarak
                                                    bir Akademi Ödülü ve Primetime Emmy Ödülü'nün yanı sıra
                                                    oyunculuğuyla iki Altın Küre Ödülü ve bir Akademi Ödülü de dâhil
                                                    olmak üzere birçok ödül almaya hak kazanmıştır.
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="cd-trainer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="cd-trainer-pic">
                                            <img src="{{asset('assets')}}/img/team/team-5.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cd-trainer-text">
                                            <div class="trainer-title">
                                                <h4>Anne Hathaway</h4>
                                                <span>Gym Trainer</span>
                                            </div>
                                            <div class="trainer-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                            </div>

                                            <ul class="trainer-info">
                                                <li><span>Age</span>39</li>
                                                <li><span>Weight</span>56 kg</li>
                                                <li><span>Height</span>1,73 m</li>
                                                <li><span>Summary</span>Anne Jacqueline Hathaway, Amerikalı oyuncu ve
                                                    şarkıcı. Brooklyn, New York'ta doğan ve Millburn, New Jersey'de
                                                    büyüyen Hathaway oyunculuğa annesi tarafından heveslendirildi
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="cd-trainer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="cd-trainer-pic">
                                            <img src="{{asset('assets')}}/img/team/team-6.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cd-trainer-text">
                                            <div class="trainer-title">
                                                <h4>Charlize Theron</h4>
                                                <span>Gym Trainer</span>
                                            </div>
                                            <div class="trainer-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                            </div>

                                            <ul class="trainer-info">
                                                <li><span>Age</span>46</li>
                                                <li><span>Weight</span>55 kg</li>
                                                <li><span>Height</span>1,77 m</li>
                                                <li><span>Summary</span>Charlize Theron, Güney Afrikalı ve Amerikalı
                                                    sinema sanatçısıdır. 2003'te En İyi Kadın Oyuncu dalında Oscar
                                                    ödülüne layık görüldü
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
@endsection
