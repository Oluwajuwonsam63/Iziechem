@extends('layouts.header')

@section('content')
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">About us</h2>
                <div class="wallox-breadcrumb">
                    <ul class="wallox-breadcrumb__list list-unstyled">
                        <li><a href="index.html"><i class="icon-home"></i> Home</a></li>
                        <li><span>About</span></li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="about-one">
            <div class="container">
                <div class="row align-items-center gutter-y-30">
                    <div class="col-lg-6">
                        <div class="about-one__thumb">
                            <div class="about-one__thumb__item real-image">
                                <img src="assets/images/about/about1.png" alt="iziechem image">
                            </div>
                            <div class="about-one__funfact count-box">
                                <h3 class="about-one__count">
                                    <span class="count-text" data-stop="8" data-speed="1500"></span>
                                    <span>+</span>
                                </h3>
                                <p class="about-one__funfact__text">years of <br> experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-one__right">
                            <div class="sec-title text-start">
                                <div class="d-flex align-items-center justify-content-start">
                                    <img class="sec-title__image" src="{{ asset('assets/images/favicons/logo3.png') }}" alt="iziechem image">
                                    <h6 class="sec-title__tagline bw-split-in-right">welcome to Iziechem</h6>
                                </div>
                                <h3 class="sec-title__title bw-split-in-up">We’re Providing Quality Wall Designs</h3>
                            </div>
                            <p class="about-one__top__text">Our expertise in painting, screeding, and decorative finishes ensures walls that are not only smooth and durable but also stylish and unique. We combine modern techniques with premium materials to deliver wall designs that elevate every space.</p>
                            <div class="row align-items-center gutter-y-30">
                                <div class="col-sm-6">
                                    <div class="about-one__video">
                                        <img src="assets/images/about/video-bg.jpg" alt="iziechem image">
                                        <div class="about-one__video-popup">
                                            <a href="https://www.youtube.com/watch?v=y_MIu6bFDl8" class="about-one__video video-popup">
                                                <i class="icon-polygon"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="about-one__list list-unstyled">
                                        <li class="about-one__list__item"> <i class="icon-check"></i> We’re professional</li>
                                        <li class="about-one__list__item"> <i class="icon-check"></i> We use quality material</li>
                                        <li class="about-one__list__item"> <i class="icon-check"></i> 100% customers satisfaction</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="about-one__client">
                                <div class="about-one__client__item">
                                    <div class="about-one__client__thumb">
                                        <img src="assets/images/resources/test1.png" alt>
                                        <img src="assets/images/resources/test2.png" alt>
                                        <img src="assets/images/resources/test3.png" alt>
                                        <img src="assets/images/resources/test4.png" alt>
                                    </div>
                                    <div class="about-one__client__dec">
                                        <div class="about-one__client__star">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </div>
                                        <p class="about-one__client__text">Satisfied Client ratings</p>
                                    </div>
                                </div>
                                <a href="{{url('/updates')}}" class="wallox-btn wallox-btn--base">more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-one__shape">
                <img src="assets/images/shapes/about-2-1.png" alt>
            </div>
        </div>

        <div class="why-choose">
            <div class="why-choose__bg" style="background-image: url(assets/images/shapes/why-chose-us.png);"></div>
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-6">
                        <div class="sec-title text-start">
                            <div class="d-flex align-items-center justify-content-start">
                                <img class="sec-title__image" src="{{ asset('assets/images/favicons/logo3.png') }}" alt="iziechem image">
                                <h6 class="sec-title__tagline bw-split-in-right">why choose us?</h6>
                            </div>
                            <h3 class="sec-title__title bw-split-in-up">Leading Provider Of Interior Service In Nigeria</h3>
                        </div>
                        <p class="why-choose__top__text">At IZIECHEM, we take pride in being a trusted name for interior solutions across Nigeria. From wall screeding and premium painting to 3D panels, wallpapers, and decorative finishes, we deliver exceptional services that redefine spaces with beauty, comfort, and durability.</p>
                        <div class="why-choose__box">
                            <ul class="why-choose__box__list list-unstyled">
                                <li>
                                    <p class="why-choose__box__list__item"><i class="icon-check"></i>We’re professional</p>
                                </li>
                                <li>
                                    <p class="why-choose__box__list__item"><i class="icon-check"></i>We use quality material</p>
                                </li>
                            </ul>
                            <div class="why-choose__progress progress-box">
                                <h4 class="progress-box__title">Interior Wall Design</h4>
                                <div class="progress-box__bar">
                                    <div class="progress-box__bar__inner count-bar" data-percent="100%">
                                        <div class="progress-box__number count-text">100%</div>
                                    </div>
                                </div>
                            </div><!-- /.skills-item -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-choose__right">
                            <div class="why-choose__thumb real-image">
                                <img src="assets/images/service/service2.png" alt=" wallox image">
                            </div>
                            <div class="why-choose__thumb--two">
                                <img src="assets/images/service/service-man.png" alt=" wallox image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="why-choose__shape">
                <img src="assets/images/shapes/angle-1-1.png" alt>
            </div>
            <div class="why-choose__shape why-choose__shape--two">
                <img src="assets/images/shapes/angle-1-2.png" alt>
            </div>
        </div>

        <section class="testimonials-two">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="sec-title__image" src="{{ asset('assets/images/favicons/logo3.png') }}" alt="iziechem image">
                        <h6 class="sec-title__tagline bw-split-in-right">our testimonials</h6>
                    </div>
                    <h3 class="sec-title__title bw-split-in-up">What They Talked <br> About Iziechem</h3>
                </div>
                <div class="container">
                    <div class="testimonials-two__carousel wallox-owl__carousel owl-carousel owl-theme" data-owl-options='{
                "items": 1,
                "margin": 0,
                "loop": true,
                "smartSpeed": 700,
                "nav": false,
                "dots": false,
                "autoplay": true,
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "576": {
                        "items": 1,
                        "margin": 30
                    },
                    "992": {
                        "items": 2,
                        "margin": 30
                    },
                    "1199": {
                        "items": 2,
                        "margin": 30
                    }
                }
            }'>
                        @foreach($testifiers as $testifier)
                        <div class="item">
                            <div class="testimonials-card wow fadeInUp" data-wow-duration='000ms' data-wow-delay='000ms'>
                                <div class="testimonials-card__top">
                                    <div class="testimonials-card__image">
                                        <img src="{{asset('public/image/testifiers/'. $testifier->image)}}" alt="{{$testifier->name}}" style="border-radius: 50%; width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                    <div class="testimonials-card__top__video">
                                        <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="testimonials-card__video video-popup">
                                            <i class="icon-polygon"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="testimonials-card__text">“{{$testifier->message}}”</p>
                                <div class="testimonials-card__content">
                                    <div class="testimonials-card__author">
                                        <h4 class="testimonials-card__author__title">{{$testifier->name}}</h4>
                                        <span class="testimonials-card__author__dec">{{$testifier->position ?? 'Client'}}</span>
                                    </div>
                                    <div class="testimonials-card__rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="testimonials-card__quite">
                                    <i class="icon-quite1"></i>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="team-one team-one--home">
            <div class="team-one__bg" style="background-image: url(assets/images/backgrounds/team-bg.png);"></div>
            <div class="container">
                <div class="team-one__top">
                    <div class="row align-items-center justify-content-between gutter-y-30">
                        <div class="col-lg-8">
                            <div class="sec-title">
                                <div class="d-flex align-items-center justify-content-start">
                                    <img class="sec-title__image" src="{{ asset('assets/images/favicons/logo3.png') }}" alt="iziechem">
                                    <h6 class="sec-title__tagline bw-split-in-right">our team</h6>
                                </div>
                                <h3 class="sec-title__title bw-split-in-up">Meet the Expert Team</h3>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-one__top__btn wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <a href="{{ url('/teams') }}" class="wallox-btn wallox-btn--border">view all team</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-30">
                    @foreach($teams as $team)
                    <div class="col-md-6 col-lg-4">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <div class="team-card__thumb">
                                <img src="{{asset('public/image/teams/'. $team->image)}}" alt="iziechem">
                            </div>
                            <div class="team-card__content">
                                <h4 class="team-card__content__title"><a href="{{ route('info_teams', $team->id) }}">{{$team->name}}</a></h4>
                                <span class="team-card__content__dec">{{$team->role}}</span>
                            </div>
                            <div class="team-card__social">
                                <a href="{{$team->facebook}}"><i class="icon-facebook1" aria-hidden="true"></i></a>
                                <a href="{{$team->instagram}}"><i class="icon-social-media" aria-hidden="true"></i></a>
                                <a href="{{$team->linkedIn}}"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="faqs-two">
            <div class="container">
                <div class="row align-items-center gutter-y-30">
                    <div class="col-lg-6">
                        <div class="faq-page__accordion faq-page__accordion--faqs-two wallox-accrodion wow fadeInLeft" data-wow-duration='1500ms' data-wow-delay='300ms' data-grp-name="wallox-accrodion">
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4 class="accrodion-title__text"><span class="accrodion-title__icon"></span>What services do you offer?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p class="inner__text">We specialize in professional painting and screeding for residential, commercial, and industrial projects. Our services include wall preparation, smooth screeding, interior and exterior painting, and custom finishes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4 class="accrodion-title__text"> <span class="accrodion-title__icon"></span>How long does a typical project take?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p class="inner__text">The timeline depends on the size of the space and the scope of work. On average, small projects can take a few days, while larger projects may take one to two weeks. We always provide a clear timeline before starting.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4 class="accrodion-title__text"><span class="accrodion-title__icon"></span>Do you use durable and safe materials?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p class="inner__text">Yes. We use high-quality paints, screeding materials, and eco-friendly products that are safe for your home and designed to last for years without fading or cracking.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4 class="accrodion-title__text"><span class="accrodion-title__icon"></span>How can I get a quote for my project?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p class="inner__text">You can request a free quote by contacting us through our website or phone. Simply provide your project details, and we’ll give you a customized estimate tailored to your needs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sec-title text-start">
                            <div class="d-flex align-items-center justify-content-start">
                                <img class="sec-title__image" src="{{ asset('assets/images/favicons/logo3.png') }}" alt="iziechem">
                                <h6 class="sec-title__tagline bw-split-in-right">frequently asked question</h6>
                            </div>
                            <h3 class="sec-title__title bw-split-in-up">Ultimately, quality work is judged by the extent</h3>
                        </div>
                        <p class="faqs-two__top__text wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>True quality is measured by the lasting impact of the work done. That’s why we focus on precision, durability, and flawless finishing—ensuring every project stands out in beauty and excellence.</p>
                        <div class="row align-items-center gutter-y-30">
                            <div class="col-md-6">
                                <ul class="faqs-two__list list-unstyled wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                    <li class="faqs-two__list__item"> <i class="icon-check"></i> We’re professional</li>
                                    <li class="faqs-two__list__item"> <i class="icon-check"></i> We use quality material</li>
                                    <li class="faqs-two__list__item"> <i class="icon-check"></i> 100% customers satisfaction</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <div class="faqs-two__thumb wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                    <img src="assets/images/resources/work2.png" alt="iziechem">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection