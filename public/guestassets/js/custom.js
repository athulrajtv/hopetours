$(document).ready(function(){

  		new WOW().init();
	  AOS.init();

// package slider
$(".package-caro").owlCarousel({
    loop: true,
    margin: 10,
    dots: true,
    autoplay: true,             
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

 $(".review-test").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
  });

$(".advent-owl").owlCarousel({
    loop: true,
    margin: 10,
    dots: true,
    autoplay: true,             
    responsive: {
        0: {
            items: 1
        },
        450: {
            items: 2
        },
        850: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
});
      

});
(function ($) {
  'use strict';



  $(function () { 
    tabs();
    lightGallery();  
    lintNumberGen();
  });
 
  /*--------------------------------------------------------------
    12. Tabs
  --------------------------------------------------------------*/
  function tabs() {
    $('.cs_tabs .cs_tab_links a').on('click', function (e) {
      var currentAttrValue = $(this).attr('href');
      $('.cs_tabs ' + currentAttrValue)
        .fadeIn(400)
        .siblings()
        .hide();
      $(this).parents('li').addClass('active').siblings().removeClass('active');
      e.preventDefault();
    });
  }
  /*--------------------------------------------------------------
    13. Light Gallery
  --------------------------------------------------------------*/
  function lightGallery() {
    $('.cs_gallery_list').each(function () {
      $(this).lightGallery({
        selector: '.cs_gallery_item',
        subHtmlSelectorRelative: false,
        thumbnail: false,
        mousewheel: true,
      });
    });
  }

  /*--------------------------------------------------------------
    16. FAQ number
  --------------------------------------------------------------*/
  function lintNumberGen() {
    let i = 1;
    $('.cs_list_item span').each(function () {
      $(this).html(i);
      i++;
    });
  }

  
})(jQuery); // End of use strict



// testmonial



$(document).ready(function () {
  $(".testi").owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: false,
      dots: false,
      nav: false,
  });
});