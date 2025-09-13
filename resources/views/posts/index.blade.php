@extends('layouts.header')
<!-- <head>
    <style>
        tr{
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head> -->
@section('content')

        @include('includes.flash')
    <div class="container" style="margin-top: 20px; margin-bottom: 20px;">

        <table class="table">
        <thead>
            <th>
                <tr class="table-dark">
                    <td>Created By</td>
                    <td>Category</td>
                    <td>Title</td>
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

        @foreach($posts->sortByDesc('created_at') as $post)
            <tr class="table-body">
            <td>{{$post->user->name}}</td>
            <td>{{$post->category->name}}</td>
            <!-- <td>{{App\Models\User::where('id', $post->user_id)->first()->password}}</td> -->
            <td>{{$post->title}}</td>
            <td>{{$post->keywords}}</td>
            <td>{{$post->meta_desc}}</td>
            <td><img src="{{asset('public/image/posts/'. $post->image)}}" alt="" style="max-width: 50px;"></td>
            <td style="line-height: 1;">{{substr($post->description, 0, 100)}}... <a href="{{route('show_posts', $post->id)}}">more</a></td>
            <td>{{$post->created_at->format('d M, Y')}}</td>
            <td class="d-flex flex-column gap-2">
                <a href="{{route('edit_posts', $post->id)}}" class="btn btn-warning">edit</a>
                <a href="{{route('delete_posts', $post->id)}}" class="btn btn-danger">Delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection
