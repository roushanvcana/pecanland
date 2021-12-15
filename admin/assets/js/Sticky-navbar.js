// On Scroll NavBar Fixed

$(window).on('scroll', function () {
    if ($(window).width() > 100) {
        if ($(window).scrollTop() > 100) {
            $('#sticky-nav').addClass('navbar-fixed-top');
            $('#back-to-top').addClass('reveal');
        } else {
            $('#sticky-nav').removeClass('navbar-fixed-top');
            $('#back-to-top').removeClass('reveal');
        }
    }
});

$('#back-to-top').on('click', function () {
    $("html, body").animate({
        scrollTop: 0
    }, 1000);
    return false;
});