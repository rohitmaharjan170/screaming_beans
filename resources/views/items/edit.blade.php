<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>edit items</title>
  </head>
  <body>
    <header>
    @if (session()->has('success'))
    <center><h5> Item Updated Successfully</h5></center>
@endif
    </header>
  <main>
	<center><h1>Edit Items</h1></center>


<form class="form-horizontal" method="post" action="{{ route('items.store')}}">
  @csrf
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">{{ __('Product Name:') }} </label>
    <div class="col-sm-10">
      <input id="name" type="text" class="form-control" name="name" value="{{ $item->name }}" required >
       </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2" for="price">{{ __('Product Price:') }} </label>
    <div class="col-sm-10">
        <input id="price" type="number" class="form-control" name="price" value="{{ $item->price }}" required >
       </div>
  </div>

        <div class='container' align="center">
       <button type="submit" class="btn btn-primary">Update</button>
</div>
</form>

</main>
</body>
</html>