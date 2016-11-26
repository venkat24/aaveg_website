@extends('admin.admin_base')

@section('main')
<div class="center-align teal-text text-accent-4">
	<h1>New Event</h1>
</div>
<div class="row">
	<div class="input-field col s12">
		<input id="event_name" type="text" class="validate">
		<label for="event_name">Event Name</label>
	</div>
</div>
<div class="row">
	<div class="input-field col s12">
		<textarea id="event_desc" class="materialize-textarea"></textarea>
		<label for="event_desc">Event Description</label>
	</div>
</div>
<div class="row">
	<div class="input-field col s6">
		<select id="event_cluster">
			<option value="" disabled selected>Cluster</option>
			<option value="English Lits">English Lits</option>
			<option value="Tamil Lits">Tamil Lits</option>
			<option value="Dramatics">Dramatics</option>
			<option value="Sports">Sports</option>
		</select>
		<label for="event_cluster">Event Cluster</label>
	</div>
	<div class="input-field col s6">
		<select id="event_category">
			<option value="Category" disabled selected>Cup</option>
			<option value="Culturals">Culturals</option>
			<option value="Sports">Sports</option>
			<option value="Miscellaneous">Miscellaneous</option>
		</select>
		<label for="event_category">Event Cup</label>
	</div>
</div>
<div class="row">
	<div class="input-field col s12">
		<input type="date" class="datepicker" id="event_date">
		<label for="event_date">Event Date</label>
	</div>
</div>
<div class="row">
	<div class="input-field col s6">
		<input type="time" class="validate" id="event_start_time">
		<label for="event_start_time"></label>
	</div>		
	<div class="input-field col s6">
		<input type="time" class="validate" id="event_end_time">
		<label for="event_end_time"></label>
	</div>
</div>
<div class="row">
	<div class="input-field col s12">
		<input type="text" class="validate" id="event_venue">
		<label for="event_venue">Event Venue</label>
	</div>
</div>
<div class="row">
	<div class="col s12">
		<button class="btn waves-effect waves-light" type="submit" name="action" onclick="submit();">
			Submit
			<i class="material-icons right">send</i>
		</button>
	</div>
</div>
<script type="text/javascript" src="{{asset('js/new_event.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
  });
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
  });
</script>
@endsection