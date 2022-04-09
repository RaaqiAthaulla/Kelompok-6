@section('container')
<style>
img{
  width: 600px;
  max-height: 400px;
  margin: auto;

}
</style>

<title>Detail | Veflix</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="card">
  <div class="card-header">
  Movie ID : {{ $veflix->id }}
  </div>
  <div class="card-body">
    <img style="align-items: center;"src="{{ asset('/storage/image/' . $veflix->image)}}" alt="{{ $veflix->image }}">
    <h5 class="card-title">{{ $veflix->title }}</h5>
    <br>
    Synopsis :
    <p class="card-text">{{ $veflix->synopsis }}</p>
    <br>
    Duration (Minutes):
    <p class="card-text">{{ $veflix->duration }}</p>
    <br>
    Genre :
    <p class="card-text">{{ $veflix->genre }}</p>
    <br>
    Rating :
    <p class="card-text">{{ $veflix->rating }}</p>
    <br>
    <div class="d-flex justify-content-center">
    <a href="/veflix/{{ $veflix->id }}/edit" class="btn btn-warning">Edit</a> | 
      <form action="/veflix/{{ $veflix->id }}" method="POST">
          @csrf
          @method("DELETE")
            <input type="submit" class="btn btn-danger" value="Delete"></input>
      </form> | 
      <a href="/dashboard" class="btn btn-primary">Kembali</a>
    </div>
  </div>
</div>