$(document).ready(function(){

    $("#pone").click(function(){
        $(".page_one").addClass("hidden");
        $(".page_tow").addClass("page2");
        $(".page_tow").removeClass("hidden"); 
    });
    
    $("#backb").click(function(){
        $(".page_tow").removeClass("page2");
        $(".page_one").removeClass("hidden");
    });
    $("#nextb").click(function(){
        $(".page_tow").addClass("hidden");
        $(".page_three").addClass("page2");
    });    
    
    $("#backl").click(function(){
        $(".page_three").removeClass("page2");
        $(".page_tow").removeClass("hidden");
        $(".page_tow").addClass("page2"); 
    });

    $("#owerner").click(function(){
        $(".page_three").removeClass("page2");
        $(".page_one").removeClass("hidden");
        $(".page_tow").addClass("hidden"); 
    });

    $("#get_pass").click(function(){
        $(".page_three").removeClass("page2");
        $(".page_one").removeClass("hidden");
        $(".page_tow").addClass("hidden"); 
    });








	// $('#nav').slicknav();
	$('.navs').onePageNav();

// $("#range").ionRangeSlider({
//     min: 0,
//     max: 100,
//     from: 25
// });

  jQuery("#mobile_signuup").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 2000,
      paginationSpeed : 2000,
      singleItem:false,
      autoPlay: true, 
      navigation: false,
       items : 3, 
       paginationNumbers: true,
      //itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });





}); 

