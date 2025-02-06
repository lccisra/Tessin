(function($) { "use strict";

  //WOW
  new WOW().init();
  //Header smaller
  $(window).scroll(function() {
    if ($(window).scrollTop() >= 80) {
      $('header').addClass('smaller');
    } else {
      $('header').removeClass('smaller');
    }
  });

}(jQuery));

$(document).ready(function(){
  //Mobile menu
  $('.hamburger').click(function(){
    $('body').addClass('open-menu');
  });
  $('.close-menu').click(function(){
    $('body').removeClass('open-menu');
  });

  $(".hamburger").click(function() {
    var ancho = "";
    var ventana = $(window).width();
    if(ventana < 426) {
      ancho = "100%";
    } else {
      ancho = "350px";
    }
    $('#mobile-menu').animate({
      right: "0px",
      width: ancho
    }, 300, function() {
      statusmenu = "abierto";
    });
  });
  $(".close-menu").click(function() {
    $('#mobile-menu').animate({
        right: "-350px",
        width: "350px"
    }, 300, function() {
      statusmenu = "cerrado";
    });
  });

  //Herobanner
 $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    focusOnSelect: true
  });
  //
  $('.product-services').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 1500,
    autoplay: true,
    autoplaySpeed: 3000,
    pauseOnHover: false,
    pauseOnFocus: false,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  //Scroll
  $('.scroll').click(function(){
    var $anchor = $(this);
    $('html, body').stop().animate({ scrollTop: $($anchor.attr('href')).offset().top + -60 }, 1000);
    return false;
  });

  //Fancybox
  $('.fancybox').fancybox();
  $('.fancybox-media')
    .attr('rel', 'media-gallery')
    .fancybox({
      openEffect : 'none',
      closeEffect : 'none',
      prevEffect : 'none',
      nextEffect : 'none',

      arrows : false,
      helpers : {
        media : {},
        buttons : {}
      }
    });
});