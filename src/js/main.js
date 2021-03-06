$(function() {

    new WOW().init();

    /****************************************************

    Search

    ****************************************************/
    $('.search-header i').click(function() {
        $('.overlay-search').addClass('overlay-open');
    });

    $('.menu-close-search').click(function() {
        $('.overlay-search').removeClass('overlay-open');
    });

    /****************************************************

    Search

    ****************************************************/

    $('.lang-header').click(function() {
        $(this).toggleClass('lang-open');
    });

    /****************************************************

    Navbar

    ****************************************************/

    $('.navbar-toggle').click(function() {
        $(this).toggleClass('collapsed');
        $('.main-navigation').toggleClass('d-show');
        $('.main-navigation').slideToggle();
    });

    if ($(window).width() < 991) {
        $(".menu-item-has-children").append('<i class="fa fa-angle-right"></i>');

        $(".menu-item-has-children>i").on('click', function() {
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
        Thumbs: false,
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
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    /****************************************************

    Back to Top

    ****************************************************/
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 100) {
            $(".backToTop").css("opacity", '1');
            $(".backToTop").css("visibility", 'visible');
        } else {
            $(".backToTop").css("opacity", '0');
            $(".backToTop").css("visibility", 'hidden');
        }
    });
    $(".backToTop a").click(function() {
        $("html, body").animate({ scrollTop: 0 }, 1000);
    });


    /****************************************************

    Parallax

    ****************************************************/

    $(window).scroll(function() {
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

    $(window).scroll(function() {
        if ($(window).width() > 768) {
            var st2 = $(this).scrollTop() / 60;
            $(".short_heights.parallax .bgZoom").css({
                "transform": "translate3d(0px, -" + st2 + "%, .01px)",
                "-webkit-transform": "translate3d(0px, -" + st2 + "%, .01px)"
            });
        }
    });

    $(window).scroll(function() {
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
    $(function() {

        // CONFIG
        let visibilityIds = ['#counters_1', '#counters_2', '#counters_3', '#counters_hero'];
        let counterClass = '.counter';
        let defaultSpeed = 3000;

        $(window).on('scroll', function() {
            getVisibilityStatus();
        });

        getVisibilityStatus();

        function getVisibilityStatus() {
            elValFromTop = [];
            var windowHeight = $(window).height(),
                windowScrollValFromTop = $(this).scrollTop();

            visibilityIds.forEach(function(item, index) { 
                try { 
                    elValFromTop[index] = Math.ceil($(item).offset().top);
                } catch (err) {
                    return;
                }
                // if the sum of the window height and scroll distance from the top is greater than the target element's distance from the top, 
                //it should be in view and the event should fire, otherwise reverse any previously applied methods
                if ((windowHeight + windowScrollValFromTop) > elValFromTop[index]) {
                    counter_init(item);
                }
            });
        }

        function counter_init(groupId) {
            let num, speed, direction, index = 0;
            $(counterClass).each(function() {
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
            let className = groupClass + ' ' + counterClass + '.' + 'c_' + index;
            if (easing == undefined) easing = "swing";
            $(className).animate({
                num
            }, {
                duration: +speed,
                easing: easing,
                step: function(now) {
                    if (direction == 'reverse') {
                        $(this).text(num - Math.floor(now));
                    } else {
                        $(this).text(Math.floor(now));
                    }
                },
                complete: doCount
            });
        }
    })


    /****************************************************

    HIDE HEADER ON SCROLL DOWN

    ****************************************************/

    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function(event) {
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;

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
                easing: 'ease-in-out',
            }
        });
    }


});