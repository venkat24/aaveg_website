$(document).ready(function () {
	setCore();
	setTeam();
	setWeb();
	$(".web-image").hover(function () {
		var headers = $(".code");
		for (var i = headers.length - 1; i >= 0; i--) {
			headers[i].style.transition = "all 1.5s";
			headers[i].style.color="lightgreen";
		}

	});
	$(".web-image").mouseleave(function () {
		var headers = $(".code");
		for (var i = headers.length - 1; i >= 0; i--) {
			headers[i].style.transition = "all 1.5s";
			headers[i].style.color="white";
		}
	});
});
function setCore() {
	var source = $('#display-core').html();
	var template = Handlebars.compile(source);
	var base_url = SITE_BASE_URL + '/profile-images/'
	var core = [
		{
			"name":  "SM Aseer",
			"post":  "Chairman",
			"image": base_url + "IMG_6056.jpg"
		},
		{
			"name":  "Kritesh Patel",
			"post":  "Treasurer",
			"image": base_url + "IMG_6069.jpg"
		},
		{
			"name":  "Jagan M",
			"post":  "Head, OC",
			"image": base_url + "IMG_6047.jpg"
		},
		{
			"name":  "Navya Shaji",
			"post":  "Head, OC",
			"image": base_url + "IMG_6038.jpg"
		},
		{
			"name":  "Gautham K",
			"post":  "Head, Content",
			"image": base_url + "IMG_6058.jpg"
		},
		{
			"name":  "Arun Prakash R",
			"post":  "Head, Design",
			"image": base_url + "IMG_6024.jpg"
		},
		{
			"name":  "Pious Sharma",
			"post":  "Manager",
			"image": base_url + "Pious.jpg"
		},
		{
			"name":  "Rajive Kumar",
			"post":  "Manager",
			"image": base_url + "IMG_6044.jpg"
		},
		{
			"name":  "Sandhya K",
			"post":  "Manager",
			"image": base_url + "IMG_6033.jpg"
		},
		{
			"name":  "Venkatraman",
			"post":  "Manager",
			"image": base_url + "IMG_6073.jpg"
		},
		{
			"name":  "Gunanidhi",
			"post":  "Manager",
			"image": base_url + "IMG_6066.jpg"
		},
		{
			"name":  "Vishwa Sai",
			"post":  "Manager",
			"image": base_url + "IMG_6052.jpg"
		},
	];
	var info={};
	info['core'] = core;
	var html = template(info);
	$('#main-container').append(html);
}

function setWeb() {
	var source = $('#display-web').html();
	var template = Handlebars.compile(source);
	var base_url = SITE_BASE_URL + '/profile-images/'
	var core = [
		{
			"name":  "Venkatraman",
			"post":  "Web Developer",
			"image": base_url + "IMG_6073.jpg"
		},
		{
			"name":  "Deep",
			"post":  "Web Developer",
			"image": base_url + "Deep.jpg"
		},
		{
			"name":  "Gautham",
			"post":  "App Developer",
			"image": base_url + "IMG_6058.jpg"
		},
		{
			"name":  "Ajay",
			"post":  "App Developer",
			"image": base_url + "Ajay.jpg"
		},
		{
			"name":  "Sundar",
			"post":  "Web Developer",
			"image": base_url + "Sundar.jpg"
		},
		{
			"name":  "ADP",
			"post":  "Designer",
			"image": base_url + "IMG_6024.jpg"
		},
	];
	var info={};
	info['core'] = core;
	var html = template(info);
	$('#main-container').append(html);
}


