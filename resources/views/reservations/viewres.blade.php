<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> reservation</title>
  </head>
  <body>
  <main>
	<center><h1> ALL RESERVATION</h1></center><br>

<!-- view items -->

<div class='container'>
  <div class='row'>
    <div class='col-md-12'>
    <div class='col-md-3'></div>
    <div class='col-md-12'>
    <table class="table table-bordered">
    <tr>
    <th>S.N</th>
    <th>Name</th>
    <th>Table no</th>
    <th>Reservation Time</th>
    </tr>
    @foreach($res as $row)
    <tr>
    <td>{{ $row['id'] }} </td>
    <td>{{ $row['name'] }}</td>
    <td>{{ $row['tbl_id'] }} </td>
    <td>{{ $row['reservation_time'] }} </td>
    </tr>
    @endforeach
    </table>
    </div>
    <div class='col-md-3'></div>
    </div>
  </div>
</div>



</main>
</body>
</html>