$(document).ready(function ($) {
    var carousel = function () {
        $('#home-slider').owlCarousel({
            center: true,
            loop: true,
            autoplay: true,
            margin: 0,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: true,
            autoplayTimeout:4000,
            autoplayHoverPause: false,
            items: 3,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: false
                }
            }
        });
    };
    carousel();

    var carousel = function () {
        $('#Carousel-clientes').owlCarousel({
            rtl:true,
            loop: true,
            items: 2,
            margin: 10,
            stagePadding: 0,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        });
    };
    carousel();

    var carousel = function () {
        $('#produtos-carousel').owlCarousel({
            center: true,
            loop: true,
            autoplay: true,
            margin: 30,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: true,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            slideBy: 2,
            items: 3,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: false
                }
            }
        });
    };
    carousel();
});
