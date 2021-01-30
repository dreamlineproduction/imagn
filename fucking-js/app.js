$(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 1600) {
        $('.bottomMenu').fadeIn();
    } else {
        $('.bottomMenu').fadeOut();
    }

});