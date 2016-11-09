<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Abhaya+Libre|Oswald|Raleway" rel="stylesheet">
	<style type="text/css">
		.single-logo {
			padding-top: 40px;
			padding-bottom: 40px;
			padding-left: 32px;
			padding-right: 32px;
		}
		body {
			color: #5f5f5f;
			background-color: #ececec;
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
	<title>
		AavegBlog
	</title>
</head>
<body>
	<script type="text/javascript">
	   var SITE_BASE_URL = "{{ url('/')}}";
	</script>
	<script type="text/template" id="blog-template">
	<header class="blue-grey lighten-1">
		<div class="container position-relative">
			<div class="single-logo center-align">
				<a href="#">
					<img src="{{asset('aavegbloglogo.png')}}" width="400">
				</a>
			</div>
		</div>
	</header>
	<div class="main-content">
	<div class="container">
		<div id="title-block">
			<img src="{{asset('deadpool.jpg')}}" class="responsive-img main-image">
		</div>
			<div class="row">
					<div class="col s12">
						<div class="container">
			<h1>@{{message.title}}</h1>
			<h3>@{{message.subtitle}}</h3>
							<div class="flow-text content" id="main-content">
								@{{{message.content}}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</script>
	<div id="main-container"></div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
	<script type="text/javascript" src="{{asset('js/blog_single.js')}}"></script>
</body>
</html>