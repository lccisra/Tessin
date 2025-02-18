(function($) { "use strict";

  //New window scroll
  if (window.location.hash) {
      var hash = window.location.hash;
      $('html, body').animate({
          scrollTop :  $(hash).offset().top + -90
      }, 2000);
  };

  //Wow
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
    dots: true,
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

  //Testimonials
  $('.slider-for').slick({
    centerMode: true,
    centerPadding: '133px',
    slidesToShow: 1,
    dots: false,
    arrows: false,
    autoplay: false,
    autoplaySpeed: 6000,
    asNavFor: '.slider-nav',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          centerPadding: '0px',
          slidesToShow: 1
        }
      }
    ]
  });
  $('.slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    centerMode: true,
    focusOnSelect: true, 
    adaptiveHeight: true
  });

  //Customers
  $('.customers').slick({
    dots: true,
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 6,
    slidesToScroll: 6,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: false
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
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
    
   //Accordeon
   $('.acc__title').click(function(j) {
    var dropDown = $(this).closest('.acc__card').find('.acc__panel');
    $(this).closest('.acc').find('.acc__panel').not(dropDown).slideUp();
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
    } else {
      $(this).closest('.acc').find('.acc__title.active').removeClass('active');
      $(this).addClass('active');
    }
    dropDown.stop(false, true).slideToggle();
    j.preventDefault();
  });

});

//Counter
const mediaQuery = window.matchMedia("(prefers-reduced-motion:reduce)");
if (
  "IntersectionObserver" in window &&
  window.CSS &&
  CSS.registerProperty &&
  !mediaQuery.matches
) {
  var targets = document.querySelectorAll(".count");
  [].forEach.call(targets, function (target) {
    target.classList.add("zero");
  });
  var options = {
    root: null,
    threshold: [0.5]
  };
  var io = new IntersectionObserver(function (entries, self) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("anim");
        self.unobserve(entry.target);
      }
    });
  }, options);
  [].forEach.call(targets, function (target) {
    io.observe(target);
  });
}
