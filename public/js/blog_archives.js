$(document).ready(function() {
  getBlogPosts();
});

function getBlogPosts() {
	var route = SITE_BASE_URL + '/blog/getLatestPosts';
	var method = 'POST';
	var body = {
		'post_count': 150,
	}

	var request = $.ajax({
		url: route,
		method: method,
		data: body
	});

	request.done(function(data){
		if(data.status_code == 200) {
			console.log(data);
			var source = $('#main-template').html();
			var template = Handlebars.compile(source);
		    var html = template(data);
		    $('#main-container').append(html);
		} else {
			console.log(data.status_code + " " + data.message);
		}
	});
}