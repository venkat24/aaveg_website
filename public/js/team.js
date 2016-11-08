$(document).ready(function () {
	setCore();
	//setECore();
});
function setCore() {
	var source = $('#display-core').html();
	var template = Handlebars.compile(source);
	var base_url = SITE_BASE_URL + '/profile-images/'
	var core = [
		{
			"name":  "SM Aseer",
			"post":  "Chairman",
			"image": base_url + "Aseer.jpg"
		},
		{
			"name":  "Kritesh Patel",
			"post":  "Treasurer",
			"image": base_url + "Kritesh.jpg"
		},
		{
			"name":  "Jagan M",
			"post":  "Head, OC",
			"image": base_url + "Jagan.jpg"
		},
		{
			"name":  "Navya Shaji",
			"post":  "Head, OC",
			"image": base_url + "Navya.jpg"
		},
		{
			"name":  "Gautham K",
			"post":  "Head, Content",
			"image": base_url + "Gautham.jpg"
		},
		{
			"name":  "Arun Prakash",
			"post":  "Head, Design",
			"image": base_url + "ADP.jpg"
		},
	];
	var info={};
	info['core'] = core;
	var html = template(info);
	$('#main-container').append(html);
}
function setECore() {
	var source = $('#display-ecore').html();
	var template = Handlebars.compile(source);
	var base_url = SITE_BASE_URL + '/profile-images/'
	var core = [
		{
			"name":  "Pious Sharma",
			"post":  "Manager",
			"image": base_url + "Pious.jpg"
		},
		{
			"name":  "Rajive Kumar",
			"post":  "Manager",
			"image": base_url + "Rajive.jpg"
		},
		{
			"name":  "Sandhya K",
			"post":  "Manager",
			"image": base_url + "Sandhya.jpg"
		},
		{
			"name":  "Venkatraman",
			"post":  "Manager",
			"image": base_url + "Venkatraman.jpg"
		},
		{
			"name":  "Gunanidhi",
			"post":  "Manager",
			"image": base_url + "Guna.jpg"
		},
		{
			"name":  "Vishwa Sai",
			"post":  "Manager",
			"image": base_url + "Vishwa.jpg"
		},
	];
	var info={};
	info['core'] = core;
	var html = template(info);
	$('#main-container').append(html);
}
