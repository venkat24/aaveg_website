@extends('base')

@section('links')
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/login.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection
@section('main')

<div class="login-container center-align">
<form method="POST" action="/login" id="login-form">
  <h1 class="display-3">Aaveg T-Shirts</h1>
  <p class="center-align">Wear your hostel colours with pride!</p>
  <hr class="my-2">
  <label for="roll_no">Roll Number*</label>
  <input type="text" class="form-control" name="roll_no" placeholder="Roll Number" required />
  <br />
  <label for="password">Webmail Password*</label>
  <input type="password" class="form-control" name="password" placeholder="Webmail Password" required />
  <br />
  <p class="lead" style="text-align: center;">
    <button class="btn btn-primary btn-lg" role="button" type="submit" onclick="this.className += ' disabled'">Login</button>
  </p>
</form>
</div>

@endsection
