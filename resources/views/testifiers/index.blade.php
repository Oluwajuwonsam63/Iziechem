
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
                    <th>Message</th>
                    <th>Rating</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testifiers->sortByDesc('created_at') as $test)
                    <tr class="table-body">
                        <td>{{$test->user->name}}</td>
                        <td>{{$test->name}}</td>
                        <!-- <td>{{App\Models\User::where('id', $test->user_id)->first()->password}}</td> -->
                        <td><img src="{{asset('public/image/testifiers/'. $test->image)}}" alt="" style="max-width: 50px;"></td>
                        <td style="line-height: 1;">{{substr($test->message, 0, 100)}}... <a href="{{route('show_testifiers', $test->id)}}">more</a></td>
                        <td>{{$test->created_at->format('d M, Y')}}</td>
                        <td class="d-flex flex-column gap-2">
                            <a href="{{route('edit_testifiers', $test->id)}}" class="btn btn-warning">edit</a>
                            <a href="{{route('delete_testifiers', $test->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
