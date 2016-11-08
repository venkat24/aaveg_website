$(document).ready(function () {
	getScoreboard();
});
function getScoreboard() {
	var route = SITE_BASE_URL + '/scoreboard/getall';
	var method = 'POST';
	var request = $.ajax({
		url: route,
		method: method,
	});
	request.done(function(data){
		if(data.status_code == 200) {
			setScores(data);
		} else {
			alert('Insertion Failed');
		}
	});
}

function setScores(info) {
	var culturals = {
		diamond: 0,
		coral: 0,
		jade: 0,
		agate: 0,
		opal: 0,
	};

	var misc = {
		diamond: 0,
		coral: 0,
		jade: 0,
		agate: 0,
		opal: 0,
	};

	var sports = {
		diamond: 0,
		coral: 0,
		jade: 0,
		agate: 0,
		opal: 0,
	};

	if(info.message["Culturals"]) {
		for (var i = info.message["Culturals"].length - 1; i >= 0; i--)
			culturals.diamond+=info.message["Culturals"][i]["diamond_score"];
		for (var i = info.message["Culturals"].length - 1; i >= 0; i--)
			culturals.coral+=info.message["Culturals"][i]["coral_score"];
		for (var i = info.message["Culturals"].length - 1; i >= 0; i--)
			culturals.jade+=info.message["Culturals"][i]["jade_score"];
		for (var i = info.message["Culturals"].length - 1; i >= 0; i--)
			culturals.agate+=info.message["Culturals"][i]["agate_score"];
		for (var i = info.message["Culturals"].length - 1; i >= 0; i--)
			culturals.opal+=info.message["Culturals"][i]["opal_score"];
	}

	if(info.message["Sports"]) {
		for (var i = info.message["Sports"].length - 1; i >= 0; i--) 
			sports.diamond+=info.message["Sports"][i]["diamond_score"];
		for (var i = info.message["Sports"].length - 1; i >= 0; i--) 
			sports.coral+=info.message["Sports"][i]["coral_score"];
		for (var i = info.message["Sports"].length - 1; i >= 0; i--) 
			sports.jade+=info.message["Sports"][i]["jade_score"];
		for (var i = info.message["Sports"].length - 1; i >= 0; i--) 
			sports.agate+=info.message["Sports"][i]["agate_score"];
		for (var i = info.message["Sports"].length - 1; i >= 0; i--) 
			sports.opal+=info.message["Sports"][i]["opal_score"];
	}

	if(info.message["Miscellaneous"]) {
		for (var i = info.message["Miscellaneous"].length - 1; i >= 0; i--) 
			misc.diamond+=info.message["Miscellaneous"][i]["diamond_score"];
		for (var i = info.message["Miscellaneous"].length - 1; i >= 0; i--) 
			misc.coral+=info.message["Miscellaneous"][i]["coral_score"];
		for (var i = info.message["Miscellaneous"].length - 1; i >= 0; i--) 
			misc.jade+=info.message["Miscellaneous"][i]["jade_score"];
		for (var i = info.message["Miscellaneous"].length - 1; i >= 0; i--) 
			misc.agate+=info.message["Miscellaneous"][i]["agate_score"];
		for (var i = info.message["Miscellaneous"].length - 1; i >= 0; i--) 
			misc.opal+=info.message["Miscellaneous"][i]["opal_score"];	
	}
	info.message["culturals_total"]=culturals;
	info.message["sports_total"]=sports;
	info.message["misc_total"]=misc;
	var source = $('#display').html();
	var template = Handlebars.compile(source);
	var html = template(info);
	$('#main-container').append(html);
}