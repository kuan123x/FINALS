@extends('welcome')

@section('content')
<h1>Create Hero</h1>
<div class="col-md-5 mx-auto">
    <form action="{{url('/hero/create')}}" method="POST">
        @csrf
        <div class="form-group mt-2 ">
            <label for="player_id"> Select Player</label>
            <select name="player_id" id="player_id" class="form-select" required>
                <option hidden = "true">Select Player</option>
                <option selected disabled> Select Player</option>
                @foreach ($players as $playerId => $player )
                <option value="{{$playerId}}">{{$player}}</option>
                @endforeach
            </select>
            @error('player_id')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="hero_name"> Hero Name</label>
            <input type="text" name="hero_name" id="hero_name" class="form-control" required>
            @error('hero_name')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="hero_type"> Hero type</label>
            <input type="text" name="hero_type" id="hero_type" class="form-control" required>
            @error('hero_type')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
            <button class="btn btn-primary"> Add Hero</button>
        </div>
    </form>

</div>
</div>
@endsection
