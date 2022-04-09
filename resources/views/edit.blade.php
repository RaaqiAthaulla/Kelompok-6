<title>Edit | Veflix</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="list-group-item">
    <div class="row justify-content-start">
        <form action="/dashboard/{{$veflix->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")

            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{$veflix->title}}">
            <br>
            
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" id="image" value="{{$veflix->image}}">
            <br>
            
            <label for="synopsis" class="form-label">Synopsis</label>
            <input type="text" name="synopsis" class="form-control" id="synopsis" value="{{$veflix->synopsis}}">
            <br>
        
           <label for="duration" class="form-label">Duration (Minutes)</label>
           <input type="text" name="duration" class="form-control" id="duration" value="{{$veflix->duration}}">
           <br>
        
            <label for="genre" class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control" id="genre" value="{{$veflix->genre}}">
            <br>

            <label for="rating" class="form-label">Rating</label>
            <input type="text" name="rating" class="form-control" id="rating" value="{{$veflix->rating}}">
            <br>

            <button class="btn btn-warning" type="submit">Edit</button>
        </form>
    </div>
</div>