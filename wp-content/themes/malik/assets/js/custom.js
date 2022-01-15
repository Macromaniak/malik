jQuery(function(){
    // alert("yes");
    jQuery('.carousel').carousel();
    jQuery('#cat-slider').owlCarousel({
         autoplay: true,
        /*center: true,*/
        loop: true,
        infinite:true,
        rtl: true,
        dots:true,
        items: 3,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
    });
    
    const lightbox = GLightbox({
    touchNavigation: true,
    loop: true,
    autoplayVideos: true
    });
    
    jQuery("#select-coin").change(function(){
        var link = jQuery(this).val();
        jQuery('#pay-link').attr("href", link);
    })
})
