$(document).ready(function() {
});

function submitDubsmash() {
	var route = SITE_BASE_URL + '/events/online/dubsmash';
	var method = 'POST';
  var body = new FormData($('#dubsmash-form')[0]);
	var request = $.ajax({
		url: route,
		method: method,
		type: "POST",
		processData: false,
		contentType: false,
		enctype: 'multipart/form-data',
		data: body
	});
  console.log(body);
  console.log(request);
	request.done(function(data){
		if(data.status_code == 200) {
		  console.log(JSON.stringify(data));
		} else {
		  console.log(JSON.stringify(data));
		}
	});
}
