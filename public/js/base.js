$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed === true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});

function logout() {
    var request = $.ajax({
        url: SITE_BASE_URL + '/logout',
        type: "POST",
    });
    request.done(function (data) {
        console.log(data);
        if(data.status_code == 200) {
            location.reload();
        } else {
            alert('Logout Failed');
        }
    });
}
