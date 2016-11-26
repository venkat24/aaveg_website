$(document).ready(function () {
	populateEvents();
});

function populateEvents() {
	var route = SITE_BASE_URL + '/events/getallnames';
	var method = 'POST';
	var request = $.ajax({
		url: route,
		method: method
	});
	request.done(function(data){
		if(data.status_code == 200) {
			var source = $('#dropdown-template').html();
			var template = Handlebars.compile(source);
			var html = template(data);
			console.log(html);
			$('#events-dropdown').append(html);
		} else {
			alert('Fetch Failed');
		}
	});
}