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
    <h1 class="display-3" style="color: white">Vine Compilation</h1>
    <p class="lead">
      <br />
      Vine may no longer be with us, but the art of "vine-ing" is still very much existent. Take out your phones and show us that humor is very much your forte in no time at all
      <br />
      <br />
      Own the small screen as you quote the big screen and don't forget to show who's boss with the punchlines.    
      <br />
    </p>
    <h2>Rules</h2>
    <p class="lead">
<ul>
<li><span class="s2">Vine Compilation is a team event.</span></li>
<li><span class="s2">A maximum of 5 teams of a maximum of 7 members each (excluding the seniors casted) are allowed to participate from each hostel.</span></li>
<li><span class="s2">A vine is usually a small video of length 6 seconds. Such vines must be compiled together to form a video of a maximum length of 48 seconds and a minimum length of 42 seconds. </span></li>
<li><span class="s2">The theme for the vines will be given two days before the deadline.</span></li>
<li><span class="s2">Only the respective team members can feature in the vines. If a person of the opposite gender has to be casted, then in that case and only in that case, seniors can feature in the vines.</span></li>
<li><span class="s2">Teams with vines featuring people other than these will be disqualified.</span></li>
<li><span class="s2">No obscene material should be included in the video.</span></li>
<li><span class="s2">Plagiarism is strictly prohibited and if found the respective team will be disqualified.</span></li>
<li><span class="s2">The teams should submit their completed videos&nbsp;on the official Aaveg Website before the deadline. <b> (Deadline for Submission : 11:59:59 PM on 5</b></span><span class="s4"><b><sup>th</sup></b></span><span class="s2"><b> of February 2017).</b></span></li>
<li><span class="s2">All the entries will be screened in EEE auditorium. All the members are requested to be present along with their hostel members for support. </span></li>
<li><span class="s2">The winners will be announced right after the screening of the videos by the judges at the EEE auditorium. </span></li>
</ul>
<p><strong><span class="s2">POINTS :-</span></strong></p>
<ul>
<li><span class="s2">First Place : 7 points</span></li>
<li><span class="s2">Second Place : 5 points</span></li>
<li><span class="s2">Third Place : 3 points</span></li>
</ul>
    </p>
    <hr class="my-2">
    <form id="dubsmash-form" enctype="multipart/form-data" method="POST">
  <div class="form-group">
    <label for="name1">Team Leader</label>
    <input type="text" class="form-control" id="name1" name="name1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="rollNo1">Roll Number of Team Leader</label>
    <input type="text" class="form-control" id="rollNo1" name="rollNo1"  placeholder="Name">
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
    <label for="dubsmash-file">Upload Vine*</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="314572800">
    <input type="file" class="form-control-file" name="dubsmash-file" id="dubsmash-file">
    <small id="fileHelp" class="form-text text-muted">Please ensure that the file size is less that 10Mb</small>
  </div>
  <button class="btn btn-primary" type="submit">SUBMIT!</button>
</form>
  </div>
</div>
@endsection
