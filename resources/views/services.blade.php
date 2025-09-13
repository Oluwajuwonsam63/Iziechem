@extends('layouts.header')

@section('content')

 <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">our service</h2>
                <div class="wallox-breadcrumb">
                    <ul class="wallox-breadcrumb__list list-unstyled">
                        <li><a href="index.html"><i class="icon-home"></i> Home</a></li>
                        <li><span>our service</span></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="service-page">
            <div class="container">
                <div class="row gutter-y-30">
                    @foreach($categories->sortByDesc('created_at') as $cat)
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                <div class="service-card__image">
                                    <img src="{{asset('public/image/categories/'. $cat->image)}}" alt="{{$cat->name}}" style="height: 450px; width: 100%; object-fit: cover;">
                                    <div class="service-card__image__item">
                                        <div class="service-card__hover__box service-card__hover__box--1"></div>
                                        <div class="service-card__hover__box service-card__hover__box--2"></div>
                                        <div class="service-card__hover__box service-card__hover__box--3"></div>
                                        <div class="service-card__hover__box service-card__hover__box--4"></div>
                                    </div>
                                </div>
                                <div class="service-card__content">
                                    <div class="service-card__title__box">
                                        <h3 class="service-card__title"><a href="service-d-room-wallpapers.html">{{$cat->name}}</a></h3>
                                    </div>
                                    <div class="service-card__icon"><i class="icon-wallpaper"></i></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="service-card__image">
                                <img src="assets/images/service/service-1-2.jpg" alt="wall sheets">
                                <div class="service-card__image__item">
                                    <div class="service-card__hover__box service-card__hover__box--1"></div>
                                    <div class="service-card__hover__box service-card__hover__box--2"></div>
                                    <div class="service-card__hover__box service-card__hover__box--3"></div>
                                    <div class="service-card__hover__box service-card__hover__box--4"></div>
                                </div>
                            </div>
                            <div class="service-card__content">
                                <div class="service-card__title__box">
                                    <h3 class="service-card__title"><a href="service-d-wall-sheets.html">wall sheets</a></h3>
                                </div>
                                <div class="service-card__icon"><i class="icon-blanket"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="service-card__image">
                                <img src="assets/images/service/service-1-3.jpg" alt="wall painting">
                                <div class="service-card__image__item">
                                    <div class="service-card__hover__box service-card__hover__box--1"></div>
                                    <div class="service-card__hover__box service-card__hover__box--2"></div>
                                    <div class="service-card__hover__box service-card__hover__box--3"></div>
                                    <div class="service-card__hover__box service-card__hover__box--4"></div>
                                </div>
                            </div>
                            <div class="service-card__content">
                                <div class="service-card__title__box">
                                    <h3 class="service-card__title"><a href="service-d-wall-painting.html">wall painting</a></h3>
                                </div>
                                <div class="service-card__icon"><i class="icon-paint-roller"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="service-card__image">
                                <img src="assets/images/service/service-1-4.jpg" alt="interior designing">
                                <div class="service-card__image__item">
                                    <div class="service-card__hover__box service-card__hover__box--1"></div>
                                    <div class="service-card__hover__box service-card__hover__box--2"></div>
                                    <div class="service-card__hover__box service-card__hover__box--3"></div>
                                    <div class="service-card__hover__box service-card__hover__box--4"></div>
                                </div>
                            </div>
                            <div class="service-card__content">
                                <div class="service-card__title__box">
                                    <h3 class="service-card__title"><a href="service-d-interior-designing.html">interior designing</a></h3>
                                </div>
                                <div class="service-card__icon"><i class="icon-interior-design-1"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="service-card__image">
                                <img src="assets/images/service/service-1-5.jpg" alt="PVC panels">
                                <div class="service-card__image__item">
                                    <div class="service-card__hover__box service-card__hover__box--1"></div>
                                    <div class="service-card__hover__box service-card__hover__box--2"></div>
                                    <div class="service-card__hover__box service-card__hover__box--3"></div>
                                    <div class="service-card__hover__box service-card__hover__box--4"></div>
                                </div>
                            </div>
                            <div class="service-card__content">
                                <div class="service-card__title__box">
                                    <h3 class="service-card__title"><a href="service-d-pvc-panels.html">PVC panels</a></h3>
                                </div>
                                <div class="service-card__icon"><i class="icon-wallpaper-1"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="service-card__image">
                                <img src="assets/images/service/service-1-6.jpg" alt="outdoor designs">
                                <div class="service-card__image__item">
                                    <div class="service-card__hover__box service-card__hover__box--1"></div>
                                    <div class="service-card__hover__box service-card__hover__box--2"></div>
                                    <div class="service-card__hover__box service-card__hover__box--3"></div>
                                    <div class="service-card__hover__box service-card__hover__box--4"></div>
                                </div>
                            </div>
                            <div class="service-card__content">
                                <div class="service-card__title__box">
                                    <h3 class="service-card__title"><a href="service-d-outdoor-design.html">outdoor designs</a></h3>
                                </div>
                                <div class="service-card__icon"><i class="icon-park"></i></div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        <div class="why-choose">
            <div class="why-choose__bg" style="background-image: url(assets/images/shapes/why-chose-us.png);"></div>
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-6">
                        <div class="sec-title text-start">
                            <div class="d-flex align-items-center justify-content-start">
                                <img class="sec-title__image" src="assets/images/shapes/sec-title-s-1.png" alt="wallox image">
                                <h6 class="sec-title__tagline bw-split-in-right">why choose us?</h6>
                            </div>
                            <h3 class="sec-title__title bw-split-in-up">Leading Provider Of Interior Service In London</h3>
                        </div>
                        <p class="why-choose__top__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
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
                                    <div class="progress-box__bar__inner count-bar" data-percent="80%">
                                        <div class="progress-box__number count-text">80%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-choose__right">
                            <div class="why-choose__thumb real-image">
                                <img src="assets/images/service/service-man-bg.jpg" alt=" wallox image">
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
@endsection