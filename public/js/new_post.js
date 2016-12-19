$(document).ready(function() {
  $('select').material_select();
  setAuthors();
});

function uploadBlog() {
	var route = SITE_BASE_URL + '/admin/blog/newpost';
	var method = 'POST';
	
	var body = new FormData($("#new_post_form")[0]);

	var request = $.ajax({
		url: route,
		method: method,
		type: "POST",
		processData: false,
		contentType: false,
		enctype: 'multipart/form-data',
		data: body
	});
	request.done(function(data){
		if(data.status_code == 200) {
			Materialize.toast('Post Added!', 4000, 'rounded');
			location.reload();
		} else {
			Materialize.toast('Upload Failed!', 4000, 'rounded');
			console.log(data.status_code + " " + data.message);
		}
	});
}

function setAuthors () {
	var route = SITE_BASE_URL + '/blog/getauthors';
	var method = 'POST';
	var request = $.ajax({
		url: route,
		method: method,
	});
	request.done(function(data){
		if(data.status_code == 200) {
		    var source = $('#author-name-dropdown').html();
		    var template = Handlebars.compile(source);
		    var html = template(data);
		    $('#author-name').append(html);
		    $('select').material_select();
		} else {
			Materialize.toast('Upload Failed!', 4000, 'rounded');
			console.log(data.status_code + " " + data.message);
		}
	});
}
