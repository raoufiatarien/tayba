/*global $:false, jQuery:false, console:false */
jQuery(document).ready(function($) {
  "use strict";

 

  $('.flexslider').flexslider({
    animation: "fade"
  });

 

});
$('.thumb-wrapp').hover(function() {
    $('.folio-image', this).stop().animate({
      bottom: '20px'
    }, {
      queue: false,
      duration: 300
    });
    $('.folio-caption', this).stop().animate({
      bottom: '-20px'
    }, {
      queue: false,
      duration: 300
    });
  }, function() {
    $('.folio-image', this).stop().animate({
      bottom: '0'
    }, {
      queue: false,
      duration: 300
    });
    $('.folio-caption', this).stop().animate({
      bottom: '0'
    }, {
      queue: false,
      duration: 300
    });
  });

