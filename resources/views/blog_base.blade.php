<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.single-logo {
			padding-top: 10px;
			padding-bottom: 10px;
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
		.wrap {
			  text-overflow: ellipsis;
			  white-space: nowrap;
			  overflow: hidden;
		}
		.go-back {
			position: absolute;
			top: 45px;
			left: 3%;
		}
		.responsive-img {
			width: 100%;
		}
	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	@yield('links')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
	<script type="text/javascript" src="{{asset('js/blog_base.js')}}"></script>
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
				<a href="/blog">
					<img src="{{asset('aavegbloglogo.png')}}" width="400">
				</a>
			</div>
		</div>
		<a href="/" class="white-text go-back">
			<i class="medium material-icons">home</i>
		</a>
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
            <div id="links-list-container"></div>
            <script type="text/template" id="links-layout">
	            <ul>
		            @{{#each message}}
		              <li><a class="grey-text text-lighten-3" href="/blog/single/@{{blog_id}}">@{{title}}</a></li>
		            @{{/each}}
	            </ul>
            </script>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        ©2016<a class="grey-text text-lighten-4 center-align" href="/admin/login"> </a>Aaveg
        <a class="grey-text text-lighten-4 right" href="/blog/archives">Archives</a>
        </div>
      </div>
    </footer>
</body>
</html>