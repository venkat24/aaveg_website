<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.single-logo {
			padding-top: 40px;
			padding-bottom: 40px;
			padding-left: 32px;
			padding-right: 32px;
		}
		body {
			color: #5f5f5f;
			background-color: #e8eaf6;
			word-wrap: break-word;
		}
		.content {
			font-family: 'Abhaya Libre' , serif;
		}
		h1 {
			color: #37474F;
			width: 100%;
			font-family: 'Oswald', sans-serif;
		}
		h3 {
			color: #37474F;
			width: 100%;
			font-family: 'Raleway', sans-serif;
		}
		.main-image {
			position: relative; 
		}
	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	@yield('links')
	@yield('scripts')
	<title>
		AavegBlog
	</title>
</head>
<body>
	<script type="text/javascript">
	   var SITE_BASE_URL = "{{ url('/')}}";
	</script>

	<header class="indigo lighten-1">
		<div class="container position-relative">
			<div class="single-logo center-align">
				<a href="#">
					<img src="{{asset('aavegbloglogo.png')}}" width="400">
				</a>
			</div>
		</div>
	</header>

	@yield('main')
	
	<div id="main-container"></div>
 	<footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Keep Reading!</h5>
            <p class="grey-text text-lighten-4">Visit more of our posts on the right, or click on the archives button to see all of our posts!</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Popular Content</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        ©2016 <a class="grey-text text-lighten-4 center-align" href="/admin/login">Aaveg</a>
        <a class="grey-text text-lighten-4 right" href="#!">Archives</a>
        </div>
      </div>
    </footer>
</body>
</html>