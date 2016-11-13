$(window).load(function() {
  setTimeout(function() {
    drawTagline1();
  }, 7000);
  setTimeout(function() {
    drawTagline2();
  }, 8000);
  function playAudio(){
    var audio = $("#audio")[0];
    audio.play();
  } 
});

function drawTagline1() {
  $('#tagline-container1').css("visibility","visible");
  var $all_msg = $('#tagline-container1');
  var $wordList = $('#tagline-container1').text().split("");
  $('#tagline-container1').text("");
  $.each($wordList, function(idx, elem) {
    var newEL = $("<span/>").text(elem).css({
      opacity: 0
    });
    newEL.appendTo($all_msg);
    newEL.delay(idx * 70);
    newEL.animate({
      opacity: 1
    }, 1100);
  });
}

function drawTagline2() {
  $('#tagline-container2').css("visibility","visible");
  var $all_msg = $('#tagline-container2');
  var $wordList = $('#tagline-container2').text().split("");
  $('#tagline-container2').text("");
  $.each($wordList, function(idx, elem) {
    var newEL = $("<span/>").text(elem).css({
      opacity: 0
    });
    newEL.appendTo($all_msg);
    newEL.delay(idx * 70);
    newEL.animate({
      opacity: 1
    }, 1100);
  });
}
