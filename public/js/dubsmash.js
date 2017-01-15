$(document).ready(function() {
  submitDubsmash();
});

function submitDubsmash() {
	var route = SITE_BASE_URL + '/events/submitDubsmash';
	var method = 'POST';

	var request = $.ajax({
		url: route,
		method: method,
		data: body
	});

	request.done(function(data){
		if(data.status_code == 200) {
		} else {
		}
	});
}
