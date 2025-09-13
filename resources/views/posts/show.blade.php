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

    <div class="container" style="margin-bottom: 20px;">
        <div class="row">
            <div class="card card-success">
                <div class="card-header">
                    {{$post->title}}
                </div>
                <div class="card-body">
                    {{$post->description}}
                </div>
            </div>
        </div>
    </div>
@endSection
