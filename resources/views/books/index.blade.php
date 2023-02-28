<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>

<body>
    <h1>Book</h1>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">totalPages</th>
      <th scope="col">rating</th>
      <th scope="col">isbn</th>
      <th scope="col">publishDate</th>
    </tr>
  </thead>

  <tbody>
@foreach ($books as $book)
<tr>
<th scope="row">{{$book->id}}</th>
<td>{{$book->title}}</td>
<td>{{$book->totalPages}}</td>
<td>{{$book->rating}}</td>
<td>{{$book->isbn}}</td>
<td>{{$book->publishDate}}</td>
</tr>
@endforeach
</tbody>
</table>
  </tbody>
</table>
</body>
</html>