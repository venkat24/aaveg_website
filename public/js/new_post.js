$(document).ready(function() {
  $('select').material_select();
  // $('#trumbowyg').trumbowyg();
});

function uploadBlog() {
	var route = SITE_BASE_URL + '/admin/blog/newpost';
	var method = 'POST';
	var active = 0;
	if($("#active").is(":checked")){
		active=1;
	}
	console.log($("#image")[0]);
	var body = new FormData();
	body.append("title", $("#title").val());
	body.append("subtitle", $("#subtitle").val());
	body.append("author_name", $("#author").val());
	body.append("image", $('#image')[0]);
	body.append("content", $("#content").val());
	body.append("active", active);
	console.log(body);
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
			conosole.log("Success!")
			// location.href = SITE_BASE_URL + "/admin/home";
		} else {
			alert("Upload Failed");
		}
	});
}