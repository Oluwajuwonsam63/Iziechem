@extends('layouts.header')
@section('content')

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">Updates</h2>
                <div class="wallox-breadcrumb">
                    <ul class="wallox-breadcrumb__list list-unstyled">
                        <li><a href="{{url('/')}}"><i class="icon-home"></i> Home</a></li>
                        <li><span>Update</span></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="blog-one blog-one--page">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-8">
                        <div class="row gutter-y-30">
                            @foreach($posts as $post)
                                <div class="col-md-6">
                                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                        <div class="blog-card__image">
                                            <!-- <img src="assets/images/blog/blog-1-1.jpg" alt="cupidatat nonproident, sunt in culpa qui officia deserunt"> -->
                                            <img src="{{asset('public/image/posts/'.$post->image)}}" alt="" style="height: 250px; width: 100%; object-fit: cover;">
                                            <a href="{{route('info_posts', $post->id)}}" class="blog-card__image__item">
                                                <div class="blog-card__hover__box blog-card__hover__box--1"></div>
                                                <div class="blog-card__hover__box blog-card__hover__box--2"></div>
                                                <div class="blog-card__hover__box blog-card__hover__box--3"></div>
                                                <div class="blog-card__hover__box blog-card__hover__box--4"></div>
                                            </a>
                                        </div>
                                        <div class="blog-card__content">
                                            <h3 class="blog-card__title"><a href="{{route('info_posts', $post->id)}}">{{$post->title}}</a></h3>
                                            <p style="line-height: 1;">{{substr($post->description, 0, 59)}}... <a href="{{route('info_posts', $post->id)}}">more</a></p>
                                            <ul class="blog-card__meta list-unstyled">
                                                <li class="blog-card__meta__item"><a href="#!"><i class="icon-user"></i>{{explode(' ', $post->user->name)[0]}} {{explode(' ', $post->user->name)[2]}}</a></li>
                                                <li class="blog-card__meta__item"><a href="#!"><i class="icon-comments"></i>2 Comments</a></li>
                                            </ul>
                                            <div class="blog-card__date d-flex" style="width: 120px;"><span class="blog-card__date__day">{{$post->created_at->format('d')}}</span> <span class="blog-card__date__month">{{$post->created_at->format('M')}}</span> <span class="blog-card__date__day">{{$post->created_at->format('Y')}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                                    
                            {{ $posts->links() }}

                            {{-- @if(request()->has('query'))
                                @if(isset($posts))
                                    @foreach($posts as $post)
                                    <p class="d-none"> {{ $post->title }} - {{ $post->description }} </p>
                                    @endforeach
                                @else
                                    <p>No Result Found.</p>
                                @endif
                            @endif --}}
                        </div>
                    </div><!-- /.col-lg-8 -->
                    @include('includes.leftsidebar')
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- /.blog-one blog-one--page -->

@endsection