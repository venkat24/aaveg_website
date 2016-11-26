function submit() {
	var route = SITE_BASE_URL + '/admin/events/newevent';
	var method = 'POST';
	var event_date_raw = $('#event_date').val();
	var event_date_obj = new Date(event_date_raw);
	var event_date = event_date_obj.getFullYear()+'-' + (event_date_obj.getMonth()+1) + '-'+event_date_obj.getDate();
	var body = {
		"event_name" : $('#event_name').val(),
		"event_desc" : $('#event_desc').val(),
		"event_start_time" : $('#event_start_time').val(),
		"event_end_time" : $('#event_end_time').val(),
		"event_date" : event_date,
		"event_category" : $('#event_category').val(),
		"event_cluster" : $('#event_cluster').val(),
		"event_venue" : $('#event_venue').val()
	}
	var request = $.ajax({
		url: route,
		method: method,
		data: body
	});
	request.done(function(data){
		if(data.message == "Success") {
			Materialize.toast('Event Added!', 4000, 'rounded');
			$('#event_name').val("");
			$('#event_desc').val("");
			$('#event_start_time').val("");
			$('#event_end_time').val("");
			$('#event_date').val("");
			$('#event_category').val("Culturals");
			$('#event_cluster').attr('selected',true);
			$('#event_venue').val("");
			location.reload();
		} else {
			alert('Insertion Failed');
		}
	});
}