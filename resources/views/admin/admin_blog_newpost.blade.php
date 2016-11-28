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
<form enctype="multipart/form-data" id="new_post_form" method="POST">
	<div class="row">
		<div class="input-field col s12">
			<input id="title" name="title" type="text" class="validate">
			<label for="title">Title</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<input id="subtitle" name="subtitle" type="text" class="validate">
			<label for="subtitle">Subtitle</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<textarea id="content" name="content" type="text" class="validate materialize-textarea"></textarea>
			<label for="content">Content</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s6">
			<select id="author_name" name="author_name">
				<option value="" disabled selected>Author</option>
				<option value="Gautham">Gautham</option>
				<option value="Tamil Lits">The</option>
				<option value="Dramatics">Ultimate</option>
				<option value="Sports">God</option>
			</select>
			<label for="author_name">Author</label>
		</div>
	</div>
	<div class="file-field input-field">
		<div class="btn">
			<span>Image</span>
			<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
			<input name="image" type="file" id="image">
		</div>
		<div class="file-path-wrapper">
			<input class="file-path validate" type="text">
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<div class="switch">
				<label>
					Inactive
					<input type="checkbox" id="active" name="active" checked>
					<span class="lever"></span>
					Active
				</label>
			</div>
		</div>
	</div>
</form>
<br /><br />
<div class="row">
	<div class="col s12">
		<button class="btn waves-effect waves-light" onclick="uploadBlog();">
			Submit
			<i class="material-icons right">send</i>
		</button>
	</div>
</div>
<script type="text/javascript" src="{{asset('js/new_post.js')}}"></script>
@endsection