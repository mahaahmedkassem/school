<!DOCTYPE html>
<html lang="en">
<head>
  <title>Techer list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Techer list</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
      <th>ID</th>
        <th>title</th>
        <th>content</th>
        <th>position</th>
        <th>Facebook</th>
        <th>X</th>
        <th>insta</th>
       
        <th>EDIT</th>
        <th>DELETE</th>
        <th>SHOW</th>
        

      </tr>
    </thead>
    <tbody>
      @foreach( $techers as  $techer)
    <tr>
    <td>{{$techer->id}}</td>
        <td>{{$techer->name}}</td>
        <td>{{$techer->position}}</td>
        <td>{{$techer->fb}}</td>
        <td>{{$techer->x}}</td>
        <td>{{$techer->x}}</td>
        <td>{{$techer->insta}}</td>

        
      <td><a href="edittecher/{{$techer->id}}">Edit</a></td>
      <td><a href="deleteTecher/{{$techer->id}}">delete</a></td>
      <td><a href="techerDetail/{{ $techer->id }}">Show</a></td>
      
      </tr>
      @endforeach
     
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
