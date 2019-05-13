jQuery(document).ready(function () {
    jQuery(document).ready(function () {
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
        jQuery(".header-button").click(function () {
            jQuery('html, body').animate({
                scrollTop: jQuery("#fordesk").offset().top - 160
            }, 500);
        });
    });
});