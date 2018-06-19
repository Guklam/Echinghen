/**
 * Menu qui s'affiche au scroll sur l'index
 */
$(window).bind('scroll', function() {
var windowWidth = $(window).width();
var chemin = $(location).attr('href');;
if(chemin == "http://localhost/Echinghen/") {
if(windowWidth < 1200) {
    if ($(window).scrollTop() > 0) {
        $('.header__menu').addClass('fixed');
    } 
    else {
        $('.header__menu').removeClass('fixed');
    }

    if ($(window).scrollTop() > $('.header').height()) {
        $('.header__menu').css({
            "background": "url(images/background-test-2.jpg)",
            "background-size": "cover", 
            "background-position":"center",
            "z-index":"999"
    });
    }
    else {
        $('.header__menu').css('background', 'transparent');
    }
}
else {
    return;
}
}});