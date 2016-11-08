@extends('admin.admin_base')
        
@section('links')
<link rel="stylesheet" href="{{asset('trumbowyg/dist/ui/trumbowyg.min.css')}}">
@endsection

@section('scripts')
<script src="{{asset('trumbowyg/dist/trumbowyg.min.js')}}"></script>
@endsection

@section('main')
<div class="center-align teal-text text-accent-4">
	<h1>New Post</h1>
</div>
<form method="post" action="/admin/blog/newpost" id="main-form" enctype="multipart/form-data">
	<div class="row">
		<div class="input-field col s12">
			<input id="title" name="title" type="text" class="validate" form="main-form">
			<label for="title">title</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<input id="subtitle" name="subtitle" type="text" class="validate" form="main-form">
			<label for="subtitle">Subtitle</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<input id="content" name="content" type="text" class="validate"  form="main-form">
			<label for="content">Content</label>
		</div>
	</div>
	<div id="trumbowyg">
	</div>
	<div class="row">
		<div class="input-field col s6">
			<select id="author" name="author" form="main-form">
				<option value="" disabled selected>Author</option>
				<option value="Gautham">Gautham</option>
				<option value="Tamil Lits">The</option>
				<option value="Dramatics">Ultimate</option>
				<option value="Sports">God</option>
			</select>
			<label for="author">Author</label>
		</div>
	</div>
	<div class="file-field input-field">
		<div class="btn">
			<span>Image</span>
			<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
			<input name="image" type="file" form="main-form">
		</div>
		<div class="file-path-wrapper">
			<input class="file-path validate" type="text" form="main-form">
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<div class="switch">
				<label>
					Inactive
					<input selected type="checkbox" name="active" form="main-form">
					<span class="lever"></span>
					Active
				</label>
			</div>
		</div>
	</div>
	<br /><br />
	<div class="row">
		<div class="col s12">
			<button class="btn waves-effect waves-light" type="submit" name="action" form="main-form">
				Submit
				<i class="material-icons right">send</i>
			</button>
		</div>
	</div>
</form>
<script type="text/javascript" src="{{asset('js/new_post.js')}}"></script>
@endsection