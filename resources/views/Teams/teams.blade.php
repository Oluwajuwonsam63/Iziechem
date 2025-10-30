@extends('layouts.header')

@section('content')

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">our team</h2>
                <div class="wallox-breadcrumb">
                    <ul class="wallox-breadcrumb__list list-unstyled">
                        <li><a href="index.html"><i class="icon-home"></i> Home</a></li>
                        <li><span>our team</span></li>
                    </ul>
                </div>
            </div>
        </section>

            <section class="team-one team-one--page">
                <div class="container">
                    <div class="row gutter-y-30">
                        @foreach($teams as $team)
                            <div class="col-md-6 col-lg-4">
                                <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                    <div class="team-card__thumb">
                                        {{-- <img src="assets/images/team/team-1-1.jpg" alt="wallox image"> --}}
                                        <img src="{{asset('public/image/teams/'. $team->image)}}" alt="">
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
                            </div><!-- /.col-md-6 col-lg-4 -->
                        @endforeach
                        {{-- <div class="col-md-6 col-lg-4">
                            <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="team-card__thumb">
                                    <img src="assets/images/team/team-1-2.jpg" alt="wallox image">
                                </div>
                                <div class="team-card__content">
                                    <h4 class="team-card__content__title"><a href="team-details.html">Michael T. Lee</a></h4>
                                    <span class="team-card__content__dec">Web Developer</span>
                                </div>
                                <div class="team-card__social">
                                    <a href="https://facebook.com/"><i class="icon-facebook1" aria-hidden="true"></i></a>
                                    <a href="https://instagram.com/"><i class="icon-social-media" aria-hidden="true"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div><!-- /.col-md-6 col-lg-4 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="team-card__thumb">
                                    <img src="assets/images/team/team-1-3.jpg" alt="wallox image">
                                </div>
                                <div class="team-card__content">
                                    <h4 class="team-card__content__title"><a href="team-details.html">Leslie Alexander</a></h4>
                                    <span class="team-card__content__dec">Web Developer</span>
                                </div>
                                <div class="team-card__social">
                                    <a href="https://facebook.com/"><i class="icon-facebook1" aria-hidden="true"></i></a>
                                    <a href="https://instagram.com/"><i class="icon-social-media" aria-hidden="true"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div><!-- /.col-md-6 col-lg-4 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="team-card__thumb">
                                    <img src="assets/images/team/team-1-4.jpg" alt="wallox image">
                                </div>
                                <div class="team-card__content">
                                    <h4 class="team-card__content__title"><a href="team-details.html">Leslie Alexander</a></h4>
                                    <span class="team-card__content__dec">Web Developer</span>
                                </div>
                                <div class="team-card__social">
                                    <a href="https://facebook.com/"><i class="icon-facebook1" aria-hidden="true"></i></a>
                                    <a href="https://instagram.com/"><i class="icon-social-media" aria-hidden="true"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div><!-- /.col-md-6 col-lg-4 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="team-card__thumb">
                                    <img src="assets/images/team/team-1-5.jpg" alt="wallox image">
                                </div>
                                <div class="team-card__content">
                                    <h4 class="team-card__content__title"><a href="team-details.html">kevin martin</a></h4>
                                    <span class="team-card__content__dec">Web Developer</span>
                                </div>
                                <div class="team-card__social">
                                    <a href="https://facebook.com/"><i class="icon-facebook1" aria-hidden="true"></i></a>
                                    <a href="https://instagram.com/"><i class="icon-social-media" aria-hidden="true"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div><!-- /.col-md-6 col-lg-4 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="team-card__thumb">
                                    <img src="assets/images/team/team-1-6.jpg" alt="wallox image">
                                </div>
                                <div class="team-card__content">
                                    <h4 class="team-card__content__title"><a href="team-details.html">christine eve</a></h4>
                                    <span class="team-card__content__dec">Web Developer</span>
                                </div>
                                <div class="team-card__social">
                                    <a href="https://facebook.com/"><i class="icon-facebook1" aria-hidden="true"></i></a>
                                    <a href="https://instagram.com/"><i class="icon-social-media" aria-hidden="true"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div><!-- /.col-md-6 col-lg-4 --> --}}
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section>
@endsection