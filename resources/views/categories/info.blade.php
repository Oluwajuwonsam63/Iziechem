@extends('layouts.header')

@section('content')


<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <div class="container">
        <h2 class="page-header__title">Room Wallpapers</h2>
        <div class="wallox-breadcrumb">
            <ul class="wallox-breadcrumb__list list-unstyled">
                <li><a href="index.html"><i class="icon-home"></i> Home</a></li>
                <li><span>Services details</span></li>
                <li><span>Room Wallpapers</span></li>
            </ul>
        </div>
    </div>
</section>

    <section class="service-details">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-md-12 col-lg-4">
                    <div class="service-sidebar">
                        <div class="service-sidebar__inner">
                            <div class="service-sidebar__single">
                                <ul class="list-unstyled service-sidebar__nav wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                    <li><a href="service-d-room-wallpapers.html">Room Wallpapers</a></li>
                                    <li><a href="service-d-wall-painting.html">Wall Painting</a></li>
                                    <li><a href="service-d-wall-sheets.html">Wall Sheets</a></li>
                                    <li><a href="service-d-outdoor-design.html">Outdoor Design</a></li>
                                    <li><a href="service-d-pvc-panels.html">PVC Panels</a></li>
                                    <li><a href="service-d-interior-designing.html">Interior Designing</a></li>
                                </ul>
                            </div>

                            <div class="service-sidebar__single wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="service-sidebar__contact" style="background-image: url({{ asset('assets/images/resources/work10.jpg') }});">
                                    <div class="service-sidebar__contact__content">
                                        <div class="service-sidebar__contact__icon">
                                            <i class="icon-telephone"></i>
                                        </div>
                                        <h3 class="service-sidebar__contact__time">MON-SAT 8:00AM-9:00PM</h3>
                                        <h3 class="service-sidebar__contact__number">
                                            <a href="tel:+2349036969352">+234 903 696 9352</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-sidebar__single wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <div class="service-sidebar__company">
                                <a href="about.html" class="service-sidebar__company__btn">
                                    <i class="icon-download"></i>
                                </a>
                                <h4 class="service-sidebar__company__title">company profile</h4>
                            </div>
                            <div class="service-sidebar__company">
                                <a href="about.html" class="service-sidebar__company__btn">
                                    <i class="icon-download"></i>
                                </a>
                                <h4 class="service-sidebar__company__title">company brochure</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="service-details__content">
                        <div class="service-details__thumbnail wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            {{-- <img src="assets/images/service/service-l-1-3.jpg" alt="Quality Construction Management"> --}}
                            <img src="{{asset('public/image/categories/'. $category->image)}}" alt="{{ $category->name }}" style="height: 250px; width: 100%; border-radius:20px; object-fit: cover;">
                        </div>
                        <h3 class="service-details__title wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>{{ $category->name }}</h3>
                        <p class="service-details__text wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>{{ $category->description }}</p>
                        <h3 class="service-details__title wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>Where can I get some?</h3>
                        <p class="service-details__text wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
                        <div class="service-details__feature">
                            <div class="row wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="col-lg-6">
                                    <div class="service-details__left">
                                        <ul class="service-details__list list-unstyled">
                                            <li class="service-details__list__item">
                                                <div class="service-details__list__icon">
                                                    <i class="icon-check"></i>
                                                </div>
                                                <span class="service-details__list__text">Instant Business Growth</span>
                                            </li>
                                            <li class="service-details__list__item">
                                                <div class="service-details__list__icon">
                                                    <i class="icon-check"></i>
                                                </div>
                                                <span class="service-details__list__text">24/7 Quality Service</span>
                                            </li>
                                            <li class="service-details__list__item">
                                                <div class="service-details__list__icon">
                                                    <i class="icon-check"></i>
                                                </div>
                                                <span class="service-details__list__text">Easy Customer Service</span>
                                            </li>
                                            <li class="service-details__list__item">
                                                <div class="service-details__list__icon">
                                                    <i class="icon-check"></i>
                                                </div>
                                                <span class="service-details__list__text">Quality Cost Service</span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-details__right">
                                        <div class="service-details__thumb">
                                            <img src="{{asset('public/image/categories/'. $category->image)}}" alt="{{$category->name}}" style="height: 300px; width: 100%; object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="service-details__text wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>Continually myocardinate holistic mindshare with client-based web services. Assertively e-enable catalysts for change before tested markets. Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently predominate revolutionary quality vectors through future-proof manufactured products. Enthusiastically transform distinctive collaboration.</p>
                        <h3 class="service-details__title wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>Where can I get some?</h3>
                        <div class="faq-page__accordion wallox-accrodion wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms' data-grp-name="wallox-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4 class="accrodion-title__text"><span class="accrodion-title__icon"></span>What services does your construction company offer?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p class="inner__text">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4 class="accrodion-title__text"><span class="accrodion-title__icon"></span>How do I request a quote for my construction project?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p class="inner__text">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4 class="accrodion-title__text"> <span class="accrodion-title__icon"></span>What is the timeline for a construction project?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p class="inner__text">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="testimonials-contact">
        <div class="container">
            <div class="row gutter-y-30 align-items-center">
                <div class="col-lg-6">
                    <div class="testimonials-contact__left">
                        <div class="testimonials-contact__bg" style="background-image: url(assets/images/shapes/testimonials-form-bg.png);"></div>
                        <div class="testimonials-contact__inner">
                            <div class="sec-title">
                                <div class="d-flex align-items-center justify-content-start">
                                    <img class="sec-title__image" src="assets/images/favicons/logo3.png" alt="wallox image">
                                    <h6 class="sec-title__tagline bw-split-in-right">get in touch</h6>
                                </div>
                                <h3 class="sec-title__title bw-split-in-up">How May We Help You!</h3>
                            </div>
                            <div class="testimonials-contact__form">
                                <form class="contact-one__form contact-form-validated form-one background-base wow fadeInUp" data-wow-duration="1500ms" action="https://pixydrops.com/wallox-html/inc/sendemail.php">
                                    <div class="form-one__group">
                                        <div class="form-one__control">
                                            <label for="name">Your name*</label>
                                            <input id="name" type="text" name="name" placeholder="name">
                                        </div>
                                        <div class="form-one__control">
                                            <label for="email">Your Email*</label>
                                            <input type="email" id="email" name="email" placeholder="Email address">
                                        </div>
                                        <div class="form-one__control">
                                            <label for="subject">subject*</label>
                                            <input type="text" id="subject" name="subject" placeholder="select subject">
                                        </div>
                                        <div class="form-one__control">
                                            <label for="phone">Your Phone*</label>
                                            <input type="text" id="phone" name="phone" placeholder="+1253 457 7840">
                                        </div>
                                        <div class="form-one__control form-one__control--full">
                                            <label for="message">Message*</label>
                                            <textarea name="message" id="message" placeholder="Write Message"></textarea>
                                        </div>
                                        <div class="form-one__control form-one__control--full">
                                            <button type="submit" class="wallox-btn wallox-btn__submite">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonials-contact__right">
                        <div class="sec-title text-start">
                            <div class="d-flex align-items-center justify-content-start">
                                <img class="sec-title__image" src="assets/images/favicons/logo3.png" alt="wallox image">
                                <h6 class="sec-title__tagline bw-split-in-right">our testimonials</h6>
                            </div>
                            <h3 class="sec-title__title bw-split-in-up">What They Say About Our</h3>
                        </div>

                        <div class="testimonials-contact__carousel wallox-owl__carousel owl-carousel owl-theme" data-owl-options='{
                    "items": 1,
                    "margin": 30,
                    "loop": true,
                    "smartSpeed": 700,
                    "nav": true,
                    "navText": ["<span class=\"icon-angle-right\"></span>","<span class=\"icon-angle-left\"></span>"],
                    "dots": false,
                    "autoplay": false
                }'>
                            <div class="item">
                                <div class="testimonials-contact__item">
                                    <div class="testimonials-contact__top">
                                        <div class="testimonials-contact__author">
                                            <div class="testimonials-contact__author__image">
                                                <img src="assets/images/resources/testi-2-1.jpg" alt="wallox image">
                                            </div>
                                            <div class="testimonials-contact__author__content">
                                                <h5 class="testimonials-contact__author__name">Kathryn Murphy</h5>
                                                <span class="testimonials-contact__author__deg">Web Designer</span>
                                                <div class="testimonials-contact__author__star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="testimonials-contact__author__quite">
                                                <i class="icon-quite2"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="testimonials-contact__item__text">“ Consectetur adipiscing elit. Integer nunc viverra laoreet est the is porta pretium metus aliquam eget maecenas porta is nunc viverra Aenean pulvinar maximus leo ”</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-contact__item">
                                    <div class="testimonials-contact__top">
                                        <div class="testimonials-contact__author">
                                            <div class="testimonials-contact__author__image">
                                                <img src="assets/images/resources/testi-2-1.jpg" alt="wallox image">
                                            </div>
                                            <div class="testimonials-contact__author__content">
                                                <h5 class="testimonials-contact__author__name">Kathryn Murphy</h5>
                                                <span class="testimonials-contact__author__deg">Web Designer</span>
                                                <div class="testimonials-contact__author__star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="testimonials-contact__author__quite">
                                                <i class="icon-quite2"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="testimonials-contact__item__text">“ Consectetur adipiscing elit. Integer nunc viverra laoreet est the is porta pretium metus aliquam eget maecenas porta is nunc viverra Aenean pulvinar maximus leo ”</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-contact__item">
                                    <div class="testimonials-contact__top">
                                        <div class="testimonials-contact__author">
                                            <div class="testimonials-contact__author__image">
                                                <img src="assets/images/resources/testi-2-1.jpg" alt="wallox image">
                                            </div>
                                            <div class="testimonials-contact__author__content">
                                                <h5 class="testimonials-contact__author__name">Kathryn Murphy</h5>
                                                <span class="testimonials-contact__author__deg">Web Designer</span>
                                                <div class="testimonials-contact__author__star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="testimonials-contact__author__quite">
                                                <i class="icon-quite2"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="testimonials-contact__item__text">“ Consectetur adipiscing elit. Integer nunc viverra laoreet est the is porta pretium metus aliquam eget maecenas porta is nunc viverra Aenean pulvinar maximus leo ”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection