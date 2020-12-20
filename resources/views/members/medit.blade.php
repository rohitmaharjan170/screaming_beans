<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>edit members</title>
  </head>
  <body>
    <header>
    @if (session()->has('success'))
    <center><h5> Members Updated Successfully</h5></center>
@endif
    </header>
  <main>
	<center><h1>Edit Members</h1></center>


<form class="form-horizontal" method="post" action="{{ route('members.store')}}">
  @csrf
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">{{ __('Member Name:') }} </label>
    <div class="col-sm-10">
      <input id="name" type="text" class="form-control" name="name" value="{{ $members->name }}" required >
       </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2" for="email">{{ __('Product Email:') }} </label>
    <div class="col-sm-10">
        <input id="email" type="character" class="form-control" name="email" value="{{ $members->email }}" required >
       </div>
  </div>

    <div class="form-group">
    <label class="control-label col-sm-2" for="address">{{ __('Address:') }} </label>
    <div class="col-sm-10">
        <input id="address" type="text" class="form-control" name="address" value="{{ $members->address }}" required >
       </div>
  </div>

    <div class="form-group">
    <label class="control-label col-sm-2" for="mobile">{{ __('Mobile number:') }} </label>
    <div class="col-sm-10">
        <input id="mobile" type="number" class="form-control" name="mobile" value="{{ $members->mobile }}" required >
       </div>
  </div>
      
      <div class="form-group">
    <label class="control-label col-sm-2" for="admin">{{ __('Adminstration:') }} </label>
    <div class="col-sm-10">
        <input id="is_admin" type="number" class="form-control" name="is_admin" value="{{ $members->is_admin }}" required >
       </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="password">{{ __('Password:') }} </label>
    <div class="col-sm-10">
        <input id="password" type="character" class="form-control" name="password" value="{{ $members->password }}" required >
       </div>
  </div>

      
        <div class='container' align="center">
       <button type="submit" class="btn btn-primary">Update</button>
</div>
</form>

</main>
</body>
</html>