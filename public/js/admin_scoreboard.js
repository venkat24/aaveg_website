$(document).ready(function () {
	$('select').material_select();
	populateEvents();
});

function setScoreFields () {
	var route = SITE_BASE_URL + '/scoreboard/geteventscores';
	var method = 'POST';
	var body = {
		'event_name' : $('#events-dropdown').val()
	};
	var request = $.ajax({
		url: route,
		method: method,
		data: body
	});
	request.done(function(data){
		if(data.status_code === 200) {
			if(data.message[0] === undefined) {
				$("#diamond-score").val(0);
				$("#coral-score").val(0);
				$("#jade-score").val(0);
				$("#agate-score").val(0);
				$("#opal-score").val(0);
			} else {	
				$("#diamond-score").val(data.message[0]["diamond_score"]);
				$("#coral-score").val(data.message[0]["coral_score"]);
				$("#jade-score").val(data.message[0]["jade_score"]);
				$("#agate-score").val(data.message[0]["agate_score"]);
				$("#opal-score").val(data.message[0]["opal_score"]);
			}
		} else {
			alert('Please Specify an Event');
		}
	});
}

function setScores() {
	var route = SITE_BASE_URL + '/admin/scoreboard/newscore';
	var method = 'POST';
  var places = {
    first_place : [],
    second_place : [],
    third_place : [],
  };

  $('.first-place').find('input').each(function(){
    if(($(this).is(':checked'))) {
      places.first_place.push( $('label[for="' + this.id + '"]').html());
    }
  });
  $('.second-place').find('input').each(function(){
    if(($(this).is(':checked'))) {
      places.second_place.push( $('label[for="' + this.id + '"]').html());
    }
  });
  $('.third-place').find('input').each(function(){
    if(($(this).is(':checked'))) {
      places.third_place.push( $('label[for="' + this.id + '"]').html());
    }
  });
  
  console.log(places);


	var body = {
		'event_name' : $('#events-dropdown').val(),
		'diamond' : $('#diamond-score').val(),
		'coral' : $('#coral-score').val(),
		'agate' : $('#agate-score').val(),
		'jade' : $('#jade-score').val(),
		'opal' : $('#opal-score').val(),
    'first_place' : places.first_place.join(', '),
    'second_place' : places.second_place.join(', '),
    'third_place' : places.third_place.join(', '),
	};
	console.log(body);
	var request = $.ajax({
		url: route,
		method: method,
		data: body
	});
	request.done(function(data){
		if(data.status_code === 200) {
			console.log(data);
			Materialize.toast('Scores Updated!', 4000, 'rounded');
		} else {
			Materialize.toast('Score Updation FAILED!', 4000, 'rounded');
			alert("Updation FAILED");
		}
	});
}

function populateEvents() {
	var route = SITE_BASE_URL + '/events/getallnames';
	var method = 'POST';
	var request = $.ajax({
		url: route,
		method: method
	});
	request.done(function(data){
		if(data.status_code === 200) {
			var source = $('#author-name-dropdown').html();
			var template = Handlebars.compile(source);
			var html = template(data);
			$('#events-dropdown').append(html);
			$('select').material_select();
		} else {
			alert('Fetch Failed');
		}
	});
}
