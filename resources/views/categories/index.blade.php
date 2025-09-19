@extends('layouts.header')

@section('content')

    <div class="mb-4">
        <a href="{{ url()->previous() }}" class="btn btn-outline-primary d-inline-flex align-items-center gap-2" style="font-weight: 500; margin-left:20px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Back
        </a>
    </div>


        @include('includes.flash')
    <div class="container" style="margin-top: 20px; margin-bottom: 20px;">

        <table class="table">
        <thead>
        <th>
            <tr class="table-dark">
                <td>Created By</td>
                <td>Name</td>
                <td>Keywords</td>
                <td>Meta Desc</td>
                <td>Image</td>
                <td>Description</td>
                <td>Created at</td>
                <td>Action</td>
            </tr>
        </th>
        </thead>
        <tbody>

        @foreach($categories->sortByDesc('created_at') as $cat)
            <tr class="table-body">
            <td>{{$cat->user->name}}</td>
            <!-- <td>{{App\Models\User::where('id', $cat->user_id)->first()->password}}</td> -->
            <td>{{$cat->name}}</td>
            <td>{{$cat->keywords}}</td>
            <td>{{$cat->meta_desc}}</td>
            <td><img src="{{asset('public/image/categories/'. $cat->image)}}" alt="" style="max-width: 50px;"></td>
            <td>{{substr($cat->description, 0, 100)}}... <a href="{{route('show_category', $cat->id)}}">more</a></td>
            <td>{{$cat->created_at->format('d M, Y')}}</td>
            <td class="d-flex flex-column gap-2">
                <a href="{{route('edit_category', $cat->id)}}" class="btn btn-warning">edit</a>
                <a href="{{route('delete_category', $cat->id)}}" class="btn btn-danger">Delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>


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
                </div>
            </div>
        </section>

@endSection
