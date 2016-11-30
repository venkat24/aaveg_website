@extends('blog_base')

@section('links')
@endsection

@section('scripts')
	<script type="text/javascript" src="{{asset('js/blog_archives.js')}}"></script>
@endsection

@section('main')
<div class="container">
	<div class="row" style="padding-top:20px;">
	<h1 class="center-align">Archives</h1>
		<div class="col s12">
			<div class="row" id="main-container">
				<!-- Main post goes here -->
			</div>
		</div>
	</div>
</div>
<script type="text/template" id="main-template">
			@{{#each message}}
			<div class="col s12 l4">
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
						<p><a href="/blog/single/@{{blog_id}}">Read More!</a></p>
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