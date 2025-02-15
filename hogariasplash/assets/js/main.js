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
  $('.herobanner').slick({
    dots: false,
    prevArrow: '<button class="slick-prev icon-prev">Prev</button>',
    nextArrow: '<button class="slick-next icon-next">Next</button>',
    infinite: true,
    speed: 1500,
    slidesToShow: 1,
    adaptiveHeight: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
    pauseOnHover: false,
    pauseOnFocus: false,
    responsive: [
      {
        breakpoint: 767,
        settings: {
        arrows: false,
        dots: true,
        }
      }
    ]
  });
  //Gallery
  $('.gallery').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 1500,
    slidesToShow: 1,
    adaptiveHeight: true,
    fade: false,
    autoplay: true,
    autoplaySpeed: 5000,
    pauseOnHover: false,
    pauseOnFocus: false
  });
  //Herobanner
  $('.customers').slick({
    dots: true,
    infinite: false,
    arrows: false,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 2,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          infinite: true,
          arrows: false,
          autoplay: true,
          autoplaySpeed: 2000
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          arrows: false,
          autoplay: true,
          autoplaySpeed: 2000
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          arrows: false,
          autoplay: true,
          autoplaySpeed: 2000
        }
      }
    ]
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