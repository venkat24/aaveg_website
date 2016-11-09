$(document).ready(function() {
	getBlog();
})
function getBlog() {
	var source = $("#blog-template").html();
	var template = Handlebars.compile(source);
	
	var id=4;
	var id=1;
	var route = SITE_BASE_URL + '/blog/getBlogById/';
	var method = 'POST';
	var body = {
		"blog_id" : id
	}
	var request = $.ajax({
		url: route,
		method: method,
		data: body
	});
	request.done(function(data){
		if(data.status_code == 200) {
			console.log(data.message.content);
			var html = template(data);
			$('#main-container').append(html);
		} else {
			alert('Failed');
		}
	});
}