<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}"  type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}"  type="text/css">

    <title>Members</title>
</head>
<body>
<main>
    <center><h1> Members</h1></center><br>

<div class='container'>
  <div class='row'>
    <div class='col-md-12'>
    <div class='col-md-3'></div>
    <div class='col-md-12'>
    <table class="table table-bordered">
    <tr>
    <th>ID NUM</th>
    <th>Full Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Mobile No</th>
    <th>Admin</th>
    <th>Created at</th>
    <th>Updated at</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>
    @foreach($members as $row)
    <tr>
    <td>{{ $row['id'] }} </td>
    <td>{{ $row['name'] }}</td>
    <td>{{ $row['email'] }}</td>
    <td>{{ $row['address'] }} </td>
     <td>{{ $row['mobile'] }} </td>
     <td>{{ $row['is_admin'] }}</td>
     <td>{{ $row['created_at'] }}</td>
     <td>{{ $row['updated_at'] }}</td>
    <td><a href="{{ URL::to('members/' . $row->id . '/edit') }}">Edit</a></td>
    <td>
        {!!Form::open(['method'=>"DELETE",'route'=>['members.destroy','id'=>$row->id],'style'=>'display.inline']) !!}
        {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
        {!!Form::close()!!}   
    </td>
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

<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.dataTables.min.js') }}" type="text/javascript"></script>

  
</html>



