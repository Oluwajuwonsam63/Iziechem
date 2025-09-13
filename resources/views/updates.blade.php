@extends('layouts.header')
@section('content')

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">Updates</h2>
                <div class="wallox-breadcrumb">
                    <ul class="wallox-breadcrumb__list list-unstyled">
                        <li><a href="index.html"><i class="icon-home"></i> Home</a></li>
                        <li><span>Blog grid</span></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="blog-one blog-one--page">
            <div class="container">
                <div class="row gutter-y-60">

                    @include('includes.leftsidebar')
                    
                    <div class="col-lg-8">
                        <div class="row gutter-y-30">
                            @foreach($posts->sortByDesc('created_at') as $post)
                                <div class="col-md-6">
                                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                        <div class="blog-card__image">
                                            <img src="assets/images/blog/blog-1-1.jpg" alt="cupidatat nonproident, sunt in culpa qui officia deserunt">
                                            <a href="blog-details-right.html" class="blog-card__image__item">
                                                <div class="blog-card__hover__box blog-card__hover__box--1"></div>
                                                <div class="blog-card__hover__box blog-card__hover__box--2"></div>
                                                <div class="blog-card__hover__box blog-card__hover__box--3"></div>
                                                <div class="blog-card__hover__box blog-card__hover__box--4"></div>
                                            </a>
                                        </div>
                                        <div class="blog-card__content">
                                            <h3 class="blog-card__title"><a href="blog-details-right.html">{{$post->title}}</a></h3>
                                            <p style="line-height: 1;">{{substr($post->description, 0, 100)}}... <a href="{{route('show_posts', $post->id)}}">more</a></p>
                                            <ul class="blog-card__meta list-unstyled">
                                                <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-user"></i>by {{$post->user->name}}</a></li>
                                                <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-comments"></i>2 Comments</a></li>
                                            </ul>
                                            <div class="blog-card__date d-flex" style="width: 120px;"><span class="blog-card__date__day">{{$post->created_at->format('d')}}</span> <span class="blog-card__date__month">{{$post->created_at->format('M')}}</span> <span class="blog-card__date__day">{{$post->created_at->format('Y')}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- <div class="col-md-6">
                                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                                    <div class="blog-card__image">
                                        <img src="assets/images/blog/blog-1-2.jpg" alt="cupidatat nonproident, sunt in culpa qui officia deserunt">
                                        <a href="blog-details-right.html" class="blog-card__image__item">
                                            <div class="blog-card__hover__box blog-card__hover__box--1"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--2"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--3"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--4"></div>
                                        </a>
                                    </div>
                                    <div class="blog-card__content">
                                        <h3 class="blog-card__title"><a href="blog-details-right.html">cupidatat nonproident, sunt in culpa qui officia deserunt</a></h3>
                                        <ul class="blog-card__meta list-unstyled">
                                            <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-user"></i>by Admin</a></li>
                                            <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-comments"></i>2 Comments</a></li>
                                        </ul>
                                        <div class="blog-card__date"><span class="blog-card__date__day">20</span> <span class="blog-card__date__month">June</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                    <div class="blog-card__image">
                                        <img src="assets/images/blog/blog-1-3.jpg" alt="cupidatat nonproident, sunt in culpa qui officia deserunt">
                                        <a href="blog-details-right.html" class="blog-card__image__item">
                                            <div class="blog-card__hover__box blog-card__hover__box--1"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--2"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--3"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--4"></div>
                                        </a>
                                    </div>
                                    <div class="blog-card__content">
                                        <h3 class="blog-card__title"><a href="blog-details-right.html">cupidatat nonproident, sunt in culpa qui officia deserunt</a></h3>
                                        <ul class="blog-card__meta list-unstyled">
                                            <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-user"></i>by Admin</a></li>
                                            <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-comments"></i>2 Comments</a></li>
                                        </ul>
                                        <div class="blog-card__date"><span class="blog-card__date__day">20</span> <span class="blog-card__date__month">June</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                                    <div class="blog-card__image">
                                        <img src="assets/images/blog/blog-1-4.jpg" alt="cupidatat nonproident, sunt in culpa qui officia deserunt">
                                        <a href="blog-details-right.html" class="blog-card__image__item">
                                            <div class="blog-card__hover__box blog-card__hover__box--1"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--2"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--3"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--4"></div>
                                        </a>
                                    </div>
                                    <div class="blog-card__content">
                                        <h3 class="blog-card__title"><a href="blog-details-right.html">cupidatat nonproident, sunt in culpa qui officia deserunt</a></h3>
                                        <ul class="blog-card__meta list-unstyled">
                                            <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-user"></i>by Admin</a></li>
                                            <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-comments"></i>2 Comments</a></li>
                                        </ul>
                                        <div class="blog-card__date"><span class="blog-card__date__day">20</span> <span class="blog-card__date__month">June</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                    <div class="blog-card__image">
                                        <img src="assets/images/blog/blog-1-5.jpg" alt="cupidatat nonproident, sunt in culpa qui officia deserunt">
                                        <a href="blog-details-right.html" class="blog-card__image__item">
                                            <div class="blog-card__hover__box blog-card__hover__box--1"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--2"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--3"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--4"></div>
                                        </a>
                                    </div>
                                    <div class="blog-card__content">
                                        <h3 class="blog-card__title"><a href="blog-details-right.html">cupidatat nonproident, sunt in culpa qui officia deserunt</a></h3>
                                        <ul class="blog-card__meta list-unstyled">
                                            <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-user"></i>by Admin</a></li>
                                            <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-comments"></i>2 Comments</a></li>
                                        </ul>
                                        <div class="blog-card__date"><span class="blog-card__date__day">20</span> <span class="blog-card__date__month">June</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='600ms'>
                                    <div class="blog-card__image">
                                        <img src="assets/images/blog/blog-1-6.jpg" alt="cupidatat nonproident, sunt in culpa qui officia deserunt">
                                        <a href="blog-details-right.html" class="blog-card__image__item">
                                            <div class="blog-card__hover__box blog-card__hover__box--1"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--2"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--3"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--4"></div>
                                        </a>
                                    </div>
                                    <div class="blog-card__content">
                                        <h3 class="blog-card__title"><a href="blog-details-right.html">cupidatat nonproident, sunt in culpa qui officia deserunt</a></h3>
                                        <ul class="blog-card__meta list-unstyled">
                                            <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-user"></i>by Admin</a></li>
                                            <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-comments"></i>2 Comments</a></li>
                                        </ul>
                                        <div class="blog-card__date"><span class="blog-card__date__day">20</span> <span class="blog-card__date__month">June</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>
                                    <div class="blog-card__image">
                                        <img src="assets/images/blog/blog-1-7.jpg" alt="cupidatat nonproident, sunt in culpa qui officia deserunt">
                                        <a href="blog-details-right.html" class="blog-card__image__item">
                                            <div class="blog-card__hover__box blog-card__hover__box--1"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--2"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--3"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--4"></div>
                                        </a>
                                    </div>
                                    <div class="blog-card__content">
                                        <h3 class="blog-card__title"><a href="blog-details-right.html">cupidatat nonproident, sunt in culpa qui officia deserunt</a></h3>
                                        <ul class="blog-card__meta list-unstyled">
                                            <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-user"></i>by Admin</a></li>
                                            <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-comments"></i>2 Comments</a></li>
                                        </ul>
                                        <div class="blog-card__date"><span class="blog-card__date__day">20</span> <span class="blog-card__date__month">June</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='800ms'>
                                    <div class="blog-card__image">
                                        <img src="assets/images/blog/blog-1-8.jpg" alt="cupidatat nonproident, sunt in culpa qui officia deserunt">
                                        <a href="blog-details-right.html" class="blog-card__image__item">
                                            <div class="blog-card__hover__box blog-card__hover__box--1"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--2"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--3"></div>
                                            <div class="blog-card__hover__box blog-card__hover__box--4"></div>
                                        </a>
                                    </div>
                                    <div class="blog-card__content">
                                        <h3 class="blog-card__title"><a href="blog-details-right.html">cupidatat nonproident, sunt in culpa qui officia deserunt</a></h3>
                                        <ul class="blog-card__meta list-unstyled">
                                            <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-user"></i>by Admin</a></li>
                                            <li class="blog-card__meta__item"><a href="blog-details.html"><i class="icon-comments"></i>2 Comments</a></li>
                                        </ul>
                                        <div class="blog-card__date"><span class="blog-card__date__day">20</span> <span class="blog-card__date__month">June</span></div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- /.blog-one blog-one--page -->

@endsection