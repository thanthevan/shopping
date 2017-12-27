(function ($) {
 "use strict";

 $('#login').click(function(event) {
   $('#modal-login').modal();
});
 $('#loginnow').click(function(event) {


   $('#modal-login').modal();
   $('#modal-register').modal('hide');
});
 $('#registernow').click(function(event) {

   $('#modal-register').modal();
   $('#modal-login').modal('hide');
});
 $('#register').click(function(event) {
     $('#modal-register').modal();
 });

 


/*----------------------------
    jQuery MeanMenu
    ------------------------------ */
    jQuery('nav#dropdown').meanmenu();	

/*----------------------------
    wow js active
    ------------------------------ */
    new WOW().init();

/*----------------------------
    Product Carousel active
    ------------------------------ */  
    $(".product-carousel").owlCarousel({
        autoPlay: true, 
        slideSpeed:1000,
        pagination:true,
        navigation:true,	  
        items : 4,
        /* transitionStyle : "fade", */    /* [This code for animation ] */
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsMobile : [479,1]
    });
    
/*----------------------------
    Blog Carousel active
    ------------------------------ */  
    $(".blog-carousel").owlCarousel({
        autoPlay: true, 
        slideSpeed:500,
        pagination:true,
        navigation:true,	  
        items : 3,
        /* transitionStyle : "fade", */    /* [This code for animation ] */
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [980,2],
        itemsTablet: [768,1],
        itemsMobile : [479,1]
    });
    
/*----------------------------
    Brand Carousel active
    ------------------------------ */  
    $(".brand-carousel").owlCarousel({
        autoPlay: true, 
        slideSpeed:500,
        pagination:true,
        navigation:true,	  
        items : 6,
        /* transitionStyle : "fade", */    /* [This code for animation ] */
        itemsDesktop : [1199,5],
        itemsDesktopSmall : [980,4],
        itemsTablet: [768,2],
        itemsMobile : [479,1]
    });    
    
/*----------------------------
    Product Details Carousel Active
    ------------------------------ */  
    
    
/*----------------------------
    Upsell Product Carousel Active
    ------------------------------ */  
    $(".upsell-product-details-carousel").owlCarousel({
        autoPlay: true, 
        slideSpeed:500,
        pagination:true,
        navigation:true,	  
        items : 3,
        /* transitionStyle : "fade", */    /* [This code for animation ] */
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsMobile : [479,1]
    });

/*----------------------------
    Price-slider active
    ------------------------------ */  
    $( "#slider-range" ).slider({
        range: true,
        min: 50000,
        max: 1000000,
        values: [ 50000, 500000 ],
        slide: function( event, ui ) {
          $( "#amount" ).val(ui.values[ 0 ] +" VNĐ"+"-"+ ui.values[ 1 ]+" VNĐ");
      }
  });
    $( "#amount" ).val($( "#slider-range" ).slider( "values", 0 ) +" VNĐ"+"-"+$( "#slider-range" ).slider( "values", 1 ) )+" VNĐ";  

/*--------------------------
    ScrollUp
    ---------------------------- */	
    $.scrollUp({
        scrollText: '<i class="fa fa-arrow-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    }); 	  
    
/*--------------------------
    Countdown
---------------------------- 
    $('[data-countdown]').each(function() {
        var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
        $this.html(event.strftime('<div class="cdown days"><span class="counting">%-D</span>days</div><div class="cdown hours"><span class="counting">%-H</span>hrs</div><div class="cdown minutes"><span class="counting">%M</span>mins</div><div class="cdown seconds"><span class="counting">%S</span>secs</div>'));
        });
    });	
    */
/*--------------------------
    Sticky Js 
    ---------------------------- */	
    $("#sticker").sticky({topSpacing:0});
    
    
/*----------------------------------------------
    Delivery Old and New Address toggle function
    ------------------------------------------------*/
    $("#ship-new-address").on('click', function(){
        $(".ship-new-address-info").slideToggle();
    });
    
/*----------------------------------------------
    Personal Address toggle function
    -----------------------------------------------*/
    $("#add-new-address").on('click', function(){
        $("#add-new-address-info").slideToggle();
    });
    
/*--------------------------
    
/*-------------------------------------------
    ElevateZoom Js
    -------------------------------------------- */ 
    $("#zoom1").elevateZoom({
        gallery:'gallery_01',
        responsive : true, 
        galleryActiveClass: "active", 
        imageCrossfade: true,
        easing : true,
        cursor: "default",
        zoomWindowFadeIn: 300,
        zoomWindowFadeOut: 350
    });  

})(jQuery); 