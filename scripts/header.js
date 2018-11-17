$(document).ready(function(){
$('#nav-icon').click(function(){
  $(this).toggleClass('open');
  $('.main-nav').toggleClass('responsive');
});
});
// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();
$(window).scroll(function(event){
  console.log("yolo");
    didScroll = true;
    $('.main-nav').addClass('navbar-color');

});
setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);
function hasScrolled() {
    var st = $(this).scrollTop();
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('.header-container').addClass('nav-collapse');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('.header-container').removeClass('nav-collapse');
        }
    }
    lastScrollTop = st;
}
