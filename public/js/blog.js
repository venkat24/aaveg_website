$(document).ready(function() {
  getBlogPosts();
});

function getBlogPosts() {
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
			var main_pane = data.message.shift();

			var source = $('#main-pane').html();
			var template = Handlebars.compile(source,{
				noEscape: true
			});
		    var html = template(main_pane);
		    $('#main-pane-container').append(html);

		    source = $('#blog-panes').html();
			template = Handlebars.compile(source,{
				noEscape: true
			});
		    html = template(data);
		    $('#blog-panes-container').append(html);
		} else {
			console.log(data.status_code + " " + data.message);
		}
	});
}