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
	<center><h1> Make a Reservation </h1></center><br>


<div class='container'>
  <div class='row'>
    <div class='col-md-12'>
    <div class='col-md-3'></div>
    <div class='col-md-12'>
    <table class="table table-bordered">
    <tr>
    <th>Tables in service</th>
    <th>Status</th>
    </tr>
    @foreach($res as $row)
    <tr>
    <td>{{ $row['id'] }}</td>
    <td>{{ $row['status'] }} </td> 
    </tr>
    @endforeach
    </table>
    </div>
    <div class='col-md-3'></div>
    </div>
  </div>
</div>

<div class='container' align="center">
            <form action="{{ route('reserv.store') }}" method="POST">
    @csrf
    <center><h1>ADD RESERVATION</h1></center><br>
    No. of Seats : <input type = "number" name="seats">
    Time: <input type="time" name="time">
    &nbsp
    <button type="submit" class="btn btn-primary">Done</button>
    <br> You will recieve a call to finalize your Reservation. 
            </form>
            <br>
</div>





</main>
</body>
</html>