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
    nav_relocate();
});

function nav_relocate() {
    var window_top = $(window).scrollTop();
    var bottom = $('#navbar-spacer').offset().top;
    bottom -= 40; // How close to get before changing colour
    if (window_top < bottom) { // Checks if the navbar is getting close to the spacer and if it is it auto changes the text colour
        $('#nav').addClass('navbar-dark');
        $('#nav').removeClass('navbar-light');
        // console.log("true")
    } else {
        $('#nav').removeClass('navbar-dark');
        $('#nav').addClass('navbar-light');
        // console.log("false")
    }
}

$(window).scroll(nav_relocate); // runs check when scrolling this is a simple piece of code so its fine to add to the scroll as it doesnt cause any lag

$(function() {
    $(document).click(function (event) {
      $('.navbar-collapse').collapse('hide');
    });
  });