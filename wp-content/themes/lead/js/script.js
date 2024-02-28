$(window).scroll(function(){
  if ($(window).scrollTop() >= 350) {
    $('header').addClass('fixed');
   }
   else {
    $('header').removeClass('fixed');
   }
});

$(".hamburger").click(function(){
    $(this).toggleClass("is-active");
    $('nav').toggleClass("open");
    $('html').toggleClass("no_scroll");
  }); 