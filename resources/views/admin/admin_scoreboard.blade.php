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

  <a class="waves-effect waves-light btn" onclick="setScores()">Set Scores</a>
  <br><br>
@endsection
