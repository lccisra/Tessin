(function($) { "use strict";

}(jQuery));

$(document).ready(function(){
  //Herobanner
  $('.herobanner').slick({
    dots: false,
    arrows: true,
    fade: true,
    infinite: true,
    speed: 1500,
    slidesToShow: 1,
    adaptiveHeight: false,
    autoplay: true,
    autoplaySpeed: 4000,
    pauseOnHover: false,
    pauseOnFocus: false
  });
});