@extends('blog_base')
@section('links')
<link href="https://fonts.googleapis.com/css?family=Abhaya+Libre|Oswald|Raleway" rel="stylesheet">
@endsection
@section('main')
<script type="text/template" id="content-template">		
<div id="title-block">
	<img src="@{{message.image_path}}" class="responsive-img main-image">
</div>
	<div class="row">
			<div class="col s12 l8">
					<h1>@{{message.title}}</h1>
					<h3>@{{message.subtitle}}</h3>
					<div class="flow-text content" id="main-content">
					</div><br>
          <div class="flow-text"><i>@{{message.author_name}}</i></div>
			</div>
			<div class="col s12 l3 offset-l1">
				<div class="card-panel indigo lighten-4">
					<div class="profile-image-container">
					<div class="center-align flow-text">@{{message.author_name}}</div><br>
					<div class="container">
						<img src='@{{message.author_captions.image_path}}' class="responsive-img circle">
					</div>
					<br>
					</div>
          <span class="gray-text">@{{message.author_captions.caption}}</span>
        </div>
			</div>
		</div>
	</div>
</div>
</script>
<div class="main-content">
	<div class="container" id="content-container">
	</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
<script type="text/javascript" src="{{asset('js/blog_single.js')}}"></script>
@endsection