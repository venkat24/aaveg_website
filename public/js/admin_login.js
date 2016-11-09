function login() {
	var route = SITE_BASE_URL + '/admin/login';
	var method = 'POST';
	var username = $("#username").val();
	var password = $("#password").val();
	var body = {
		"admin_roll": username,
		"admin_pass": password
	}
	var request = $.ajax({
		url: route,
		method: method,
		data: body
	});
	request.done(function(data){
		if(data.status_code == 200) {
			location.href = SITE_BASE_URL + "/admin/home";
		} else {
			alert("Sorry! Login failed.");
		}
	});
}

function logout() {
	var route = SITE_BASE_URL + '/admin/logout';
	var method = 'POST';
	var request = $.ajax({
		url: route,
		method: method
	});
	request.done(function(data){
		if(data.status_code == 200) {
			location.href = SITE_BASE_URL + "/admin/login";
		} else {
			alert("Sorry! Logout failed.");
		}
	});
}