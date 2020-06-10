$(document).ready(function(){
    var timeout;
    var x = 0
    let carousel = "#mainCarousel"
    $(carousel).carousel({interval: false});
    $(carousel).bind('slide.bs.carousel', function(e){
        x = 0;
    });

    function loadTimer() {
            if (x >= 100){
                clearTimeout(timeout);
                $(carousel).carousel("next");
            } else {
            $(".progressBar").css('width',x +"%");
            }

    timeout = setTimeout(() => {
        x += 0.1 // Sets speed. Default is 0.1
        // console.log(x)
        loadTimer()
    }, 10);
    }
    loadTimer()
    
});

function nav_relocate() {
    var window_top = $(window).scrollTop();
    var bottom = $('#navbar-spacer').offset().top;
    bottom -= 20;
    if (window_top < bottom) {
        $('#nav').addClass('navbar-dark');
        $('#nav').removeClass('navbar-light');
        // console.log("true")
    } else {
        $('#nav').removeClass('navbar-dark');
        $('#nav').addClass('navbar-light');
        // console.log("false")
    }
}

$(function() {
    $(window).scroll(nav_relocate);
    nav_relocate();
});