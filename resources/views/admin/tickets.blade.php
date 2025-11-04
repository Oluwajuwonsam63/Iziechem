@extends('layouts.header')

@section('content')
<div class="container mt-5">
  <h3>Support Tickets</h3>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>User</th>
        <th>Message</th>
        <th>Status</th>
        <th>Created</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tickets as $ticket)
        <tr>
          <td>{{ $ticket->id }}</td>
          <td>{{ $ticket->user->name ?? 'Guest' }}</td>
          <td>{{ $ticket->message }}</td>
          <td>{{ ucfirst($ticket->status) }}</td>
          <td>{{ $ticket->created_at->diffForHumans() }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
