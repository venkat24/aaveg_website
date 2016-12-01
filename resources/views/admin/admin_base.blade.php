<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
	<script type="text/javascript" src="{{asset('js/admin_login.js')}}"></script>
	@yield('scripts')
    <style>
	    * {
	    	margin: 0;
	    	padding: 0;
	    }
	    body {
	      display: flex;
	      min-height: 100vh;
	      flex-direction: column;
	    }

	    main {
	      flex: 1 0 auto;
	    }

	    body {
	      background: #fff;
	    }

	    .input-field input[type=date]:focus + label,
	    .input-field input[type=text]:focus + label,
	    .input-field input[type=email]:focus + label,
	    .input-field input[type=password]:focus + label {
	      color: #e91e63;
	    }

	    .input-field input[type=date]:focus,
	    .input-field input[type=text]:focus,
	    .input-field input[type=email]:focus,
	    .input-field input[type=password]:focus {
	      border-bottom: 2px solid #e91e63;
	      box-shadow: none;
	    }
	</style>
</head>
    	<script type="text/javascript">
		   var SITE_BASE_URL = "{{ url('/')}}"; //Change this line to env
		</script>
<body>
		<ul id="oc-dropdown" class="dropdown-content">
		  <li><a href="javascript: location.href = (SITE_BASE_URL + '/admin/events/newevent')">New Event</a></li>
		  <li><a href="javascript: location.href = (SITE_BASE_URL + '/admin/events/updateevent')">Update Event</a></li>
		</ul>
		<ul id="content-dropdown" class="dropdown-content">
		  <li><a href="javascript: location.href = (SITE_BASE_URL + '/admin/blog/newpost')">New Post</a></li>
		  <li><a href="javascript: location.href = (SITE_BASE_URL + '/admin/blog/updatepost')">Update Post</a></li>
		</ul>
		<div class="navbar-fixed">
		  <nav>
		    <div class="nav-wrapper teal accent-4">
		      <img src="{{ asset('images/aaveglogo.png') }}" width="150px" style="margin:5px;" onclick="location.href = SITE_BASE_URL + '/home'">
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		      @foreach(Session::get('permissions', []) as $permission)
		      	@if($permission==1)
		        <li><a class="dropdown-button" href="#!" data-activates="oc-dropdown">Events</a></li>
		       	@endif
		      	@if($permission==2)
		        <li><a class="dropdown-button" href="#!" data-activates="content-dropdown">Blog</a></li>
		       	@endif
		      	@if($permission==3)
				<li><a href="/admin/scoreboard/newscore">Scoreboard</a></li>
		       	@endif
		      @endforeach
		        <li onclick=""><a href="#" onclick="logout();">Logout</a></li>
		      </ul>
		    </div>
		  </nav>
		</div>
<div class="container">
@yield('main')
</div>
</body>
</html>
