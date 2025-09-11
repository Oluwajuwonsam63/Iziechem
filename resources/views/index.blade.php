@extends('layouts.header')

@section('content')
        <!-- main-slider-start -->
        <section class="hero-three">
            <div class="hero-three__carousel wallox-slick__carousel slick" data-slick-options='{
		"slidesToShow": 1,
		"slidesToScroll": 1,
		"fade": true,
		"asNavFor": ".hero-three__counter__carousel",
		"autoplay": true,
		"autoplaySpeed": 4000,
		"speed": 2000,
		"infinite": true,
		"dots": true
	}'>
                <div class="item">
                    <div class="hero-three__item">
                        <div class="hero-three__bg" style="background-image: url(assets/images/backgrounds/slider1.png);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="hero-three__content text-center">
                                        <h5 class="hero-three__sub-title">Colors That Speak, Walls That Shine</h5>
                                        <h2 class="hero-three__title">Premium painting services that bring your vision to life</h2>
                                        <div class="hero-three__btn">
                                            <a href="services.html" class="wallox-btn wallox-btn--base">our services</a>
                                            <a href="services.html" class="wallox-btn wallox-btn--border">discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="hero-three__item">
                        <div class="hero-three__bg" style="background-image: url(assets/images/backgrounds/slider2.png);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="hero-three__content text-center">
                                        <h5 class="hero-three__sub-title">Smooth Surfaces, Elegant Designs</h5>
                                        <h2 class="hero-three__title">Professional screeding that sets the stage for perfection</h2>
                                        <div class="hero-three__btn">
                                            <a href="services.html" class="wallox-btn wallox-btn--base">our services</a>
                                            <a href="services.html" class="wallox-btn wallox-btn--border">discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="hero-three__item">
                        <div class="hero-three__bg" style="background-image: url(assets/images/backgrounds/slider3.png);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="hero-three__content text-center">
                                        <h5 class="hero-three__sub-title">Transform your space, one wall at a time</h5>
                                        <h2 class="hero-three__title">the best quality wallpapers for your home</h2>
                                        <div class="hero-three__btn">
                                            <a href="services.html" class="wallox-btn wallox-btn--base">our services</a>
                                            <a href="services.html" class="wallox-btn wallox-btn--border">discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-three__counter__carousel wallox-slick__carousel slick" data-slick-options='{
			"slidesToShow": 3,
			"autoplay": true,
			"autoplaySpeed": 4000,
			"asNavFor": ".hero-three__carousel",
			"speed": 2000,
			"infinite": true,
			"dots": false
		}'>
                <div class="hero-three__counter__item"><span>01</span></div>
                <div class="hero-three__counter__item"><span>02</span></div>
                <div class="hero-three__counter__item"><span>03</span></div>
            </div>
        </section>

        <section class="feature-one">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="feature-one__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="feature-one__item__inner">
                                <div class="feature-one__item__icon">
                                    <i class="icon-idea"></i>
                                </div>
                            </div>
                            <h5 class="feature-one__item__title"><a href="service-d-pvc-panels.html">smart work</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="feature-one__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <div class="feature-one__item__inner">
                                <div class="feature-one__item__icon">
                                    <i class="icon-interior-design"></i>
                                </div>
                            </div>
                            <h5 class="feature-one__item__title"><a href="service-d-outdoor-design.html">unique design</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="feature-one__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                            <div class="feature-one__item__inner">
                                <div class="feature-one__item__icon">
                                    <i class="icon-team-leader"></i>
                                </div>
                            </div>
                            <h5 class="feature-one__item__title"><a href="service-d-room-wallpapers.html">skilled team</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="feature-one__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>
                            <div class="feature-one__item__inner">
                                <div class="feature-one__item__icon">
                                    <i class="icon-best-price"></i>
                                </div>
                            </div>
                            <h5 class="feature-one__item__title"><a href="service-d-wall-painting.html">best pricing</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-two">
            <div class="about-two__bg" style="background-image: url(assets/images/shapes/about-bg-2-1.png);"></div>
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-6">
                        <div class="about-two__left">
                            <div class="about-two__video-popup">
                                <a href="https://www.youtube.com/@israeljoshua9080" class="about-two__video video-popup">
                                    <i class="icon-polygon"></i>
                                </a>
                            </div>
                            <div class="about-two__thumb wow fadeInLeft" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="about-two__thumb__item">
                                    <img src="assets/images/about/work1.jpg" alt="wallox imaage">
                                </div>
                                <div class="about-two__thumb__item-two">
                                    <img src="assets/images/about/work2.png" alt="wallox imaage">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-two__right">
                            <div class="sec-title text-start">
                                <div class="d-flex align-items-center justify-content-start">
                                    <img class="sec-title__image" src="assets/images/shapes/sec-title-s-1.png" alt="iziechem">
                                    <h6 class="sec-title__tagline bw-split-in-right">welcome to iziechem</h6>
                                </div>
                                <h3 class="sec-title__title bw-split-in-up">We Focus to Make Your Walls Beautiful</h3>
                            </div>
                            <p class="about-two__top__text wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>Our expert painting and screeding services are designed to give your walls a smooth, flawless finish with vibrant colors that last. We combine quality materials, skilled craftsmanship, and attention to detail to transform every space into something truly beautiful.</p>
                            <div class="about-two__feature wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="about-two__feature__item">
                                    <h4 class="about-two__feature__title">Beautiful Clean Result</h4>
                                    <p class="about-two__feature__text">We create spotless finishes and smooth walls with expert painting and screeding, leaving every space fresh and elegant.</p>
                                </div>
                                <div class="about-two__feature__item">
                                    <h4 class="about-two__feature__title">Awesome Work Deliver</h4>
                                    <p class="about-two__feature__text">Our team combines skill and precision to deliver outstanding results that transform your walls and exceed expectations.</p>
                                </div>
                            </div>

                            <div class="about-two__connect wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <a href="about.html" class="wallox-btn">more about us</a>
                                <div class="about-two__call">
                                    <div class="about-two__call__icon">
                                        <i class="icon-telephone"></i>
                                    </div>
                                    <div class="about-two__call__content">
                                        <span class="about-two__call__subtitle">Call Us Now</span>
                                        <a href="tel:+208-555-0112" class="about-two__call__number">+234-903-696-9352</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-two__shape">
                <img src="assets/images/shapes/about-2-1-shape.png" alt>
            </div>
        </section>

        <section class="service-three">
            <div class="service-three__bg" style="background-image: url(assets/images/backgrounds/service-bg-3-1.png);"></div>
            <div class="service-three__text-slider">
                <div class="service-three__text-slider__inner">
                    <div class="service-three__text-slider__item"><img src="assets/images/shapes/portal.png" alt>Installation of wallpapers</div>
                    <div class="service-three__text-slider__item"><img src="assets/images/shapes/portal.png" alt>curtains</div>
                    <div class="service-three__text-slider__item"><img src="assets/images/shapes/portal.png" alt>3D-4D panels</div>
                    <div class="service-three__text-slider__item"><img src="assets/images/shapes/portal.png" alt>Interior & Exterior Decoration</div>
                    <div class="service-three__text-slider__item"><img src="assets/images/shapes/portal.png" alt>window blinds</div>
                    <div class="service-three__text-slider__item"><img src="assets/images/shapes/portal.png" alt>Wallpanel</div>
                    <div class="service-three__text-slider__item"><img src="assets/images/shapes/portal.png" alt>painting</div>
                    <div class="service-three__text-slider__item"><img src="assets/images/shapes/portal.png" alt>wallscreeding</div>
                    <div class="service-three__text-slider__item"><img src="assets/images/shapes/portal.png" alt>Stickers</div>
                    <div class="service-three__text-slider__item"><img src="assets/images/shapes/portal.png" alt>quality paint</div>
                </div>
            </div>
            <div class="container">
                <div class="service-three__top">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="sec-title">
                                <div class="d-flex align-items-center justify-content-start">
                                    <img class="sec-title__image" src="assets/images/shapes/sec-title-s-3.png" alt="iziechem">
                                    <h6 class="sec-title__tagline bw-split-in-right">our best services</h6>
                                </div>
                                <h3 class="sec-title__title bw-split-in-up">Services We’re Offering</h3>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-three__top__btn">
                                <a href="services.html" class="wallox-btn wallox-btn--border">view all Service</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gutter-y-30">
                    <div class="col-lg-6">
                        <div class="service-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="service-three__thumb">
                                <img src="assets/images/service/service-3-1.jpg" alt="iziechem">
                            </div>
                            <div class="service-three__content">
                                <div class="service-three__content__left">
                                    <span class="service-three__content__number"></span>
                                    <h4 class="service-three__content__title"><a href="service-d-room-wallpapers.html">Room Wallpapers</a></h4>
                                </div>
                                <div class="service-three__content__right">
                                    <a href="service-d-room-wallpapers.html" class="wallox-btn wallox-btn--border">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <div class="service-three__thumb">
                                <img src="assets/images/service/service-3-2.jpg" alt="iziechem">
                            </div>
                            <div class="service-three__content">
                                <div class="service-three__content__left">
                                    <span class="service-three__content__number"></span>
                                    <h4 class="service-three__content__title"><a href="service-d-wall-painting.html">Wall Painting</a></h4>
                                </div>
                                <div class="service-three__content__right">
                                    <a href="service-d-wall-painting.html" class="wallox-btn wallox-btn--border">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                            <div class="service-three__thumb">
                                <img src="assets/images/service/service-3-3.jpg" alt="iziechem">
                            </div>
                            <div class="service-three__content">
                                <div class="service-three__content__left">
                                    <span class="service-three__content__number"></span>
                                    <h4 class="service-three__content__title"><a href="service-d-interior-designing.html">interior designing</a></h4>
                                </div>
                                <div class="service-three__content__right">
                                    <a href="service-d-interior-designing.html" class="wallox-btn wallox-btn--border">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>
                            <div class="service-three__thumb">
                                <img src="assets/images/service/service-3-4.jpg" alt="iziechem">
                            </div>
                            <div class="service-three__content">
                                <div class="service-three__content__left">
                                    <span class="service-three__content__number"></span>
                                    <h4 class="service-three__content__title"><a href="service-d-wall-sheets.html">wall sheets</a></h4>
                                </div>
                                <div class="service-three__content__right">
                                    <a href="service-d-wall-sheets.html" class="wallox-btn wallox-btn--border">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <img class="sec-title__image" src="assets/images/shapes/sec-title-s-1.png" alt="iziechem">
                                <h6 class="sec-title__tagline bw-split-in-right">freequently asked question</h6>
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

        <section class="project-three">
            <div class="project-three__bg" style="background-image: url(assets/images/shapes/contact-shape-1-1.png);"></div>
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-6">
                        <div class="project-three__left">
                            <div class="sec-title text-start">
                                <div class="d-flex align-items-center justify-content-start">
                                    <img class="sec-title__image" src="assets/images/shapes/sec-title-s-1.png" alt="iziechem">
                                    <h6 class="sec-title__tagline bw-split-in-right">our complete projects</h6>
                                </div>
                                <h3 class="sec-title__title bw-split-in-up">Recent Complete Projects</h3>
                            </div>
                            <p class="project-three__top__text wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms' style="color:black;">Take a look at some of our recently completed painting and screeding projects. Each one reflects our commitment to quality, attention to detail, and customer satisfaction.</p>
                            <div class="project-three__carousel__inner wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="project-three__carousel__inner__item">
                                    <div class="project-three__carousel wallox-slick__custome-counter" data-slick-options='{
								"slidesToShow": 1,
								"slidesToScroll": 1,
								"autoplay": true,
								"centerMode": true,
								"asNavFor": ".project-three__thumb__carousel",
								"focusOnSelect": true,
								"dots": false,
								"centerPadding": 0,
								"arrows": false,
								"nextArrow": "<button class=\"next\"><i class=\"icon-angle-right\"></i></button>",
								"prevArrow": "<button class=\"prev\"><i class=\"icon-angle-left\"></i></button>"
								}'>
                                        <div class="item">
                                            <div class="project-three__item">
                                                <span class="project-three__item__subtitle">Interior & Exterior</span>
                                                <h5 class="project-three__item__title">Wall Screeding</h5>
                                                <p class="project-three__item__text">Smooth, durable surfaces that prepare your walls for painting and ensure a flawless finish.</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="project-three__item">
                                                <span class="project-three__item__subtitle">Interior & Exterior</span>
                                                <h5 class="project-three__item__title">Decoration</h5>
                                                <p class="project-three__item__text">Creative designs and finishing touches that enhance the beauty of both indoor and outdoor spaces.</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="project-three__item">
                                                <span class="project-three__item__subtitle">Interior Walls</span>
                                                <h5 class="project-three__item__title">Travertino Marble Trowel Finish</h5>
                                                <p class="project-three__item__text">A premium decorative finish that brings elegance and luxury to interior spaces.</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="project-three__item">
                                                <span class="project-three__item__subtitle">interior</span>
                                                <h5 class="project-three__item__title">3D Wall Panels</h5>
                                                <p class="project-three__item__text">Stylish and modern wall designs that add depth and sophistication to living rooms, offices, and bedrooms.</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="project-three__item">
                                                <span class="project-three__item__subtitle">interior</span>
                                                <h5 class="project-three__item__title">Wallpapers & Window Blinds</h5>
                                                <p class="project-three__item__text">Decorative coverings and fittings that complete your interior design with comfort and elegance.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="project-three__right">
                            <div class="project-three__thumb">
                                <div class="project-three__thumb__carousel wallox-slick__custome-counter" data-slick-options='{
							"slidesToShow": 1,
							"slidesToScroll": 1,
							"autoplay": true,
							"centerMode": true,
							"asNavFor": ".project-three__carousel",
							"focusOnSelect": true,
							"dots": false,
							"centerPadding": 0,
							"arrows": false
							}'>
                                    <div class="item">
                                        <div class="project-three__thumb__item">
                                            <img src="assets/images/resources/work1.png" alt="iziechem">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="project-three__thumb__item">
                                            <img src="assets/images/resources/work5.png" alt="iziechem">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="project-three__thumb__item">
                                            <img src="assets/images/resources/work6.png" alt="iziechem">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="project-three__thumb__item">
                                            <img src="assets/images/resources/work4.png" alt="iziechem">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="project-three__thumb__item">
                                            <img src="assets/images/resources/work3.png" alt="iziechem">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-three__element">
                <img src="assets/images/shapes/angle-1-3.png" alt>
            </div>
            <div class="project-three__element-two">
                <img src="assets/images/shapes/angle-1-2.png" alt>
            </div>
        </section>

            @include('testimonials')

        <div class="instagram-one instagram-one--three">
            <div class="container-fluid">
                <div class="instagram-one__inner">
                    <div class="row gutter-y-30">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="instagram-one__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                <img src="assets/images/instagram/instagram-1-1.jpg" alt="iziechem">
                                <div class="instagram-one__item__icon">
                                    <a href="https://www.instagram.com/iziechem/reel/DByBhr-oUcv/"><span class="icon-social-media"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="instagram-one__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <img src="assets/images/instagram/instagram-1-2.jpg" alt="iziechem">
                                <div class="instagram-one__item__icon">
                                    <a href="https://www.instagram.com/iziechem/reel/DByRZcCIt-R/"><span class="icon-social-media"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="instagram-one__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                <img src="assets/images/instagram/instagram-1-3.jpg" alt="iziechem">
                                <div class="instagram-one__item__icon">
                                    <a href="https://www.instagram.com/iziechem/reel/DAi8VbjIJmb/"><span class="icon-social-media"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="instagram-one__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>
                                <img src="assets/images/instagram/instagram-1-4.jpg" alt="iziechem">
                                <div class="instagram-one__item__icon">
                                    <a href="https://www.instagram.com/iziechem/reel/DAi8GMToBCp/"><span class="icon-social-media"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="instagram-one__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='900ms'>
                                <img src="assets/images/instagram/instagram-1-5.jpg" alt="iziechem">
                                <div class="instagram-one__item__icon">
                                    <a href="https://www.instagram.com/iziechem/reel/DAYTXy-o4pE/"><span class="icon-social-media"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="instagram-one__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1100ms'>
                                <img src="assets/images/instagram/instagram-1-6.jpg" alt="iziechem">
                                <div class="instagram-one__item__icon">
                                    <a href="https://www.instagram.com/iziechem/reel/DAYSkXUoBf_/"><span class="icon-social-media"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="team-one team-one--three">
            <div class="team-one__bg" style="background-image: url(assets/images/backgrounds/team-bg.png);"></div>
            <div class="container">
                <div class="team-one__top">
                    <div class="row align-items-center justify-content-between gutter-y-30">
                        <div class="col-lg-8">
                            <div class="sec-title">
                                <div class="d-flex align-items-center justify-content-start">
                                    <img class="sec-title__image" src="assets/images/shapes/sec-title-s-3.png" alt="iziechem">
                                    <h6 class="sec-title__tagline bw-split-in-right">our team</h6>
                                </div>
                                <h3 class="sec-title__title bw-split-in-up">Meet the Expert Team</h3>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-one__top__btn wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <a href="team-details.html" class="wallox-btn wallox-btn--border">view all team</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-lg-4">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <div class="team-card__thumb">
                                <img src="assets/images/team/team1.png" alt="iziechem">
                            </div>
                            <div class="team-card__content">
                                <h4 class="team-card__content__title"><a href="team-details.html">Joshua Israel Omeiza</a></h4>
                                <span class="team-card__content__dec">CEO & Fonuder</span>
                            </div>
                            <div class="team-card__social">
                                <a href="https://www.facebook.com/profile.php?id=61552372633966&mibextid=LQQJ4d"><i class="icon-facebook1" aria-hidden="true"></i><span class="sr-only">Facebook</span></a>
                                <a href="https://www.instagram.com/iziechem?utm_source=ig_web_button_share_sheet&igsh=ODdmZWVhMTFiMw=="><i class="icon-social-media" aria-hidden="true"></i><span class="sr-only">Instagram</span></a>
                                <a href="https://wa.me/message/X46G7RHDRAFSF1"><i class="bi bi-whatsapp" aria-hidden="true"></i><span class="sr-only">Tiktok</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <div class="team-card__thumb">
                                <img src="assets/images/team/team2.png" alt="iziechem">
                            </div>
                            <div class="team-card__content">
                                <h4 class="team-card__content__title"><a href="team-details.html">Joshua Daniel Itopa</a></h4>
                                <span class="team-card__content__dec">Manager</span>
                            </div>
                            <div class="team-card__social">
                                <a href="#!"><i class="icon-facebook1" aria-hidden="true"></i></a>
                                <a href="http://www.tiktok.com/@dannybrain03"><i class="bi bi-tiktok" aria-hidden="true"></i><span class="sr-only">Tiktok</span></a>
                                <a href="#!"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <div class="team-card__thumb">
                                <img src="assets/images/team/team3.png" alt="iziechem">
                            </div>
                            <div class="team-card__content">
                                <h4 class="team-card__content__title"><a href="team-details.html">Owoyomi Rosemary (Bella)</a></h4>
                                <span class="team-card__content__dec">Apprentice</span>
                            </div>
                            <div class="team-card__social">
                                <a href="#!"><i class="icon-facebook1" aria-hidden="true"></i></a>
                                <a href="#!"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                <a href="https://wa.me/2349028927900"><i class="bi bi-whatsapp" aria-hidden="true"></i><span class="sr-only">Tiktok</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-three blog-three--three">
            <div class="blog-three__bg" style="background-image: url(assets/images/shapes/blog-bg-shape.png);"></div>
            <div class="container">
                <div class="sec-title text-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="sec-title__image" src="assets/images/shapes/sec-title-s-1.png" alt="iziechem">
                        <h6 class="sec-title__tagline bw-split-in-right">latest blog</h6>
                    </div>
                    <h3 class="sec-title__title bw-split-in-up">Our Latest Blog & News</h3>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-6">
                        <div class="blog-three__left">
                            <div class="blog-three__left__bg" style="background-image: url(assets/images/shapes/blog-card-bg.png);"></div>
                            <div class="blog-three__inner wow fadeInLeft" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="blog-three__card__item">
                                    <div class="blog-card__date"><span class="blog-card__date__day">20</span> <span class="blog-card__date__month">June</span></div>
                                    <h3 class="blog-card__title"><a href="blog-details-right.html">cupidatat nonproident, sunt in culpa qui officia deserunt</a></h3>
                                    <ul class="blog-card__meta list-unstyled">
                                        <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-user"></i>by Admin</a></li>
                                        <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-comments"></i>2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="blog-three__card__item">
                                    <div class="blog-card__date"><span class="blog-card__date__day">20</span> <span class="blog-card__date__month">June</span></div>
                                    <h3 class="blog-card__title"><a href="blog-details-right.html">cupidatat nonproident, sunt in culpa qui officia deserunt</a></h3>
                                    <ul class="blog-card__meta list-unstyled">
                                        <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-user"></i>by Admin</a></li>
                                        <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-comments"></i>2 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-three__card__item__thumb wow fadeInRight" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <img src="assets/images/blog/blog-l-2-1.jpg" alt="blog image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <div class="blog-three__item__bg" style="background-image: url(assets/images/shapes/blog-card-bg-1-1.png);"></div>
                            <div class="blog-three__item__image">
                                <img src="assets/images/blog/blog-2-1.jpg" alt="iziechem">
                                <a href="blog-details-right.html" class="blog-three__item__image__item">
                                    <div class="blog-three__item__hover__box blog-three__item__hover__box--1"></div>
                                    <div class="blog-three__item__hover__box blog-three__item__hover__box--2"></div>
                                    <div class="blog-three__item__hover__box blog-three__item__hover__box--3"></div>
                                    <div class="blog-three__item__hover__box blog-three__item__hover__box--4"></div>
                                </a>
                                <div class="blog-three__item__date"><span class="blog-three__item__date__day">20</span> <span class="blog-three__item__date__month">June</span></div>
                            </div>
                            <div class="blog-three__item__content">
                                <h3 class="blog-three__item__title"><a href="blog-details-right.html">cupidatat nonproident, sunt in culpa qui officia deserunt</a></h3>
                                <ul class="blog-three__item__meta list-unstyled">
                                    <li class="blog-three__item__meta__item"><a href="blog-details.html"><i class="icon-user"></i>by Admin</a></li>
                                    <li class="blog-three__item__meta__item"><a href="blog-details.html"><i class="icon-comments"></i>2 Comments</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="client-carousel">
                <div class="container">
                    <div class="client-carousel__inner">
                        <div class="row align-items-center">
                            <div class="cpl-lg-3 col-md-4">
                                <div class="client-carousel__left">
                                    <h2 class="client-carousel__text">Trusted By <br> Top Companies <a href="about.html"><i class="icon-up-right-arrow1"></i></a></h2>
                                </div>
                            </div>
                            <div class="cpl-lg-9 col-md-8">
                                <div class="client-carousel__one wallox-owl__carousel owl-theme owl-carousel" data-owl-options='{
                        "items": 5,
                        "margin": 35,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": false,
                        "nav":false,
                        "dots":false,
                        "responsive":{
                            "0":{
                                "items":1,
                                "margin": 0
                            },
                            "360":{
                                "items":2,
                                "margin": 30
                            },
                            "575":{
                                "items":3,
                                "margin": 30
                            },
                            "768":{
                                "items":4,
                                "margin": 40
                            },
                            "992":{
                                "items": 5,
                                "margin": 40
                            },
                            "1199":{
                                "items": 6,
                                "margin": 40
                            }
                        }
                        }'>
                                    <div class="client-carousel__one__item">
                                        <img class="client-carousel__one__image" src="assets/images/brand/cac1.png" alt="iziechem">
                                        <img class="client-carousel__one__hover-image" src="assets/images/brand/cac1.png" alt="iziechem">
                                    </div>
                                    <div class="client-carousel__one__item">
                                        <img class="client-carousel__one__image" src="assets/images/brand/brand-1-2.png" alt="iziechem">
                                        <img class="client-carousel__one__hover-image" src="assets/images/brand/brand-hover-1-2.png" alt="iziechem">
                                    </div>
                                    <div class="client-carousel__one__item">
                                        <img class="client-carousel__one__image" src="assets/images/brand/brand-1-3.png" alt="iziechem">
                                        <img class="client-carousel__one__hover-image" src="assets/images/brand/brand-hover-1-3.png" alt="iziechem">
                                    </div>
                                    <div class="client-carousel__one__item">
                                        <img class="client-carousel__one__image" src="assets/images/brand/brand-1-4.png" alt="iziechem">
                                        <img class="client-carousel__one__hover-image" src="assets/images/brand/brand-hover-1-4.png" alt="iziechem">
                                    </div>
                                    <div class="client-carousel__one__item">
                                        <img class="client-carousel__one__image" src="assets/images/brand/brand-1-5.png" alt="iziechem">
                                        <img class="client-carousel__one__hover-image" src="assets/images/brand/brand-hover-1-5.png" alt="iziechem">
                                    </div>
                                    <div class="client-carousel__one__item">
                                        <img class="client-carousel__one__image" src="assets/images/brand/brand-1-6.png" alt="iziechem">
                                        <img class="client-carousel__one__hover-image" src="assets/images/brand/brand-hover-1-6.png" alt="iziechem">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection