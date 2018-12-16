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

/*--------------------------------*/
$(document).ready(function(){
  $('#index-navbar-logo').addClass('logo');
});

$(window).scroll(function(){
  if($(document).scrollTop() > 5){
    $('#index-navbar-logo').removeClass('logo-scroll');
    $('#index-navbar-logo').removeClass('logo');
    $('#index-navbar-logo').addClass('logo-scroll');
  }
  else{
    $('#index-navbar-logo').removeClass('logo-scroll');
    $('#index-navbar-logo').removeClass('logo');
    $('#index-navbar-logo').addClass('logo');
  }
});

/*--------------------------------*/
$(document).ready(function(){
  $('#title-logo').addClass('welcome');
});

$(window).scroll(function(){
  if($(document).scrollTop() > 5){
    $('#title-logo').removeClass('welcome_1');
    $('#title-logo').removeClass('welcome');
    $('#title-logo').addClass('welcome_1');
  }
  else{
    $('#title-logo').removeClass('welcome_1');
    $('#title-logo').removeClass('welcome');
    $('#title-logo').addClass('welcome');
  }
});