jQuery(document).ready(function () {
    jQuery('.slide-testimonio').slick({
        dots: false,
        infinite: true,
        speed: 300,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
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
    //When click in btn "ver programas" animate to down
    jQuery(".header-button,.movil-button").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery("#form").offset().top - 70
        }, 500);
    });
});