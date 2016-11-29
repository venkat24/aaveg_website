$(document).ready(function() {
	addBlogLinks();
});

function addBlogLinks() {
	var route = SITE_BASE_URL + '/blog/getLatestPosts';
	var method = 'POST';
	var body = {
		'post_count': 5,
	}

	var request = $.ajax({
		url: route,
		method: method,
		data: body
	});

	request.done(function(data){
		if(data.status_code == 200) {
			var source = $('#links-layout').html();
			var template = Handlebars.compile(source);
		    var html = template(data);
		    $('#links-list-container').append(html);
		} else {
			console.log(data.status_code + " " + data.message);
		}
	});
}