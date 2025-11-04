@extends('layouts.header')
@section('content')

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">Dashboard</h2>
                <div class="wallox-breadcrumb">
                    <ul class="wallox-breadcrumb__list list-unstyled">
                        <li><a href="index.html"><i class="icon-home"></i> Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="blog-one blog-one--page">
            <div class="container">
                <div class="row gutter-y-60">

                    @if(auth()->user()->is_admin ==1)
                        @include('includes.leftsidebar')
                    @elseif(auth()->user()->is_admin == 0)
                        @include('index')
                    @endif

        </section>
        <!-- /.blog-one blog-one--page --> 

@endsection