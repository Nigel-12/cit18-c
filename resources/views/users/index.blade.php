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
    <h1>Users</h1>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">email_verified_at</th>
      <th scope="col">password</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>

  <tbody>
@foreach ($users as $user)
<tr>
<th scope="row">{{$user->id}}</th>
<td>{{$user->name}}</td>
<td>{{$user->email}}</td>
<td>{{$user->email_verified_at}}</td>

</tr>
@endforeach
</tbody>
</table>
  </tbody>
</table>
</body>
</html>