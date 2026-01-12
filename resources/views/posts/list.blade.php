@extends('layouts.header')

@section('content')

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="category-heading">
                    <h4>{{$categories->name}}</h4>
                </div>

                @forelse ($posts as $post)
                <div class="card card-shadow">
                    <div class="card-body">
                        <a href="#!"><h2>{{ $post->title }}</h2></a>
                        <h6>
                            Posted On {{$post->created_at->format('d-m-Y')}}
                            <span class="ms-3">Posted by {{$post->user->name}}</span>
                        </h6>
                    </div>
                </div>
                <hr>
                @empty
                <div class="card card-shadow">
                    <div class="card-body">
                        <h2>No Post Avaliale</h2>
                    </div>
                </div>
                @endforelse
            </div>
            <div class="col-md-3">
                <div class="border p-2">
                    <h4>Advertistig Area</h4> 
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection