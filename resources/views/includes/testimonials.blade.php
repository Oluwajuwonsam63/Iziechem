        <section class="testimonials-three">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="sec-title__image" src="assets/images/favicons/logo2.png" alt="iziechem">
                        <h6 class="sec-title__tagline bw-split-in-right">our testimonials</h6>
                    </div>
                    <h3 class="sec-title__title bw-split-in-up">What They Talked About Iziechem</h3>
                </div>
                <div class="testimonials-three__inner wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                    <div class="testimonials-three__inner__bg" style="background-image: url(assets/images/backgrounds/testi-bg.jpg);"></div>
                    
                        <div class="row align-items-center gutter-y-30">
                            <div class="col-xl-7">
                                <div class="testimonials-three__carousel__left">
                                    <div class="testimonials-three__carousel wallox-slick__carousel wallox-slick__carousel--custom-nav slick" data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "autoplay": true,
                                    "autoplaySpeed": 4000,
                                    "speed": 2000,
                                    "asNavFor": ".testimonials-three__thumb__carousel",
                                    "infinite": true,
                                    "arrows": false,
                                    "dots": false
                                }'>
                                        @foreach($testifiers as $testifier)
                                        <div class="testimonials-three__item">
                                            <div class="testimonials-three__item__quite">
                                                <img src="assets/images/shapes/quite-1-1.png" alt>
                                            </div>
                                            <p class="testimonials-three__item__text">{{$testifier->message}}</p>
                                            <div class="testimonials-three__item__author">
                                                <h4 class="testimonials-three__item__name">{{$testifier->name}}</h4>
                                                <span class="testimonials-three__item__dec">{{$testifier->position ?? 'Client'}}</span>
                                                <div class="testimonials-three__item__star">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="testimonials-three__carousel__right">
                                    <div class="testimonials-three__thumb__carousel wallox-slick__carousel--with-counter wallox-slick__carousel slick" data-slick-options='{
                                "slidesToShow": 1,
                                "slidesToScroll": 1,
                                "fade": true,
                                "autoplay": true,
                                "autoplaySpeed": 4000,
                                "speed": 2000,
                                "asNavFor": ".testimonials-three__carousel",
                                "infinite": true,
                                "prevArrow": "<button class=\"slick-button slick-button--prev\"><span class=\"icon-angle-right\"></span></button>",
                                "nextArrow": "<button class=\"slick-button slick-button--next\"><span class=\"icon-angle-left\"></span></button>",
                                "arrows": true,
                                "dots": false
                            }'>
                                        @foreach($testifiers as $testifier)
                                        <div class="testimonials-three__thumb__item">
                                            <img src="{{asset('public/image/testifiers/'. $testifier->image)}}" alt="{{$testifier->name}}" style="border-radius: 50%; width: 100%; height: 100%; object-fit: cover;">
                                            <!-- <img src="assets/images/resources/test1.png" alt="{{$testifier->name}}"> -->
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <div class="testimonials-three__left">
                        <img src="assets/images/shapes/fita-1-1.png" alt>
                    </div>
                    <div class="testimonials-three__right">
                        <img src="assets/images/shapes/fita-1-2.png" alt>
                    </div>
                </div>
            </div>
            <div class="testimonials-three__element">
                <img src="assets/images/shapes/hero-1-2.png" alt>
            </div>
            <div class="testimonials-three__element-two">
                <img src="assets/images/shapes/asterisk-2.png" alt>
            </div>
        </section>