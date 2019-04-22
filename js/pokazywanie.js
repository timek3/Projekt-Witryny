$(function() {
    $('#nav-boczne').hide();
    $(window).scroll(function() {
    var scroll = $(window).scrollTop();
        if (scroll >= 500) {
            $('#nav-boczne').fadeIn();
        } else {
            $('#nav-boczne').fadeOut();
        }
  });
})

$(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});