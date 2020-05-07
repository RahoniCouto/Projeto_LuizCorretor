$(document).ready(function($){
    var carousel = function () {
        $('.home-slider').owlCarousel({
            center: true,
            loop: true,
            autoplay: true,
            margin: 0,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: true,
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
});