function setTeam() {
	var source = $('#display-team').html();
	var template = Handlebars.compile(source);
	var base_url = SITE_BASE_URL + '/profile-images/'
	var team = [
		{
			"name":  "Avinash",
			"post":  "Content Writer",
			"image": base_url + "IMG_5804.jpg"
		},
		{
			"name":  "Tanvi",
			"post":  "Content Writer",
			"image": base_url + "IMG_5802.jpg"
		},
		{
			"name":  "Anirudh",
			"post":  "Content Writer",
			"image": base_url + "IMG_5808.jpg"
		},
		{
			"name":  "Kiran",
			"post":  "Content Writer",
			"image": base_url + "IMG_5811.jpg"
		},
		{
			"name":  "Mathirush",
			"post":  "Content Writer",
			"image": base_url + "IMG_5812.jpg"
		},
		{
			"name":  "Bhargava",
			"post":  "Organizer",
			"image": base_url + "IMG_5795.jpg"
		},
				{
			"name":  "Soundarya",
			"post":  "Organizer",
			"image": base_url + "IMG_5816.jpg"
		},
		{
			"name":  "Dharshana",
			"post":  "Organizer",
			"image": base_url + "IMG_5820.jpg"
		},
		{
			"name":  "Harshita",
			"post":  "Organizer",
			"image": base_url + "IMG_5822.jpg"
		},
		{
			"name":  "Shwetha",
			"post":  "Organizer",
			"image": base_url + "IMG_5828.jpg"
		},
		// {
		// 	"name":  "Nandini",
		// 	"post":  "Organizer",
		// 	"image": base_url + "IMG_9000.jpg"
		// },
		{
			"name":  "Niharika",
			"post":  "Organizer",
			"image": base_url + "IMG_5829.jpg"
		},
		{
			"name":  "Anushka",
			"post":  "Organizer",
			"image": base_url + "IMG_5836.jpg"
		},
		{
			"name":  "Haripriya",
			"post":  "Organizer",
			"image": base_url + "IMG_5843.jpg"
		},
		{
			"name":  "Varshaa",
			"post":  "Organizer",
			"image": base_url + "IMG_5846.jpg"
		},
		{
			"name":  "Janani",
			"post":  "Organizer",
			"image": base_url + "IMG_5850.jpg"
		},
		{
			"name":  "Akshaya",
			"post":  "Organizer",
			"image": base_url + "IMG_5856.jpg"
		},
		{
			"name":  "Shivani",
			"post":  "Organizer",
			"image": base_url + "IMG_5861.jpg"
		},
		{
			"name":  "Veena",
			"post":  "Organizer",
			"image": base_url + "IMG_5864.jpg"
		},
		{
			"name":  "Sanjeedha",
			"post":  "Organizer",
			"image": base_url + "IMG_5866.jpg"
		},
		{
			"name":  "Deepti",
			"post":  "Organizer",
			"image": base_url + "IMG_5871.jpg"
		},
		{
			"name":  "Kavya",
			"post":  "Organizer",
			"image": base_url + "IMG_5882.jpg"
		},
		{
			"name":  "Aaryan",
			"post":  "Organizer",
			"image": base_url + "IMG_5889.jpg"
		},
		{
			"name":  "Shubham",
			"post":  "Organizer",
			"image": base_url + "IMG_5892.jpg"
		},
		{
			"name":  "Naveen",
			"post":  "Organizer",
			"image": base_url + "IMG_5894.jpg"
		},
		{
			"name":  "Nikhilesh",
			"post":  "Organizer",
			"image": base_url + "IMG_5899.jpg"
		},
		{
			"name":  "Deshik",
			"post":  "Organizer",
			"image": base_url + "IMG_5911.jpg"
		},
		{
			"name":  "Palani",
			"post":  "Organizer",
			"image": base_url + "IMG_5914.jpg"
		},
		{
			"name":  "Shubham",
			"post":  "Organizer",
			"image": base_url + "IMG_5917.jpg"
		},
		{
			"name":  "Devang",
			"post":  "Organizer",
			"image": base_url + "IMG_5920.jpg"
		},
		{
			"name":  "Mohshin",
			"post":  "Organizer",
			"image": base_url + "IMG_5923.jpg"
		},
		{
			"name":  "Snehith",
			"post":  "Organizer",
			"image": base_url + "IMG_5925.jpg"
		},
		{
			"name":  "Koushik",
			"post":  "Organizer",
			"image": base_url + "IMG_5928.jpg"
		},
		{
			"name":  "Ram",
			"post":  "Organizer",
			"image": base_url + "IMG_5935.jpg"
		},
		{
			"name":  "Kishore",
			"post":  "Organizer",
			"image": base_url + "IMG_5938.jpg"
		},
		{
			"name":  "Sathya",
			"post":  "Organizer",
			"image": base_url + "IMG_5940.jpg"
		},
		{
			"name":  "Tejus",
			"post":  "Organizer",
			"image": base_url + "IMG_5944.jpg"
		},
		{
			"name":  "Anant",
			"post":  "Organizer",
			"image": base_url + "IMG_5946.jpg"
		},
		{
			"name":  "Rishabh",
			"post":  "Organizer",
			"image": base_url + "IMG_5950.jpg"
		},
		{
			"name":  "Akaash",
			"post":  "Organizer",
			"image": base_url + "IMG_5956.jpg"
		},
		{
			"name":  "Avneesh",
			"post":  "Organizer",
			"image": base_url + "IMG_5957.jpg"
		},
		{
			"name":  "Shankar",
			"post":  "Organizer",
			"image": base_url + "IMG_5960.jpg"
		},
		{
			"name":  "Huzaifa",
			"post":  "Organizer",
			"image": base_url + "IMG_5964.jpg"
		},
		{
			"name":  "Vibashan",
			"post":  "Organizer",
			"image": base_url + "IMG_5968.jpg"
		},
		{
			"name":  "Benedict",
			"post":  "Organizer",
			"image": base_url + "IMG_5973.jpg"
		},
		{
			"name":  "Santhosh",
			"post":  "Organizer",
			"image": base_url + "IMG_5979.jpg"
		},
		{
			"name":  "Umair",
			"post":  "Organizer",
			"image": base_url + "IMG_5981.jpg"
		},
		{
			"name":  "Krishna",
			"post":  "Organizer",
			"image": base_url + "IMG_5989.jpg"
		},
		{
			"name":  "Hari Krishnan",
			"post":  "Organizer",
			"image": base_url + "IMG_5991.jpg"
		},
		{
			"name":  "Akash",
			"post":  "Organizer",
			"image": base_url + "IMG_5995.jpg"
		},
		{
			"name":  "Reo Paul",
			"post":  "Organizer",
			"image": base_url + "IMG_6002.jpg"
		},
		{
			"name":  "Anirudh",
			"post":  "Organizer",
			"image": base_url + "IMG_6006.jpg"
		},
		{
			"name":  "Ankit",
			"post":  "Organizer",
			"image": base_url + "IMG_6014.jpg"
		},
		{
			"name":  "Raahul",
			"post":  "Organizer",
			"image": base_url + "IMG_6082.jpg"
		},
		{
			"name":  "Bhavana",
			"post":  "Organizer",
			"image": base_url + "IMG_5880.jpg"
		},
		{
			"name":  "Saksham",
			"post":  "Organizer",
			"image": base_url + "IMG_5962.jpg"
		},
		{
			"name":  "Anirudh",
			"post":  "Organizer",
			"image": base_url + "IMG_6006.jpg"
		},
		{
			"name":  "Rakshith",
			"post":  "Organizer",
			"image": base_url + "IMG_6005.jpg"
		},
		{
			"name":  "Rithvik",
			"post":  "Organizer",
			"image": base_url + "IMG_5983.jpg"
		},
		{
			"name":  "Praveen",
			"post":  "Organizer",
			"image": base_url + "IMG_6000.jpg"
		},
		{
			"name":  "Vamsi",
			"post":  "Organizer",
			"image": base_url + "IMG_6011.jpg"
		},
		{
			"name":  "Nivedita",
			"post":  "Designer",
			"image": base_url + "IMG_5858.jpg"
		},
		{
			"name":  "Arun Kumar",
			"post":  "Designer",
			"image": base_url + "IMG_5900.jpg"
		},
		{
			"name":  "Abhilash",
			"post":  "Designer",
			"image": base_url + "IMG_5909.jpg"
		},
		{
			"name":  "Abishek",
			"post":  "Designer",
			"image": base_url + "IMG_5930.jpg"
		},
		{
			"name":  "Yeshwanth",
			"post":  "Organizer",
			"image": base_url + "IMG_5977.jpg"
		},
		{
			"name":  "Ashwin",
			"post":  "Organizer",
			"image": base_url + "IMG_9003.jpg"
		},
	];
	team=shuffle(team);
	var info={};
	info['team'] = team;
	var html = template(info);
	$('#main-container').append(html);
}
function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;
  while (0 !== currentIndex) {
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }
  return array;
}
