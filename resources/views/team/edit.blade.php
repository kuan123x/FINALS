@extends('welcome')

@section('content')


  <!-- Modal -->
  <div class="modal fade" id="deleteTeamModal" tabindex="-1" aria-labelledby="deleteTeamModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteTeamModalLabel">Delete Team - {{$team->team_name}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('teams/delete/' .$team->id) }}" method="POST">
            @csrf
            @method('DELETE')

        <div class="modal-body">
         Are you sure to delete this team?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger" >Delete Team</button>

        </div>
    </form>

      </div>
    </div>
  </div>
<h1>Edit Team</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 mx-auto">
            <form action="{{url('/teams/'.$team->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mt-2">
                    <label for="team_name"> Team Name</label>
                    <input type="text" name="team_name" class="form-control" value="{{$team->team_name}}" required>
                    @error('team_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="trophies"> Trophies</label>
                    <input type="text" name="trophies" class="form-control" value="{{$team->trophies}}" >
                    @error('trophies')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="description"> Description </label>
                    <input type="text" name="description" class="form-control" value="{{$team->description}}" required>
                    @error('description')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">


                    <button class="btn btn-primary me-md-2 mt-2"> Edit Team</button>
                    <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteTeamModal">
                        Delete Team
                    </button>


                </div>

            </form>
        </div>
    </div>
</div>
@endsection
