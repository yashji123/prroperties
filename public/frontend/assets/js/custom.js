
(function($) {
  "use strict";
   $(document).on('ready', function() {


  /*====================================
    Header Sticky JS
  ======================================*/
  var activeSticky = $("#active-sticky"),
    winDow = $(window);
    winDow.on("scroll", function () {
      var scroll = $(window).scrollTop(),
      isSticky = activeSticky;
      if (scroll < 50) {
      isSticky.removeClass("is-sticky");
      } else {
      isSticky.addClass("is-sticky");
    }
  });
  

  /*====================================
    Select2 JS
  ======================================*/
  $('.select2').select2();
      $('.select2noSearch').select2({
          minimumResultsForSearch: Infinity
      });

//   $(function () {
//     $('#startDate').datepicker().datepicker();
//   });

  // Akash - Start
//   $(function () {
//     $('#endDate').datepicker().datepicker();
//   });
  // Akash - End

  /*====================================
    CounterUp JS
  ======================================*/
  $('.counter').counterUp({
    time: 1500,
    });
      


  // /*====================================
  //   Aos Animate JS
  // ======================================*/
  // AOS.init({
  //   duration:1500,
  //   disable:!1,
  //   offset:0,
  //   once:!0,
  //   easing:"ease"
  // });


  /*====================================
    Scrool To Top JS
  ======================================*/
  var lastScrollTop = '';
  var scrollToTopBtn = '.scrollToTop'

  function stickyMenu($targetMenu, $toggleClass) {
    var st = $(window).scrollTop();
    if ($(window).scrollTop() > 600) {
      if (st > lastScrollTop) {
      $targetMenu.removeClass($toggleClass);

      } else {
      $targetMenu.addClass($toggleClass);
      };
    } else {
      $targetMenu.removeClass($toggleClass);
    };
     lastScrollTop = st;
  };

  $(window).on("scroll", function () {
    stickyMenu($('.sticky-header'), "active");
    if ($(this).scrollTop() > 400) {
    $(scrollToTopBtn).addClass('show');
    } else {
    $(scrollToTopBtn).removeClass('show');
    }
  });

  $(scrollToTopBtn).on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
    scrollTop: 0
    }, 500);
    return false;
  });

});


  /*====================================
    Mobile Menu
  ======================================*/
  var $offcanvasNav = $("#offcanvas-menu a");
    $offcanvasNav.on("click", function () {
      var link = $(this);
      var closestUl = link.closest("ul");
      var activeLinks = closestUl.find(".active");
      var closestLi = link.closest("li");
      var linkStatus = closestLi.hasClass("active");
      var count = 0;

    closestUl.find("ul").slideUp(function () {
      if (++count == closestUl.find("ul").length)
      activeLinks.removeClass("active");
    });
    if (!linkStatus) {
      closestLi.children("ul").slideDown();
      closestLi.addClass("active");
    }
  });

var mySwiper1 = document.querySelector('.h__partners-swiper1').slider;

mySwiper1 = new Swiper('.h__partners-swiper1', {
    grabCursor: false,
    loop: true,
    slidesPerView: 'auto',
    loop: true, 
    shortSwipes: false,
    longSwipes: false,
    allowTouchMove: false,
    autoplay: {
      delay: 1, 
    }, 
    freeMode: true, 
    speed: 5000,
});

  /*====================================
    Preloader JS
  ======================================*/
  $(window).on('load', function (event) {
    $('.preloader').delay(800).fadeOut(500);
  })


})(jQuery);

new ModalVideo('.js-video-btn');

const accordionItems = document.querySelectorAll('.accordion-item');
let activeItem = document.querySelector('.accordion-item.active');

accordionItems.forEach(item => {
item.addEventListener('click', () => {
  if (item === activeItem) {
    item.classList.remove('active');
    activeItem = null;
  } else {
    if (activeItem) {
      activeItem.classList.remove('active');
    }
    item.classList.add('active');
    activeItem = item;
  }
});
});


(function ($) {
    "use strict"; // Start of use strict

// // Preloader Start
//   $(window).on('load',function () {
//     $('#preloaderInner').fadeOut();
//     $('#preloader')
//       .delay(350)
//       .fadeOut('slow');
//     $('body')
//       .delay(350)
//   });
// // Preloader End

    /*---------------------------------
    Customer Testimonial JS
   -----------------------------------*/
     $('.customer-testimonial-slider').owlCarousel({
      items: 2,
      loop: true,
      autoplay: false,
      autoplayTimeout: 1500,
      margin: 25,
      nav: false,
      dots: true,
      navText: [
        "<span class=\"iconify\" data-icon=\"bi:arrow-left\"></span>",
        "<span class=\"iconify\" data-icon=\"bi:arrow-right\"></span>",
    ],
      smartSpeed: 3000,
      autoplayTimeout:3000,
      responsive:{
        0:{
            items:1
        },
        575:{
            items:1
        },
        991:{
            items:1
        },
        992:{
            items:2
        },
        1199:{
          items:2
        },
        1200:{
          items:2
        }
      }
  });

})(jQuery); // End of use strict

