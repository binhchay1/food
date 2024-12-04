jQuery(document).ready(function () {
    var owl = jQuery('.owl-carousel');
    owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true
    });

    jQuery('.js-open-write-review').on('click', function () {
        jQuery('#fancybox-container-1').show();
    });
});