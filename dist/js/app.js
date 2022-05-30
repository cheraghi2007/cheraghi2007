/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/***/ (() => {

$(function () {
  new WOW().init();
  /****************************************************
    Search
    ****************************************************/

  $('.search-header i').click(function () {
    $('.overlay-search').addClass('overlay-open');
  });
  $('.menu-close-search').click(function () {
    $('.overlay-search').removeClass('overlay-open');
  });
  /****************************************************
    Search
    ****************************************************/

  $('.lang-header').click(function () {
    $(this).toggleClass('lang-open');
  });
  /****************************************************
    Navbar
    ****************************************************/

  $('.navbar-toggle').click(function () {
    $(this).toggleClass('collapsed');
    $('.main-navigation').toggleClass('d-show');
    $('.main-navigation').slideToggle();
  });

  if ($(window).width() < 991) {
    $(".menu-item-has-children").append('<i class="fa fa-angle-right"></i>');
    $(".menu-item-has-children>i").on('click', function () {
      $(this).parent().children("button").toggleClass('display-block');
      $(this).parent().children("a").toggleClass('menuOpen');
      $(this).css('transform', 'rotate(90deg)');
    });
  }

  $("footer .menu a").prepend('<i class="fa fa-arrow-right"></i>');
  $mainHeight = $("#main-header").height();
  $(".head-height").css('height', $mainHeight);
  $mainHeight1 = $("#mobile-header").height();
  $(".head-height-mob").css('height', $mainHeight1);
  /****************************************************
    Fancybox
    ****************************************************/

  Fancybox.bind("[data-fancybox]", {
    infinite: false,
    Thumbs: false
  });
  /****************************************************
    Swiper
    ****************************************************/

  var swiper = new Swiper(".gallerySwiper", {
    slidesPerView: "auto",
    centeredSlides: true,
    centeredSlidesBounds: true,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 4500,
      disableOnInteraction: false
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    }
  });
  /****************************************************
    Back to Top
    ****************************************************/

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
      $(".backToTop").css("opacity", '1');
      $(".backToTop").css("visibility", 'visible');
    } else {
      $(".backToTop").css("opacity", '0');
      $(".backToTop").css("visibility", 'hidden');
    }
  });
  $(".backToTop a").click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 1000);
  });
  /****************************************************
    Parallax
    ****************************************************/

  /*$.fn.isInViewport = function() {
      var elementTop = $(this).offset().top;
      var elementBottom = elementTop + $(this).outerHeight();
        var viewportTop = $(window).scrollTop();
      var viewportBottom = viewportTop + $(window).height();
        return elementBottom > viewportTop && elementTop < viewportBottom;
  };*/

  $(window).scroll(function () {
    var st = $(this).scrollTop() / 60;
    $(".full_heights.parallax .bgZoom").css({
      "transform": "translate3d(0px, " + st + "%, .01px)",
      "-webkit-transform": "translate3d(0px, " + st + "%, .01px)"
    });
    $(".searchzoom").css({
      "transform": "translate3d(0px, " + st + "%, .01px)",
      "-webkit-transform": "translate3d(0px, " + st + "%, .01px)"
    });
  });
  $(window).scroll(function () {
    if ($(window).width() > 768) {
      var st2 = $(this).scrollTop() / 60;
      $(".short_heights.parallax .bgZoom").css({
        "transform": "translate3d(0px, -" + st2 + "%, .01px)",
        "-webkit-transform": "translate3d(0px, -" + st2 + "%, .01px)"
      });
    } else {// do something else
    }
  });
  $(window).scroll(function () {
    var st = $(this).scrollTop() / 30;
    $(".full_heights .parallax__class").css({
      "transform": "translate3d(0px, " + st + "%, .01px)",
      "-webkit-transform": "translate3d(0px, " + st + "%, .01px)"
    });
    $(".inherit_heights .parallax__class").css({
      "transform": "translate3d(0px, " + st + "%, .01px)",
      "-webkit-transform": "translate3d(0px, " + st + "%, .01px)"
    });
  });
  /****************************************************
    Counter
    ****************************************************/

  $(function () {
    // CONFIG
    var visibilityIds = ['#counters_1', '#counters_2', '#counters_3', '#counters_hero']; //must be an array, could have only one element

    var counterClass = '.counter';
    var defaultSpeed = 3000; //default value
    // END CONFIG
    //init if it becomes visible by scrolling

    $(window).on('scroll', function () {
      getVisibilityStatus();
    }); //init if it's visible by page loading

    getVisibilityStatus();

    function getVisibilityStatus() {
      elValFromTop = [];
      var windowHeight = $(window).height(),
          windowScrollValFromTop = $(this).scrollTop();
      visibilityIds.forEach(function (item, index) {
        //Call each class
        try {
          //avoid error if class not exist
          elValFromTop[index] = Math.ceil($(item).offset().top);
        } catch (err) {
          return;
        } // if the sum of the window height and scroll distance from the top is greater than the target element's distance from the top, 
        //it should be in view and the event should fire, otherwise reverse any previously applied methods


        if (windowHeight + windowScrollValFromTop > elValFromTop[index]) {
          counter_init(item);
        }
      });
    }

    function counter_init(groupId) {
      var num,
          speed,
          direction,
          index = 0;
      $(counterClass).each(function () {
        num = $(this).attr('data-TargetNum');
        speed = $(this).attr('data-Speed');
        direction = $(this).attr('data-Direction');
        easing = $(this).attr('data-Easing');
        if (speed == undefined) speed = defaultSpeed;
        $(this).addClass('c_' + index); //add a class to recognize each counter

        doCount(num, index, speed, groupId, direction, easing);
        index++;
      });
    }

    function doCount(num, index, speed, groupClass, direction, easing) {
      var className = groupClass + ' ' + counterClass + '.' + 'c_' + index;
      if (easing == undefined) easing = "swing";
      $(className).animate({
        num: num
      }, {
        duration: +speed,
        easing: easing,
        step: function step(now) {
          if (direction == 'reverse') {
            $(this).text(num - Math.floor(now));
          } else {
            $(this).text(Math.floor(now));
          }
        },
        complete: doCount
      });
    }
  });
  /****************************************************
    HIDE HEADER ON SCROLL DOWN
    ****************************************************/

  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = $('header').outerHeight();
  $(window).scroll(function (event) {
    didScroll = true;
  });
  setInterval(function () {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);

  function hasScrolled() {
    var st = $(this).scrollTop(); // Make sure they scroll more than delta

    if (Math.abs(lastScrollTop - st) <= delta) return; // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.

    if (st > lastScrollTop && st > navbarHeight) {
      // Scroll Down
      $('header').removeClass('nav-down').addClass('nav-up');
    } else {
      // Scroll Up
      if (st + $(window).height() < $(document).height()) {
        $('header').removeClass('nav-up').addClass('nav-down');
      }

      if ($(window).scrollTop() < 200) {
        $('header').removeClass('nav-down').addClass('nav-down2');
      } else {
        $('header').removeClass('nav-down2').addClass('nav-down');
      }
    }

    lastScrollTop = st;
  }
  /****************************************************
    MixitUp
    ****************************************************/


  if ($("div").hasClass("containerr")) {
    var mixer = mixitup('.containerr', {
      animation: {
        duration: 1000,
        effects: 'scale translateX(100%) stagger(155ms)',
        easing: 'ease-in-out'
      }
    });
  }
});

/***/ }),

/***/ "./src/scss/app.scss":
/*!***************************!*\
  !*** ./src/scss/app.scss ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!***********************!*\
  !*** ./src/js/app.js ***!
  \***********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scss_app_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/app.scss */ "./src/scss/app.scss");
/* harmony import */ var _main_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./main.js */ "./src/js/main.js");
/* harmony import */ var _main_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_main_js__WEBPACK_IMPORTED_MODULE_1__);

/* Your JS Code goes here */

/* JS */


})();

/******/ })()
;
//# sourceMappingURL=app.js.map