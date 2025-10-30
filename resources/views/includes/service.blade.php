     
            <div class="container">
                <div class="service-three__top">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="sec-title">
                                <div class="d-flex align-items-center justify-content-start">
                                    <img class="sec-title__image" src="assets/images/favicons/logo2.png" alt="iziechem">
                                    <h6 class="sec-title__tagline bw-split-in-right">our best services</h6>
                                </div>
                                <h3 class="sec-title__title bw-split-in-up">Services We’re Offering</h3>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-three__top__btn">
                                <a href="{{ url('/service') }}" class="wallox-btn wallox-btn--border">view all Service</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gutter-y-30">
                    @foreach($categories->sortByDesc('created_at') as $cat)
                    <div class="col-lg-6">
                        <div class="service-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="service-three__thumb">
                                <img src="{{asset('public/image/categories/'. $cat->image)}}" alt="{{$cat->name}}" style="height: 340px; width: 100%; object-fit: cover;">
                            </div>
                            <div class="service-three__content">
                                <div class="service-three__content__left">
                                    <span class="service-three__content__number"></span>
                                    <h4 class="service-three__content__title"><a href="{{ route('info_category', $cat->id) }}">{{$cat->name}}</a></h4>
                                </div>
                                <div class="service-three__content__right">
                                    <a href="{{ route('info_category', $cat->id) }}" class="wallox-btn wallox-btn--border">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-6">
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
                    </div> --}}
                </div>
            </div>
