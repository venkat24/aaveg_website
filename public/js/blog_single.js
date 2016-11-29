$(document).ready(function() {
	getBlog();
});

function getBlog() {
	var route = SITE_BASE_URL + '/blog/getBlogById/';
	var method = 'POST';
	var base_url = SITE_BASE_URL + '/profile-images/';
	var currpath = window.location.pathname.split('/');
	var id = currpath[currpath.length - 1];
	console.log(currpath);
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
			var author_captions = {
				"Gautham Kumar" : {
					"image_path" : base_url + "IMG_6058.jpg",
					"caption"	 : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut leo a nibh efficitur hendrerit. Vivamus a rhoncus diam, quis ullamcorper nisi. Curabitur mollis quis nunc at ultrices. Quisque ex dui, tempus et dignissim venenatis, rutrum vitae dui."
				},
				"Tanvi Kumar" : {
					"image_path" : base_url + "IMG_5802.jpg",
					"caption"	 : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut leo a nibh efficitur hendrerit. Vivamus a rhoncus diam, quis ullamcorper nisi. Curabitur mollis quis nunc at ultrices. Quisque ex dui, tempus et dignissim venenatis, rutrum vitae dui."
				},
				"Avinash Tadavarthy" : {
					"image_path" : base_url + "IMG_5804.jpg",
					"caption"	 : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut leo a nibh efficitur hendrerit. Vivamus a rhoncus diam, quis ullamcorper nisi. Curabitur mollis quis nunc at ultrices. Quisque ex dui, tempus et dignissim venenatis, rutrum vitae dui."
				},
				"Anirudh Banerjee" : {
					"image_path" : base_url + "IMG_5808.jpg",
					"caption"	 : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut leo a nibh efficitur hendrerit. Vivamus a rhoncus diam, quis ullamcorper nisi. Curabitur mollis quis nunc at ultrices. Quisque ex dui, tempus et dignissim venenatis, rutrum vitae dui."
				},
				"Mathirush S" : {
					"image_path" : base_url + "IMG_5812.jpg",
					"caption"	 : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut leo a nibh efficitur hendrerit. Vivamus a rhoncus diam, quis ullamcorper nisi. Curabitur mollis quis nunc at ultrices. Quisque ex dui, tempus et dignissim venenatis, rutrum vitae dui."
				},
				"Kiran Krishnan" : {
					"image_path" : base_url + "IMG_5811.jpg",
					"caption"	 : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut leo a nibh efficitur hendrerit. Vivamus a rhoncus diam, quis ullamcorper nisi. Curabitur mollis quis nunc at ultrices. Quisque ex dui, tempus et dignissim venenatis, rutrum vitae dui."
				}
			}
			var current_author = data.message["author_name"];
			var current_author_caption = author_captions[current_author];
			data.message["author_captions"] = current_author_caption;
			var source = $("#content-template").html();
			var template = Handlebars.compile(source);
			var html = template(data);
			$('#content-container').append(html);
			$('#main-content').html(data.message["content"]);
		} else {
			alert('Not found!');
			location.href = "/blog";
		}
	});
}