jQuery(document).ready(function () {

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() < 5) {
            jQuery('.header-button').removeClass('aparecer');
            jQuery('.header-logos').removeClass('aparecer');
            jQuery('.header').css({"background-color": "#004785"});
            jQuery('.blue').removeClass('aparecer');
            jQuery('.white').removeClass('desaparecer');


        } else {
            jQuery('.header-button').addClass('aparecer');
            jQuery('.header-logos').addClass('aparecer');
            jQuery('.header').css({"background-color": "#FFFFFF"});
            jQuery('.blue').addClass('aparecer');
            jQuery('.white').addClass('desaparecer');
        }
    });
    //If width is the resolution of the device remove class
    if (jQuery(window).width() < 1024) {
        jQuery('#width-detect').addClass('slide-profesores');
        jQuery('.slide-profesores').slick({
            dots: true,
            infinite: true,
            speed: 300,
            arrows: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            adaptiveHeight: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }
    else {
        jQuery('#width-detect').removeClass('slide-profesores');
    }
    //Show more examples
    jQuery("#btn-examples").click(function(){
        jQuery(".ejemplos-ocultos").show();
        jQuery("#btn-examples").hide();
    });
    //When click in btn "ver programas" animate to down
    jQuery(".header-button").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery("#form").offset().top - 70
        }, 500);
    });
});