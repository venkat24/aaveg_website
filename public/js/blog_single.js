$(document).ready(function() {
	getBlog();
});

function getBlog() {
	var route = SITE_BASE_URL + '/blog/getBlogById';
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
					"caption"	 : "Blogger. Day dreamer. <br><br> Approachable, outgoing, tall wheatish person. Writes to express. <br><br>Also, I'm fluffy."
				},
				"Tanvi Kumar" : {
					"image_path" : base_url + "IMG_5802.jpg",
					"caption"	 : "Blogger. Day dreamer. <br><br Approachable, outgoing, tall wheatish person. <br><br>Writes to express. Also, I'm fluffy."
				},
				"Avinash Tadavarthy" : {
					"image_path" : base_url + "IMG_5804.jpg",
					"caption"	 : "A Telugu speaking chennaiite who is independent, curious, ever-hungry and a bit too lazy. <br><br>Give me any song, I can dance for it. Give me any topic, I will write about it."
				},
				"Anirudh Banerjee" : {
					"image_path" : base_url + "IMG_5808.jpg",
					"caption"	 : "Lazy. Optimistic. Meticulous. Pedantic. Fascinating. <br><br>I am a multicultural Bengali who loves everything under the sun as long as it isn't in LHC."
				},
				"Mathirush S" : {
					"image_path" : base_url + "IMG_5812.jpg",
					"caption"	 : "Lost in the Patterns of Music, Sport and Life. <br><br>A Man of Few Words. <br><br>Quoraholic but still stuck in Eternal Sonder. Also, mildly OCD."
				},
				"Kiran Krishnan" : {
					"image_path" : base_url + "IMG_5811.jpg",
					"caption"	 : "A perpetually sleep deprived and hungry human being who writes and plays basketball. <br><br>I'm a Mallu who never became one of them #mwonjanz"
				}
			}
			var current_author = data.message["author_name"];
			var current_author_caption = author_captions[current_author];
			data.message["author_captions"] = current_author_caption;
			var source = $("#content-template").html();
			var template = Handlebars.compile(source,{
				noEscape: true
			});
			var html = template(data);
			$('#content-container').append(html);
			$('#main-content').html(data.message["content"]);
		} else {
			alert('Not found!');
			location.href = "/blog";
		}
	});
}
