$(document).ready(function() {
	getBlog();
})
function getBlog() {
	var source = $("#blog-template").html();
	var template = Handlebars.compile(source);
	
	var id=4;
	var blog_name="New Blog";
	var route = SITE_BASE_URL + '/admin/events/getBlogByTitle/' + id;
	var method = 'POST';
	var body = {
		// "blog_id" : id,
		"title" : blog_name
	}
	console.log(body);

	var request = $.ajax({
		url: route,
		method: method,
		data: body
	});
	request.done(function(data){
		if(data.message == "Success") {
			var context = data;
			var html = template(context);
			location.reload();
		} else {
			alert('Insertion Failed');
		}
	});
}