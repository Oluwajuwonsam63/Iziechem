@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if ($contacts)
                        @foreach ($contacts as $contact)
                        <div class="alert alert-success" role="alert">
                            <p>ID:  {{ $contact->id}}</p>
                            <p>SENDER:  {{ $contact->name }}</p>
                            <p>EMAIL:    {{ $contact->email }}</p>
                            <p>SUBJECT: {{ $contact->subject }}</p>
                            <p>MESSAGE: {{ $contact->message }}</p>
                            <p>DATE: {{$contact->created_at->diffForHumans()}}</p>
                        </div>
                        <hr>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
