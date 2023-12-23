
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update techer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>techer</h2>
  <form action="{{ route('updatetecher',$techer->id)}}" method="post"  enctype="multipart/form-data">
  @csrf
  @method('put')
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $techer->name }}">
      @error('name')
      <div class="alert alert-warning">
      {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="content">position:</label>
      <input type="text" class="form-control" id="position" placeholder="position" name="position" value="{{ $techer->position}}">
      @error('position')
      <div class="alert alert-warning">
      {{$message}}
      </div>
      @enderror
    </div>

   

    <div class="form-group">
      <label for="fb">facebook:</label>
      <input type="text" class="form-control" id="fb" placeholder="fb" name="fb" value="{{ $techer->fb}}">
      @error('fb')
      <div class="alert alert-warning">
      {{$message}}
      </div>
      @enderror
    </div>

    <div class="form-group">
      <label for="fb">x:</label>
      <input type="text" class="form-control" id="x" placeholder="x" name="x" value="{{ $techer->x}}">
      @error('x')
      <div class="alert alert-warning">
      {{$message}}
      </div>
      @enderror
    </div>

    <div class="form-group">
      <label for="fb">x:</label>
      <input type="text" class="form-control" id="insta" placeholder="insta" name="insta" value="{{ $techer->insta}}">
      @error('insta')
      <div class="alert alert-warning">
      {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image" value="{{ $techer->image}}">
            <img src="{{ asset('assets/images/'.$techer->image) }}" alt="techer" style="width:150px;">
            <div class="alert alert-warning">
            @error('image')
                {{ $message }}
            @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-default">Add</button>
  </form>
</div>


</body>
</html>
