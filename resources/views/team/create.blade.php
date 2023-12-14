@extends('welcome')

@section('content')
<h1>Create Team</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 mx-auto">
            <form action="{{url('/team/create')}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="team_name"> Team Name</label>
                    <input type="text" name="team_name" class="form-control" required>
                    @error('team_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="trophies"> Trophies</label>
                    <input type="text" name="trophies" class="form-control" required>
                    @error('trophies')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="description"> Description </label>
                    <input type="text" name="description" class="form-control" required>
                    @error('description')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary"> Add Team</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
