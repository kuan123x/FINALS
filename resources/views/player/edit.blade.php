@extends('welcome')

@section('content')


  <!-- Modal -->
  <div class="modal fade" id="deletePlayerModal" tabindex="-1" aria-labelledby="deletePlayerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deletePlayerModalLabel">Delete Player - {{$player->name}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('players/delete/' .$player->id) }}" method="POST">
            @csrf
            @method('DELETE')

        <div class="modal-body">
         Are you sure to delete this player?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger" >Delete Player</button>

        </div>
    </form>

      </div>
    </div>
  </div>
<h1>Edit Player</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 mx-auto">
            <form action="{{url('/players/'.$player->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mt-2">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$player->name}}" required>
                    @error('name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="ingame_name"> IGN</label>
                    <input type="text" name="ingame_name" class="form-control" value="{{$player->ingame_name}}" >
                    @error('ingame_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="rank"> Rank </label>
                    <input type="text" name="rank" class="form-control" value="{{$player->rank}}" required>
                    @error('rank')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="role"> Role </label>
                    <input type="text" name="role" class="form-control" value="{{$player->role}}" required>
                    @error('role')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">


                    <button class="btn btn-primary me-md-2 mt-2"> Edit Player</button>
                    <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deletePlayerModal">
                        Delete Player
                    </button>


                </div>

            </form>
        </div>
    </div>
</div>
@endsection
