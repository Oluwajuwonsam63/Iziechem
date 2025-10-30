@extends('layouts.header')

@section('content')


        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">{{$teams->name}}</h2>
                <div class="wallox-breadcrumb">
                    <ul class="wallox-breadcrumb__list list-unstyled">
                        <li><a href="index.html"><i class="icon-home"></i> Home</a></li>
                        <li><span>our team</span></li>
                        <li><span>{{$teams->name}}</span></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="team-details">
            <div class="container">
                <div class="team-details__inner">
                    <div class="row gutter-y-30 align-items-center">
                        <div class="col-lg-4">
                            <div class="team-details__thumb wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="team-details__thumb__image">
                                    {{-- <img src="assets/images/team/team-d-1.png" alt="{{$teams->name}}"> --}}
                                    <img src="{{asset('public/image/teams/'. $teams->image)}}" alt="{{$teams->name}}">
                                    <div class="team-details__thumb__social">
                                        <a href="{{$teams->facebook}}"><i class="icon-facebook1" aria-hidden="true"></i><span class="sr-only">Facebook</span></a>
                                        <a href="{{$teams->x}}"> <i class="icon-twitter1" aria-hidden="true"></i> <span class="sr-only">Twitter</span></a>
                                        <a href="{{$teams->instagram}}"><i class="icon-social-media" aria-hidden="true"></i><span class="sr-only">Instagram</span></a>
                                        <a href="{{$teams->youtube}}"><i class="icon-youtube1" aria-hidden="true"></i><span class="sr-only">Youtube</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="team-details__content">
                                <div class="team-details__content__about wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                    <h3 class="team-details__content__title">{{$teams->name}}</h3>
                                    <p class="team-details__content__text">{{$teams->bio}}</p>
                                    <div class="team-details__content__signeture">
                                        {{-- <img src="assets/images/shapes/signeture.png" alt="wallox image"> --}}
                                        <img src="{{asset('public/image/teams/'. $teams->sign)}}" alt="{{$teams->sign}}">
                                    </div>
                                </div>
                                <ul class="team-details__link list-unstyled">
                                    <li class="team-details__link__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                        <div class="team-details__link__item__inner">
                                            <div class="team-details__link__icon">
                                                <i class="icon-telephone"></i>
                                            </div>
                                            <a href="tel:+88-0123-654-1020" class="team-details__link__dec">{{$teams->phone}}</a>
                                        </div>
                                    </li>
                                    <li class="team-details__link__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                        <div class="team-details__link__item__inner">
                                            <div class="team-details__link__icon">
                                                <i class="icon-email"></i>
                                            </div>
                                            <a href="mailto:info@wallox.com" class="team-details__link__dec">{{$teams->email}}</a>
                                        </div>
                                    </li>
                                    <li class="team-details__link__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                        <div class="team-details__link__item__inner">
                                            <div class="team-details__link__icon">
                                                <i class="icon-maps-and-flags"></i>
                                            </div>
                                            <p class="team-details__link__dec">{{$teams->location}}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="team-skills-one">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="team-skills-one__top">
                            <h4 class="team-skills-one__top__title wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>Personal Information</h4>
                            <p class="team-skills-one__top__text wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,</p>
                            <p class="team-skills-one__top__text wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,</p>
                        </div>
                        <div class="team-skills-one__inner">
                            <h4 class="team-skills-one__inner__title wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>Professional Skills</h4>
                            <div class="team-skills-one__skills wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="team-skills-one__progress progress-box">
                                    <h4 class="progress-box__title">Project Management</h4>
                                    <div class="progress-box__bar">
                                        <div class="progress-box__bar__inner count-bar" data-percent="95%">
                                            <div class="progress-box__number count-text">95%</div>
                                        </div>
                                    </div>
                                </div><!-- /.skills-item -->
                                <div class="team-skills-one__progress progress-box">
                                    <h4 class="progress-box__title">Leak Detection and Repair</h4>
                                    <div class="progress-box__bar">
                                        <div class="progress-box__bar__inner count-bar" data-percent="85%">
                                            <div class="progress-box__number count-text">85%</div>
                                        </div>
                                    </div>
                                </div><!-- /.skills-item -->
                                <div class="team-skills-one__progress progress-box">
                                    <h4 class="progress-box__title">Water Filtration and Softening</h4>
                                    <div class="progress-box__bar">
                                        <div class="progress-box__bar__inner count-bar" data-percent="70%">
                                            <div class="progress-box__number count-text">70%</div>
                                        </div>
                                    </div>
                                </div><!-- /.skills-item -->
                                <div class="team-skills-one__progress progress-box">
                                    <h4 class="progress-box__title">Well Pump Services</h4>
                                    <div class="progress-box__bar">
                                        <div class="progress-box__bar__inner count-bar" data-percent="80%">
                                            <div class="progress-box__number count-text">80%</div>
                                        </div>
                                    </div>
                                </div><!-- /.skills-item -->
                            </div>
                            <p class="team-skills-one__top__text wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.the Internet tend to repeat predefined chunks as necessary</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endSection
