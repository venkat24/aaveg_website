@extends('blog_base')
@section('links')
<link href="https://fonts.googleapis.com/css?family=Abhaya+Libre|Oswald|Raleway" rel="stylesheet">
@endsection
@section('main')
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
@endsection
@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
<script type="text/javascript" src="{{asset('js/blog_single.js')}}"></script>
@endsection