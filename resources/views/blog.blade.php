@extends('blog_base')

@section('links')
@endsection

@section('scripts')
	<script type="text/javascript" src="{{asset('js/blog.js')}}"></script>
@endsection

@section('main')
<div class="container">
	<div class="row" style="padding-top:20px;">
		<div class="col s12 l9">
			<div class="row" id="main-pane-container">
				<!-- Main post goes here -->
			</div>
			<div class="row" id="blog-panes-container">
				<!-- Other panes go here -->
			</div>
		</div>

		<div class="col s12 l3">
		  <div class="card indigo lighten-2">
	        <div class="card-content white-text">
	          <p class="flow-text">Welcome to the Blog! <br> The latest addition to Aaveg, this blog gives you enthralling content relating to the Fresher life. Consider it your sneak peek into this spellbinding fest and more!<br /></p>
	        </div>
	      </div>
	      <div class="card teal lighten-2">
	        <div class="card-content white-text">
	          <span class="card-title">Links</span>
	          <p class="flow-text">Done reading? Here are some links to other parts of the website.
	          </p>
	        </div>
	        <div class="card-action white-text">
	          <a class="blue-text text-lighten-5" href="/">Home</a>
	          <a class="blue-text text-lighten-5" href="/scoreboard">Scores</a>
	          <a class="blue-text text-lighten-5" href="/team">Team</a>
	        </div>
	      </div>
		</div>
	</div>
</div>
<script type="text/template" id="main-pane">
			<div class="col s12">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="@{{image_path}}">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">@{{title}}<i class="material-icons right">more_vert</i></span>
						<p><a href="/blog/single/@{{blog_id}}">Read More!</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4"><div class="indigo-text text-lighten-1">@{{title}}</div><i class="material-icons right">close</i></span>
						<span><i>@{{author_name}}</i></span>
						<p class="teal-text text-lighten-2">@{{subtitle}}</p>
						<p><a href="/blog/single/@{{blog_id}}">Click here to read!</a></p>
					</div>
				  </div>
			</div>
</script>
<script type="text/template" id="blog-panes">
			@{{#each message}}
			<div class="col s12 l6">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="@{{image_path}}">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">@{{title}}<i class="material-icons right">more_vert</i></span>
						<p><a href="/blog/single/@{{blog_id}}">Read More!</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4"><div class="indigo-text text-lighten-1">@{{title}}</div><i class="material-icons right">close</i></span>
						<span><i>@{{author_name}}</i></span>
						<p class="teal-text text-lighten-2">@{{subtitle}}</p>
						<p><a href="/blog/single/@{{blog_id}}">Click here to read!</a></p>
					</div>
				  </div>
			</div>
			@{{/each}}
</script>
@endsection
@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
@endsection
