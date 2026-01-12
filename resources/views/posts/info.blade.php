@extends('layouts.header')

@section('content')

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }});"></div>
            <div class="container">
                <h2 class="page-header__title">{{$post->title}}</h2>
                <div class="wallox-breadcrumb">
                    <ul class="wallox-breadcrumb__list list-unstyled">
                        <li><a href="{{url('/')}}"><i class="icon-home"></i> Home</a></li>
                        <li><a href="{{url('/updates')}}"><span>update</span></a></li>
                        <li><span>{{$post->title}}</span></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="blog-one blog-one--page">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-8">
                        <div class="blog-details">
                            <div class="blog-card-two">
                                <div class="blog-card-two__image wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                    <div class="blog-card-two__image__item">
                                        <img src="{{asset('public/image/posts/'. $post->image)}}" alt="" style="height: 350px; width: 100%; border-radius:20px; object-fit: cover;">
                                    </div>
                                    <div class="blog-card-two__date d-flex"><span class="blog-card-two__date__day">{{$post->created_at->format('d')}}</span> <span class="blog-card-two__date__month">{{$post->created_at->format('M')}}</span> <span class="blog-card-two__date__day">{{$post->created_at->format('Y')}}</span></div>
                                </div>
                                <div class="blog-card-two__content blog-card-two__content--two">
                                    <ul class="blog-card-two__meta list-unstyled">
                                        <li class="blog-card-two__meta__item"><a href="#!"><i class="icon-user"></i>{{explode(' ', $post->user->name)[0]}} {{explode(' ', $post->user->name)[2]}}</a></li>
                                        <li class="blog-card-two__meta__item"><a href="#!"><i class="icon-comments"></i>2 Comments</a></li>
                                    </ul>
                                    <h3 class="blog-card-two__title wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>{{$post->title}}</h3>
                                    <p class="blog-card-two__text wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p class="blog-card-two__text wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Aelltes port lacus quis enim var sed efficitur</p>
                                   
                                    {{-- <div class="blog-details__feature__thumb">
                                        <div class="row gutter-y-30">
                                            <div class="col-sm-6">
                                                <div class="blog-details__feature__thumb__item real-image">
                                                    <img src="{{ asset('assets/images/blog/blog-s-project-1-1.jpg') }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="blog-details__feature__thumb__item real-image">
                                                    <img src="{{ asset('assets/images/blog/blog-s-project-1-2.jpg') }}" alt="blog thumb">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="blog-card-two__text wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                    <ul class="blog-details__list wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                        <li class="blog-details__list__item">Another area of AI that holds great promise is robotics, which involves developing </li>
                                        <li class="blog-details__list__item">AI also has the potential to improve healthcare, by enabling more accurate diagnosis and </li>
                                        <li class="blog-details__list__item">However, there are also challenges associated with the development and deployment </li>
                                    </ul> --}}
                                </div>
                            </div>

                            <div class="blog-details__meta wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                <div class="blog-details__cetagoris">
                                    <h4 class="blog-details__cetagoris__title">categories:</h4>
                                    @foreach($allcategories as $cat)
                                    <div class="sidebar__cetagoris">
                                        <a href="{{ route('info_category', $cat->id) }}">{{$cat->name}}</a>
                                        {{-- <a href="blog-list-right.html">business loan</a> --}}
                                    </div>
                                    @endforeach
                                </div>
                                <div class="blog-details__tags">
                                    <h4 class="blog-details__tags__title">tags:</h4>
                                    @foreach ($allposts->take(2) as  $post)
                                    <div class="sidebar__tags">
                                        <a href="{{route('info_posts', $post->id)}}">{{$post->title}}</a>
                                        <span>,</span>
                                        {{-- <a href="blog-list-right.html">home loan</a> --}}
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{-- <div class="comments-one">
                            <h3 class="comments-one__title wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>02 Comments</h3>
                            <ul class="list-unstyled comments-one__list">
                                <li class="comments-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                    <div class="comments-one__card__image">
                                        <img src="{{ asset('assets/images/blog/blog-comment-1-1.jpg') }}">
                                    </div>
                                    <div class="comments-one__card__content">
                                        <div class="comments-one__card__top">
                                            <div class="comments-one__card__info">
                                                <h3 class="comments-one__card__title">Layerdrops</h3>
                                                <p class="comments-one__card__date">March 20, 2023 at 2:37 PM</p>
                                            </div>
                                            <div class="comments-one__card__btn">
                                                <a href="blog-details-right.html" class="wallox-btn wallox-btn--base comments-one__card__reply"><span>Reply</span></a>
                                            </div>
                                        </div>
                                        <p class="comments-one__card__text">Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var</p>
                                    </div>
                                </li>
                                <li class="comments-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                    <div class="comments-one__card__image">
                                        <img src="{{ asset('assets/images/blog/blog-comment-1-1.jpg') }}" alt="wallox">
                                    </div>
                                    <div class="comments-one__card__content">
                                        <div class="comments-one__card__top">
                                            <div class="comments-one__card__info">
                                                <h3 class="comments-one__card__title">Layerdrops</h3>
                                                <p class="comments-one__card__date">March 20, 2023 at 2:37 PM</p>
                                            </div>
                                            <div class="comments-one__card__btn">
                                                <a href="blog-details-right.html" class="wallox-btn wallox-btn--base comments-one__card__reply"><span>Reply</span></a>
                                            </div>
                                        </div>
                                        <p class="comments-one__card__text">Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="comments-form wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                            <h3 class="comments-form__title">Leave a Comment</h3>
                            <form class="comments-form__form contact-form-validated form-one">
                                <div class="form-one__group">
                                    <div class="form-one__control">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div>
                                    <div class="form-one__control">
                                        <input type="email" name="email" placeholder="your email">
                                    </div>
                                    <div class="form-one__control form-one__control--full">
                                        <textarea name="message" placeholder="Write Message . ."></textarea>
                                    </div>
                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit" class="wallox-btn wallox-btn--base">post comment</button>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div> --}}
                    </div>
                    @include('includes.leftsidebar')
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-one blog-one--page -->

@endsection