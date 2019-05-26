(function ($) {
    $(function () {

        $('.ehkskursiya-slider').slick({
            infinite: true,
            autoplay: true,
            autoplaySpeed: 4000,
            speed: 1000,
            arrows: false,
            fade: true,
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        autoplay: true,
                        dots: false,
                        autoplaySpeed: 4000,
                        fade: false
                    }
                }
            ]
        });

        
        
        $('.button-collapse').sideNav();
        $('.parallax').parallax();

    }); // end of document ready
})(jQuery); // end of jQuery name space

