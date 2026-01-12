@extends('layouts.header')

@section('content')

<section class="blog-one blog-one--page">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-8">
                <div class="row gutter-y-30">
                    <h2>No results found for "{{ $query }}"</h2>
                    <p>Sorry, we couldn't find any results matching your search query</p>
                </div>
            </div><!-- /.col-lg-8 -->
            @include('includes.leftsidebar')
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

@endsection