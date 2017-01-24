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
  <!-- Form Requirements
  Team Member 1 Name
  Team Member 2 Name
  Hostel
  Video
  -->
  <div class="jumbotron">
    <h1 class="display-3" style="color: white">Dubsmash!</h1>
    <p class="lead">
      <br />
      You've seen your favourite stars do it. You've laughed hard at the ones that have failed. Now is your chance to impress. It only takes a few seconds. Or does it?
      <br />
      <br />
      Own the small screen as you quote the big screen and don't forget to show who's boss with the punchlines.    
      <br />
      <br />
      The theme for your dubsmash is <b>First Year Life!</b>
    </p>
    <h2>Rules</h2>
    <p class="lead">
      <ul>
      <li> The event involves a team of 1 or 2 members from the same hostel.</li>
      <li> Number of teams from each hostel is unlimited.</li>
      <li> A member can be a part of only one team.</li>
      <li> Every team can come up with only one entry.</li>
      <li> Each entry is to comprise of a video which is of minimum 30 seconds and maximum of 60 seconds.</li>
      <li> The theme of the dubsmash is First Year Life.</li>
      <li> The entry can be submitted in English, Tamil, Hindi and Telugu.</li>
      <li> The video file size should not exceed 10MB </li>
      <li> The video file should be in a common file format like .mp4</li>
      <li> The judges' decision is final.</li>
      <li> The entries are to be submitted in the website on or before<b> 23:59:59 22nd January 2017.</b></li>
      <li> Judging Criteria : 
        <ul>
          <li>Sync</li>
          <li>Humour</li>
          <li>Creativity</li>
        </ul>
      </li>
      </ul>
    </p>
    <hr class="my-2">
    <form id="dubsmash-form" enctype="multipart/form-data" method="POST">
  <div class="form-group">
    <label for="name1">Member 1*</label>
    <input type="text" class="form-control" id="name1" name="name1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="rollNo1">Roll No of Member 1*</label>
    <input type="text" class="form-control" id="rollNo1" name="rollNo1"  placeholder="Name">
  </div>
  <div class="form-group">
    <label for="name1">Member 2</label>
    <input type="text" class="form-control" id="name2" name="name2"  placeholder="Name">
  </div>
  <div class="form-group">
    <label for="rollNo2">Roll No of Member 2</label>
    <input type="text" class="form-control" id="rollNo2" name="rollNo2" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="hostel">Hostel*</label>
    <select class="form-control" id="hostel" name="hostel">
      <option>Agate</option>
      <option>Coral</option>
      <option>Diamond</option>
      <option>Jade</option>
      <option>Opal</option>
    </select>
  </div>
  <div class="form-group">
    <label for="dubsmash-file">Upload Dubsmash*</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="314572800">
    <input type="file" class="form-control-file" name="dubsmash-file" id="dubsmash-file">
    <small id="fileHelp" class="form-text text-muted">Please ensure that the file size is less that 30Mb</small>
  </div>
  <button class="btn btn-primary disabled" type="submit">SUBMIT!</button>
</form>
  </div>
</div>
@endsection
