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
    <div class="container float">

        <table class="table">
        <thead>
            <th>
                <tr class="table-dark">
                    <td>Created By</td>
                    <td>Client Name</td>
                    <td>Category</td>
                    <td>Keywords</td>
                    <td>Service</td>
                    <td>Image1</td>
                    <td>Image2</td>
                    <td>Description</td>
                    <td>Delivery Date</td>
                    <td>Action</td>
                </tr>
            </th>
        </thead>
        <tbody>

        @foreach($projects->sortByDesc('created_at') as $pro)
            <tr class="table-body">
            <td>{{$pro->user->name}}</td>
            <td>{{$pro->client}}</td>
            <td>{{$pro->category->name}}</td>
            <td>{{$pro->keywords}}</td>
            <td>{{$pro->service}}</td>
            <td><img src="{{asset('public/image/projects/'. $pro->image_1)}}" alt="" style="max-width: 50px;"></td>
            <td><img src="{{asset('public/image/projects/'. $pro->image_2)}}" alt="" style="max-width: 50px;"></td>
            <td style="line-height: 1;">{{substr($pro->description, 0, 100)}}... <a href="{{route('show_projects', $pro->id)}}">more</a></td>
            <td>{{$pro->date->format('d M, Y')}}</td>
            <td class="d-flex flex-column gap-2">
                <a href="{{route('edit_projects', $pro->id)}}" class="btn btn-warning">edit</a>
                <a href="{{route('delete_projects', $pro->id)}}" class="btn btn-danger">Delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection
