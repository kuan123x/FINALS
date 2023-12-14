@extends('welcome')

@section('content')
@if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
    <a href="{{url('/player/create')}}" class="btn btn-primary me-md-2" type="button">
        Add new player
    </button>
    </a>
  </div>
<table class="table table-bordered table-striped table">
    <thead>
        <th>Team</th>
        <th>Name</th>
        <th>IGN</th>
        <th>Rank</th>
        <th>Role</th>
    </thead>
    <tbody>
        @foreach($players as $player)
        <tr>
            <td>{{$player->team->team_name }}</td>
            <td>{{$player->name}}</td>
            <td>{{$player->ingame_name }}</td>
            <td>{{$player->rank }}</td>
            <td>{{$player->role }}</td>
            <td class="text-center">
                <a href="{{url('/players/'.$player->id)}}" class = "btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                      </svg>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
