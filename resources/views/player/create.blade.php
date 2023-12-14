@extends('welcome')

@section('content')
<h1>Create Player</h1>
<div class="col-md-5 mx-auto">
    <form action="{{url('/player/create')}}" method="POST">
        @csrf
        <div class="form-group mt-2 ">
            <label for="team_id"> Select Team</label>
            <select name="team_id" id="team_id" class="form-select" required>
                <option hidden = "true">Select Team</option>
                <option selected disabled> Select Team</option>
                @foreach ($teams as $teamId => $team )
                <option value="{{$teamId}}">{{$team}}</option>
                @endforeach
            </select>
            @error('team_id')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="name"> Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
            @error('name')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="ingame_name"> IGN</label>
            <input type="text" name="ingame_name" id="ingame_name" class="form-control" required>
            @error('ingame_name')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="rank"> Rank</label>
            <input type="text" name="rank" id="rank" class="form-control" required>
            @error('rank')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="role"> Role</label>
            <input type="text" name="role" id="role" class="form-control" required>
            @error('role')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
            <button class="btn btn-primary"> Add Player</button>
        </div>
    </form>

</div>
</div>
@endsection
