@extends('welcome')

@section('content')


  <!-- Modal -->
  <div class="modal fade" id="deleteHeroModal" tabindex="-1" aria-labelledby="deleteHeroModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteHeroModalLabel">Delete Hero - {{$hero->hero_name}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('heroes/delete/' .$hero->id) }}" method="POST">
            @csrf
            @method('DELETE')

        <div class="modal-body">
         Are you sure to delete this hero?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger" >Delete Hero</button>

        </div>
    </form>

      </div>
    </div>
  </div>
<h1>Edit Hero</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 mx-auto">
            <form action="{{url('/heroes/'.$hero->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mt-2">
                    <label for="hero_name"> Hero Name</label>
                    <input type="text" name="hero_name" class="form-control" value="{{$hero->hero_name}}" required>
                    @error('hero_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="hero_type"> Hero Type</label>
                    <input type="text" name="hero_type" class="form-control" value="{{$hero->hero_type}}" >
                    @error('hero_type')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">


                    <button class="btn btn-primary me-md-2 mt-2"> Edit Hero</button>
                    <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteHeroModal">
                        Delete Hero
                    </button>


                </div>

            </form>
        </div>
    </div>
</div>
@endsection
