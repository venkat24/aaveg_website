@extends('base')

@section('links')
    <link rel="stylesheet" type="text/css" href="{{asset('css/tshirt.css')}}">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/tshirt.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection
@section('main')

<div class="container" id="main-container">
  <br><br><br>
  <div class="jumbotron">
    <h1 class="display-3" style="color: white; text-align:center">T-Shirt Registration</h1>
    <hr class="my-2">
    <form id="dubsmash-form" method="POST" action="/tshirt/register" >
  <div class="form-group">
    <label for="name">Name*</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
  </div>
  <div class="form-group">
    <label for="hostel">Hostel*</label>
    <select class="form-control" id="hostel" name="hostel" required>
      <option>Agate</option>
      <option>Coral</option>
      <option>Diamond</option>
      <option>Jade</option>
      <option>Opal</option>
    </select>
  </div>
  <div class="form-group">
    <label for="size">Size*</label>
    <select class="form-control" id="size" name="size" required>
      <option>S</option>
      <option>M</option>
      <option>L</option>
      <option>XL</option>
      <option>XXL</option>
    </select>
  </div>
  <button class="btn btn-primary" type="submit" onclick="this.className += ' disabled'">Register</button>
</form>
  </div>
</div>
@endsection
