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
    <h1 class="display-3">Dubsmash</h1>
    <p class="lead">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut tortor ipsum. Vestibulum volutpat neque vitae odio vehicula, at ullamcorper lacus molestie. Aenean sed lacus sem. Nullam sodales, metus quis rutrum ultricies, quam velit placerat sapien, et lobortis enim mauris vitae neque. Aenean laoreet magna gravida facilisis eleifend. Praesent non elementum mauris, eu scelerisque ante. Praesent tincidunt laoreet nisi eu venenatis. Integer et lacus orci. Fusce eget dolor luctus, volutpat eros vel, molestie lacus. Pellentesque accumsan gravida efficitur.
    </p>
    <h2>Rules</h2>
    <p class="lead">
      <ul> 
      <li> The event involves maximum of 2 members from each team of the same hostel.</li>
      <li> Number of teams from each hostel is unlimited.</li>
      <li> A member can be a part of only one team.</li>
      <li> Every team can come up with maximum of 3 entries.</li>
      <li> Each entry is to comprise of a video which is of minimum 30 seconds and maximum of 1 minute and should consist of minimum 4 exchanges(2 each) if 2 members per team.</li>
      <li> The theme of the dubsmash is First Year Life.</li>
      <li> The entry can be submitted in English, Tamil, Hindi and Telugu.</li>
      <li> The link of the all the original dialogues involved in the entry has to be attached along with the dubsmash.</li>
      <li> The entries are to be submitted in the website on or before 22nd January 2017.</li>
      <li> Late entries aren&#39;t allowed.</li>
      <li> The judges decision are final.</li>
      </ul>    
    </p>
    <hr class="my-2">
    <form>
  <div class="form-group">
    <label for="member1">Member 1*</label>
    <input type="text" class="form-control" id="member1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="member1">Member 2</label>
    <input type="text" class="form-control" id="member2" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="hostel">Hostel*</label>
    <select class="form-control" id="hostel">
      <option>Agate</option>
      <option>Coral</option>
      <option>Diamond</option>
      <option>Jade</option>
      <option>Opal</option>
    </select>
  </div>
  <div class="form-group">
    <label for="dubsmash-file">Upload Dubsmash*</label>
    <input type="file" class="form-control-file" id="dubsmash-file">
    <small id="fileHelp" class="form-text text-muted">Please ensure that the file size is less that 00Mb</small>
  </div>
  <button type="submit" class="btn btn-primary">SMASH!</button>
</form>
  </div>
</div>
@endsection
