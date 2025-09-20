
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
                <tr class="table-dark">
                    <th>Created By</th>
                    <th>Client Name</th>
                    <th>Image</th>
                    <th>Bio</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams->sortByDesc('created_at') as $team)
                    <tr class="table-body">
                        <td>{{$team->user->name}}</td>
                        <td>{{$team->role}}</td>
                        <td><img src="{{asset('public/image/teams/'. $team->image)}}" alt="" style="max-width: 50px;"></td>
                        <td style="line-height: 1;">{{substr($team->bio, 0, 100)}}... <a href="{{route('show_testifiers', $team->id)}}">more</a></td>
                        <td>{{$team->created_at->format('d M, Y')}}</td>
                        <td class="d-flex flex-column gap-2">
                            <a href="{{route('edit_testifiers', $team->id)}}" class="btn btn-warning">edit</a>
                            <a href="{{route('delete_testifiers', $team->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
