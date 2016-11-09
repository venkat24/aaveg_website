@extends('admin.admin_base')

@section('scripts')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
	<script type="text/javascript" src="{{asset('js/admin_scoreboard.js')}}"></script>
@endsection

@section('main')
	<h1 class="center-align teal-text text-accent-4">Update Scores</h1>
  <ul id='dropdown1' class='dropdown-content' id="events-dropdown">
  	<li><a href="#!">asdsjnnfsdfn</a></li>
  </ul>
  <script type="text/template" id="dropdown-template">
  	@{{#each message}}
    <li>
		<a href="#!">@{{this}}</a>
    </li>
    @{{/each}}
  </script>
	
@endsection
