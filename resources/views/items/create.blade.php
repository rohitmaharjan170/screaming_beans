<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> items</title>
  </head>
  <body>
  <main>
	<center><h1> ITEMS</h1></center><br>

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
    <th>Price</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>
    @foreach($items as $row)
    <tr>
    <td>{{ $row['id'] }} </td>
    <td>{{ $row['name'] }}</td>
    <td>{{ $row['price'] }} </td>
    <td><a href="{{ URL::to('items/' . $row->id . '/edit') }}">Edit</a></td>
    <td>
	{!!Form::open(['method'=>"DELETE",'route'=>['items.destroy','id'=>$row->id],'style'=>'display.inline']) !!}
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

<hr>


<!-- add item -->
<div class='container' align="center">
    		<form action="{{ route('items.store') }}" method="POST">
	@csrf
	<center><h1>ADD ITEMS</h1></center><br>
	NAME: <input type = "text" name="name">
	Price: <input type="number" name="price">
	&nbsp
	<button type="submit" class="btn btn-primary">Save new item</button>
			</form>
			<br>
</div>

<hr>



</main>
</body>
</html>