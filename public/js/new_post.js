$(document).ready(function() {
  $('select').material_select();
  $('#trumbowyg').trumbowyg();
});

window.setInterval(function(){
	// console.log($('#trumbowyg').html());
	console.log($('#main-form').serialize());
},1000);
