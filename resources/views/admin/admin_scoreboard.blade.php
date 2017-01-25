@extends('admin.admin_base')

@section('scripts')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
	<script type="text/javascript" src="{{asset('js/admin_scoreboard.js')}}"></script>
@endsection

@section('main')
	<h1 class="center-align teal-text text-accent-4">Update Scores</h1>
  <div class="row">
    <div class="input-field col s6">
      <select id="events-dropdown" name="event_name">
        <option value="" disabled selected>Select Event</option>
      </select>
      <label for="event_name">Event</label>
    </div>
  </div>
  <script type="text/template" id="author-name-dropdown">
  @{{#each message}}
    <option value="@{{this}}">@{{this}}</option>
  @{{/each}}
  </script>
  <a class="waves-effect waves-light btn" onclick="setScoreFields()">Get Scores</a>
  <br><br>
  <div class="input-field col s6">
    <input placeholder="0" id="diamond-score" type="text" class="validate">
    <label for="diamond-score">Diamond Score</label>
  </div><br>
  <div class="input-field col s6">
    <input placeholder="0" id="coral-score" type="text" class="validate">
    <label for="coral-score">Coral Score</label>
  </div><br>
  <div class="input-field col s6">
    <input placeholder="0" id="jade-score" type="text" class="validate">
    <label for="jade-score">Jade Score</label>
  </div><br>
  <div class="input-field col s6">
    <input placeholder="0" id="agate-score" type="text" class="validate">
    <label for="agate-score">Agate Score</label>
  </div><br>
  <div class="input-field col s6">
    <input placeholder="0" id="opal-score" type="text" class="validate">
    <label for="opal-score">Opal Score</label>
  </div><br>
  <div class="row">
    <div class="input-field col s4 first-place">
      <h4>First Place</h4>
      <input type="checkbox" id="agate1"  />
      <label for="agate1">Agate</label>
      <br />
      <input type="checkbox" id="coral1"  />
      <label for="coral1">Coral</label>
      <br />
      <input type="checkbox" id="diamond1"  />
      <label for="diamond1">Diamond</label>
      <br />
      <input type="checkbox" id="jade1"  />
      <label for="jade1">Jade</label>
      <br />
      <input type="checkbox" id="opal1"  />
      <label for="opal1">Opal</label>
    </div>
    <div class="input-field col s4 second-place">
      <h4>Second Place</h4>
      <input type="checkbox" id="agate2"  />
      <label for="agate2">Agate</label>
      <br />
      <input type="checkbox" id="coral2"  />
      <label for="coral2">Coral</label>
      <br />
      <input type="checkbox" id="diamond2"  />
      <label for="diamond2">Diamond</label>
      <br />
      <input type="checkbox" id="jade2"  />
      <label for="jade2">Jade</label>
      <br />
      <input type="checkbox" id="opal2"  />
      <label for="opal2">Opal</label>
    </div>
    <div class="input-field col s4 third-place">
      <h4>Third Place</h4>
      <input type="checkbox" id="agate3"  />
      <label for="agate3">Agate</label>
      <br />
      <input type="checkbox" id="coral3"  />
      <label for="coral3">Coral</label>
      <br />
      <input type="checkbox" id="diamond3"  />
      <label for="diamond3">Diamond</label>
      <br />
      <input type="checkbox" id="jade3"  />
      <label for="jade3">Jade</label>
      <br />
      <input type="checkbox" id="opal3"  />
      <label for="opal3">Opal</label>
      <br />
    </div>
  <br>
  </div>


  <a class="waves-effect waves-light btn" onclick="setScores()">Set Scores</a>
  <br><br>
@endsection
