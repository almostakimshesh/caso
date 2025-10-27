jQuery(document).ready(function($){
    $(".testimonial-carousel").owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: true,
        autoplay: true,             // enable autoplay
        autoplayTimeout: 3000,      // 3 seconds per slide
        autoplayHoverPause: true,   // pause on hover
        smartSpeed: 800,
        items: 1                    // show 1 slide at a time
    });
});
