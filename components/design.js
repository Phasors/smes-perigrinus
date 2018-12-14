$(document).ready(function(){
  $('nav').addClass('header_visible');
});

$(window).scroll(function(){
  if($(document).scrollTop() > 80){
    $('nav').removeClass('header_invisible');
    $('nav').removeClass('header_visible');
    $('nav').addClass('header_invisible');
    $('nav').addClass('fixed-top');
  }
  else{
    $('nav').removeClass('header_invisible');
    $('nav').removeClass('header_visible');
    $('nav').removeClass('fixed-top');
    $('nav').addClass('header_visible');
  }
});