@extends('base')

@section('links')
    <link rel="stylesheet" type="text/css" href="{{asset('css/dubsmash.css')}}">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/dubsmash.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection
@section('main')

<div class="container" id="main-container">
  <br><br><br>
  <div class="jumbotron">
    <h1 class="display-3" style="color: white">Fresher's Night</h1>
    <hr class="my-2">
    <form id="dubsmash-form" enctype="multipart/form-data" method="POST">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
  </div>
  <div class="form-group">
    <label for="name">Department</label>
    <select id="dept" class="form-control" name="dept" required>
      <option value="" selected disabled>Choose your option</option>
      <option value="CSE">CSE</option>
      <option value="ECE">ECE</option>
      <option value="EEE">EEE</option>
      <option value="ICE">ICE</option>
      <option value="Mechanical">Mechanical</option>
      <option value="Production">Production</option>
      <option value="Civil">Civil</option>
      <option value="Chemical">Chemical</option>
      <option value="Architecture">Architecture</option>
      <option value="Metallurgy">Metallurgy</option>
    </select>
  </div>
  <div class="form-group">
    <label for="rollNo">Roll Number</label>
    <input type="number" class="form-control" id="rollNo" name="rollNo" placeholder="Roll No" required>
  </div>
  <div class="form-group">
    <label for="mobile">Mobile</label>
    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" required>
  </div>  
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Name" required>
  </div>
  <div class="form-group">
    <label for="ques1">If you had to choose one colour to describe yourself, what do you choose and why?</label>
    <textarea type="ques1" class="form-control" id="ques1" name="ques1" placeholder="Answer" required></textarea>
  </div>
  <div class="form-group">
    <label for="ques2">You have 2 sentences to write whatever you want to. We'll be judging you based on this.</label>
    <textarea type="ques2" class="form-control" id="ques2" name="ques2" placeholder="Answer" required></textarea>
  </div>
  <button class="btn btn-primary" type="submit">SUBMIT!</button>
</form>
  </div>
</div>
@endsection
