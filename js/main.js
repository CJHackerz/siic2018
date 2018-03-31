(function($) {
    'use strict';

    /*---------------------------------------
       PRELOADER JS
    -----------------------------------------*/

    // $(window).load(function() {
    //     $('.preloader-wrapper').fadeOut();
    // });


    /*---------------------------------------
       PORTFOLIO IMAGE LODED WITH MASONRY
    -----------------------------------------*/
    var $PortfolioMasonry = $('.portfolio-masonry');
    if (typeof imagesLoaded === 'function') {
        imagesLoaded($PortfolioMasonry, function() {
            setTimeout(function() {
                $PortfolioMasonry.isotope({
                    itemSelector: '.portfolio-item',
                    resizesContainer: false,
                    layoutMode: 'masonry',
                    filter: '*'
                });
            }, 500);

        });
    };

    /*-------------------------------------------
       SET ACTIVE CLASS FOR PORTFOLIO FILTER
    ---------------------------------------------*/
    $('.portfolio-filter li').on('click', function(event) {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
    });

    /*--------------------------------
       FILTER JS FOR PORRTFOLIO
    -----------------------------------*/
    $('.portfolio-filter').on('click', 'li', function() {
        var filterValue = $(this).attr('data-filter');
        $PortfolioMasonry.isotope({ filter: filterValue });
    });


    /*--------------------------------
       VENOBOX GALLARY IMAGE VIEW
    -----------------------------------*/
    $('.venobox').venobox();



    /*--------------------------------
        WOW JS
    -----------------------------------*/
    new WOW().init();

    /*----------------------------------
    COUNTUP JS ACTIVE 
    ------------------------------------*/
    $('.counter').counterUp({
        delay: 10,
        time: 1500
    });

    /*----------------------------------
    TESTIMONIAL SLIDER
    ------------------------------------*/
    $('.testimonial-wrapper').slick({
        dots: true,
        infinite: true,
        speed: 600,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        fade: true
    });



    /*----------------------------------
    CLIENT SLIDER
    ------------------------------------*/
    $('.client-wrapper').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 4,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 460,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 320,
                settings: { slidesToShow: 1, slidesToScroll: 1 }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });


    /*----------------------------------
    Team Slider
    ------------------------------------*/
    $('.team-wrapper').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        autoplay: true,
        slidesToScroll: 3,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 460,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 320,
                settings: { slidesToShow: 1, slidesToScroll: 1 }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    /*----------------------------------
    PARALLAX ACTIVE
    ------------------------------------*/

    $.stellar({
        horizontalScrolling: false
    });

    /*----------------------------------
    ONEPAGENAV NAV
    ------------------------------------*/

    $('.main-menu').onePageNav();


    /*----------------------------------
    MAINMENU JS
    ------------------------------------*/
    jQuery('.mobile-menu').meanmenu();

    /*----------------------------------
    HEADROOM JS
    ------------------------------------*/
    $("#headroom-active").headroom({
        tolerance: 5
    });

    /* ---------------------------------------------
        HEADER STICKY STYLE.
    --------------------------------------------- */
    $(window).on('scroll', function() {
        var wSize = $(window).width();
        if (wSize > 1 && $(this).scrollTop() > 1) {
            $('#sticky-header').addClass('sticky');
        } else {
            $('#sticky-header').removeClass('sticky');
        }
    });

    /* ---------------------------------------------
     MENU HAMBURGER AND FULL SCREEN  OVERLAY.
    --------------------------------------------- */
    $('.hamburger').on('click', function() {
        $(this).toggleClass('is-active');
        $(this).next().toggleClass('nav-show')
    });
    $('.menu-button a').on('click', function() {
        $('.overlay').fadeToggle(300);
        $(this).toggleClass('btn-open').toggleClass('btn-close');
    });
    $('.overlay').on('click', function() {
        $('.menu-button').fadeToggle(300);
        $('.button a').toggleClass('btn-open').toggleClass('btn-close');
        open = false;
    });
    /* ---------------------------------------------
    HOMEPAGE THREE SLIDER MAIN SECTION 
    ------------------------------------------------*/

    $(".slider-wrapper").owlCarousel({
        items: 1,
        nav: true,
        dots: false,
        autoplay: true,
        loop: true,
        navText: ["<i class='ti-angle-left'></i>", "<i class='ti-angle-right'></i>"],
        mouseDrag: false,
        touchDrag: false,
        animateOut: 'fadeOut'
    });


    // COMMING SOON COUNTDOWN
    $('[data-countdown]').each(function() {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime(
                '<div class="cdown"><span class="days"><strong>%-D</strong><p>Days</p></span></div><div class="cdown"><span class="hour"><strong> %-H</strong><p>Hours</p></span></div> <div class="cdown"><span class="minutes"><strong>%M</strong> <p>MINUTES</p></span></div><div class="cdown"><span class="second"><strong> %S</strong><p>SECONDS</p></span></div>'
            ));
        });
    });
    /* ---------------------------------------------
       scrollSpeed Js
    --------------------------------------------- */
    jQuery.scrollSpeed(100, 600);

//PRELOADER
        /** Loader */
    var loader = $(".loader");
    var wHeight = $(window).height();
    var wWidth = $(window).width();
    var o = 0;

    loader.css({
        top: wHeight / 2 - 2.5,
        left: wWidth / 2 - 200
    })

    do {
        loader.animate({
            width: o
        }, 10)
        o += 3;
    } while (o <= 400)
    if (o === 402) {
        loader.animate({
            left: 0,
            width: '100%'
        })
        loader.animate({
            top: '0',
            height: '100vh'
        })
    }

    setTimeout(function() {
        $(".loader-wrapper").fadeOut('fast');
        (loader).fadeOut('fast');
    }, 3500);



})(jQuery);