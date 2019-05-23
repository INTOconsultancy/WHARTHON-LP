jQuery(document).ready(function () {
    jQuery('.professor-slider-container').slick({
        dots: true,
        infinite: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
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
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() < 5) {
            jQuery('.header-button').removeClass('aparecer');
            jQuery('.header-logos').removeClass('aparecer');
            jQuery('.header').css({"background-color": "#004785"});
            jQuery('.blue').removeClass('aparecer');
            jQuery('.white').removeClass('desaparecer');
            jQuery('.text-button').removeClass('desaparecer');


        } else {
            jQuery('.header-button').addClass('aparecer');
            jQuery('.header-logos').addClass('aparecer');
            jQuery('.header').css({"background-color": "#FFFFFF"});
            jQuery('.blue').addClass('aparecer');
            jQuery('.white').addClass('desaparecer');
            jQuery('.text-button').addClass('desaparecer');
        }
    });
    //When click in btn "ver programas" animate to down
    jQuery(".header-button, .btn-apply-now").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery("#fordesk").offset().top - 160
        }, 500);
    });
});