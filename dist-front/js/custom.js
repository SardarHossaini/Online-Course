(function ($) {
    "use strict";

    $(".scroll-top").hide();
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 300) {
            $(".scroll-top").fadeIn();
        } else {
            $(".scroll-top").fadeOut();
        }
    });
    $(".scroll-top").on("click", function () {
        $("html, body").animate(
            {
                scrollTop: 0,
            },
            700
        );
    });

    $(document).ready(function () {
        $(".select2").select2({
            theme: "bootstrap",
        });
    });

    new WOW().init();

    $(".video-button").magnificPopup({
        type: "iframe",
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>' +
                    '</div>',
            patterns: {
                youtube: {
                    index: 'youtube.com',
                    id: 'v=',
                    src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                },
                vimeo: {
                    index: 'vimeo.com',
                    id: '/',
                    src: 'https://player.vimeo.com/video/%id%?autoplay=1'
                }
            },
            srcAction: 'iframe_src',
        },
        mainClass: 'mfp-large-iframe', // Add a custom class for larger popup
        closeOnBgClick: true, // Close popup when clicking outside
        closeOnContentClick: false, // Do not close when clicking inside the content
        gallery: {
            enabled: true,
        },
        callbacks: {
            elementParse: function(item) {
                // Check if the link is an MP4 file
                if (item.el[0].href.match(/\.mp4$/)) {
                    item.type = 'inline'; // Change type to inline for MP4 files
                    item.src = '<div class="video-popup"><video controls autoplay><source src="' + item.el[0].href + '" type="video/mp4"></video></div>';
                }
            },
            open: function() {
                // Autoplay MP4 videos when the popup opens
                var video = this.content.find('video')[0];
                if (video) {
                    video.play();
                }
            },
            close: function() {
                // Pause MP4 videos when the popup closes
                var video = this.content.find('video')[0];
                if (video) {
                    video.pause();
                }
            }
        }
    });

    $(".magnific").magnificPopup({
        type: "image",
        gallery: {
            enabled: true,
        },
    });

    $(".slide-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        margin: 0,
        mouseDrag: false,
        animateIn: "fadeIn",
        animateOut: "fadeOut",
        nav: true,
        navText: [
            "<i class='fas fa-long-arrow-alt-left'></i>",
            "<i class='fas fa-long-arrow-alt-right'></i>",
        ],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            },
        },
    });

    
    $(".testimonial-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        autoplaySpeed: 1500,
        smartSpeed: 1500,
        margin: 30,
        nav: false,
        animateIn: "fadeIn",
        animateOut: "fadeOut",
        navText: [
            "<i class='fa fa-caret-left'></i>",
            "<i class='fa fa-caret-right'></i>",
        ],
        responsive: {
            0: {
                items: 1,
                dots: false,
            },
            768: {
                items: 2,
                dots: false,
            },
            992: {
                items: 3,
                dots: false,
            },
        },
    });


    $(".course-category-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        autoplaySpeed: 1500,
        smartSpeed: 1500,
        margin: 10,
        nav: false,
        animateIn: "fadeIn",
        animateOut: "fadeOut",
        navText: [
            "<i class='fa fa-caret-left'></i>",
            "<i class='fa fa-caret-right'></i>",
        ],
        responsive: {
            0: {
                items: 1,
                dots: false,
            },
            576: {
                items: 2,
                dots: false,
            },
            768: {
                items: 4,
                dots: false,
            },
            992: {
                items: 6,
                dots: false,
            },
        },
    });


    $(".course-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        margin: 30,
        mouseDrag: true,
        animateIn: "fadeIn",
        animateOut: "fadeOut",
        nav: false,
        navText: [
            "<i class='fas fa-long-arrow-alt-left'></i>",
            "<i class='fas fa-long-arrow-alt-right'></i>",
        ],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 4,
            },
        },
    });

    jQuery(".mean-menu").meanmenu({
        meanScreenWidth: "1199",
    });

    $(".datepicker").datepicker({
        format: "yyyy-mm-dd",
        todayHighlight: true
    });

    $('.counter').counterUp();

})(jQuery);
