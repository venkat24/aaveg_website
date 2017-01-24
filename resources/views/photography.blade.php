@extends('base')

@section('links')
    <link rel="stylesheet" type="text/css" href="{{asset('css/photography.css')}}">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/photography.js')}}"></script>
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
    <h1 class="display-3" style="color: white">Photography</h1>
    <p class="lead">
<p>Calling out all shutterbugs, insta-kings and queens alike.</p>
<p>Frame the ultimate shot, to showcase your mastery of aperture and exposure, and win it for your hostel.</p>
    </p>
    <h2>Rules</h2>
    <p class="lead">
<ul>
<li><span class="s2">There are no restrictions on the number of participants from each hostel.</span></li>
<li><span class="s2">Each participant is allowed upto two entries</span></li>
<li><span class="s2">Pictures for round one should be submitted by 23:59:59 January 31st, 2017</span></li>
<li><span class="s2">Dates for round 2 would be intimated later.</span></li>
<li><span class="s2">Pictures are to be taken only inside the Nitt campus.</span></li>
<li><span class="s2">Photographs taken on any device (mobile, digital camera or DSLR) are accepted.</span></li>
<li><span class="s2">Photos can be edited. If edited, then the participants must send the original photo along with the edited one.</span></li>
<li><span class="s2">The exif data should be intact.</span></li>
<li><span class="s2">If any of the rules are violated, then the participant will be disqualified.</span></li>
<li><span class="s2">The entries will be judged on how far it conveys the theme given, caption, use of techniques, composition, framing.</span></li>
</ul>
    </p>
    <hr class="my-2">
    <form id="photography-form" enctype="multipart/form-data" method="POST">
  <div class="form-group">
    <label for="name">Name*</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
  </div>
  <div class="form-group">
    <label for="roll_no">Roll No*</label>
    <input type="text" class="form-control" id="roll_no" name="roll_no" placeholder="Roll Number" required>
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
    <label for="photography-file">Upload Photograph*</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="31457280">
    <input type="file" class="form-control-file" name="image" id="image">
    <h5 id="fileHelp" class="form-text">Please ensure that the file size is less that 3Mb</h5>
  </div>
  <button class="btn btn-primary" type="submit">SUBMIT!</button>
</form>
  </div>
</div>
@endsection
