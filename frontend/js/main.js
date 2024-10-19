/*

Template:  Resta resturant template
Template URI: http://example.com/
Description: This is html5 template
Author: Resta
Author URI: http://example.com/
Version: 1.0

*/
/*================================================
[  Table of contents  ]
================================================
	01. jQuery MeanMenu
	02. Searchbar active
    03. stickey menu
    04. Nivo slider activation
    05. Isotope activation
    0.6 MagnificPopup activation
    08.  Counter Up
    0.9 Accordion
    10. slick carousel 
    11. You tube video active
    12. Parallax active
    13. wow js active
    14. scrollUp jquery active
    15. Preloader
======================================
[ End table content ]
======================================*/


(function($) {
    "use strict";

   /*-------------------------------------------
    	01. jQuery MeanMenu
    --------------------------------------------- */
    jQuery('nav#dropdown').meanmenu();
	
	/* ------------------
       02. Searchbar active
    ---------------- */
	$('.search-inner a').on('click', function(){
		$('.search-inside').fadeIn();
	});
	$('.search-close').on('click', function(){
		$('.search-inside').fadeOut();
	});	
	
    /*----------------------------
       03. stickey menu
    ----------------------------*/

    /*
    $(window).on('scroll',function() {    
     var scroll = $(window).scrollTop();
     if (scroll < 265) {
    $(".sticky-header").removeClass("sticky");
     }else{
    $(".sticky-header").addClass("sticky");
     }
  }); 
    */

    /* MEGAMIND */
    $(window).on('scroll',function() {    
	   var scroll = $(window).scrollTop();
     if ($( window ).width() > 480) {
      $(".sticky-header").removeClass("fixed");
      $("#header-copyright").removeClass("fixed");
  	  if (scroll < 265 ) {
    		$(".sticky-header").removeClass("sticky");
    	}else{
    		$(".sticky-header").addClass("sticky");
    	}
    } else {
      //console.log();
      if ($("#section-menu").length) {
        $(".sticky-header").removeClass("sticky");
        $(".sticky-header").addClass("fixed");
        $("#header-copyright").addClass("fixed");
      } else {
        $(".sticky-header").removeClass("fixed");
        $("#header-copyright").removeClass("fixed");
        if (scroll < 265 ) {
          $(".sticky-header").removeClass("sticky");
        }else{
          $(".sticky-header").addClass("sticky");
        }
      }
   }
	});

    $(window).resize(function() {
      var scroll = $(window).scrollTop();
     if ($( window ).width() > 480) {
      $(".sticky-header").removeClass("fixed");
      $("#header-copyright").removeClass("fixed");
      if (scroll < 265 ) {
        $(".sticky-header").removeClass("sticky");
      }else{
        $(".sticky-header").addClass("sticky");
      }
    } else {
      //console.log();
      if ($("#section-menu").length) {
        $(".sticky-header").removeClass("sticky");
        $(".sticky-header").addClass("fixed");
        $("#header-copyright").addClass("fixed");
      } else {
        $(".sticky-header").removeClass("fixed");
        $("#header-copyright").removeClass("fixed");
        if (scroll < 265 ) {
          $(".sticky-header").removeClass("sticky");
        }else{
          $(".sticky-header").addClass("sticky");
        }
      }
   }
    }) 
    $(window).on('load',function(){
      var scroll = $(window).scrollTop();
     if ($( window ).width() > 480) {
      $(".sticky-header").removeClass("fixed");
      $("#header-copyright").removeClass("fixed");
      if (scroll < 265 ) {
        $(".sticky-header").removeClass("sticky");
      }else{
        $(".sticky-header").addClass("sticky");
      }
    } else {
      //console.log();
      if ($("#section-menu").length) {
        $(".sticky-header").removeClass("sticky");
        $(".sticky-header").addClass("fixed");
        $("#header-copyright").addClass("fixed");
      } else {
        $(".sticky-header").removeClass("fixed");
        $("#header-copyright").removeClass("fixed");
        if (scroll < 265 ) {
          $(".sticky-header").removeClass("sticky");
        }else{
          $(".sticky-header").addClass("sticky");
        }
      }
   }
    });
    /* MEGAMIND */
	/*----------------------
		04. Nivo slider activation
	----------------------*/
	$('#mainSlider').nivoSlider({
        directionNav: false,
        animSpeed: 2000,
        slices: 18,
        pauseTime: 5000,
        pauseOnHover: false,
        controlNav: true,
        manualAdvance: true,
        prevText: '<i class="fa fa-chevron-left nivo-prev-icon"></i>',
        nextText: '<i class="fa fa-chevron-right nivo-next-icon"></i>'
    });

	/*----------------------
		05. Isotope activation
	----------------------*/
    $(window).on('load',function(){

        // Activate isotope in container
        $(".gallery-item-box").isotope({
           itemSelector:'.gallery-item'
        });

        //add isotope click function
        $('.gallery-menu li').on('click',function(){
           $(".gallery-menu li").removeClass("active");
           $(this).addClass("active");

           var selector = $(this).attr("data-filter");
         $(".gallery-item-box").isotope({
             filter: selector,
             animationOptions:{
                 duration:750,
                 easing:'linear',
                 queue: false
             }
         });
         return false;
        });

    });

    /*---------------
        0.6 MagnificPopup activation
     -------------------*/
    $('.single-item-gallery a,.member-overlay').magnificPopup({
            type: 'image',
            gallery:{enabled:true}
    });	
	
    $('.single-gallery-img a').magnificPopup({
            type: 'image',
            gallery:{enabled:true},
            zoom: {
                 enabled: true,
                 duration: 300,
            }
    });	
	$('.blog-hover a,.viedo--play > a,.widget-video-overlay a').magnificPopup({
            disableOn: 0,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: true,

            fixedContentPos: false
    });
    
    /*--------------------------
      08.  Counter Up
    ---------------------------- */	
    $('.counter').counterUp({
        delay: 70,
        time: 5000
    }); 
    /*--------------------
      0.9 Accordion
    -------------------------*/
    $(".widget-categories").collapse({
		accordion:true,
	  open: function() {
		this.slideDown(550);
	  },
	  close: function() {
		this.slideUp(550);
	  }		
	});	
    $(".accordion-active").collapse({
		accordion:true,
	  open: function() {
		this.slideDown(550);
	  },
	  close: function() {
		this.slideUp(550);
	  }		
	});	
    
	/*-------------------------------------------
    	10. slick carousel 
    --------------------------------------------- */
    $('.dises-list').slick({
    	   arrows: false,
		   slidesToShow: 1,
		   dots: true,
		   customPaging: function(slider, i) {
                return '<a href="javascript:void(0)">' + (i + 1) + '</a>';
            },
		   responsive: [
            {
			  breakpoint: 350,
			  settings: {
				centerPadding: '20px',
			  }
			}
		  ]
  	});
   $('.testimonial-text-slider').slick({
        slidesToShow: 1,
        arrows: false,
        dots: true,
        customPaging: function(slider, i) {
            return '<a href="javascript:void(0)">' + (i + 1) + '</a>';
        },
        draggable: false,
        fade: true,
        asNavFor: '.testimonial-image-slider'
    });
    $('.testimonial-image-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.testimonial-text-slider',
        dots: false,
        arrows: false,
        centerMode: true,
        focusOnSelect: true,
        centerPadding: '0',
        responsive: [
            
            {
              breakpoint: 767,
              settings: {
                autoplay: true,
                dots: false,
                slidesToShow: 2,
                centerMode: false,
                }
            },
            {
              breakpoint: 480,
              settings: {
                autoplay: true,
                dots: false,
                slidesToShow: 1,
                centerMode: false,
                }
            }
        ]
    });
    
    $('.team-list').slick({
      arrows: false,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 400,
          settings: {
            slidesToShow: 2,
          }
        }
      ]
    });
    
  /*--------------------
       11. You tube video active
    -------------------------*/
    $(".youtube-bg").YTPlayer({
        videoURL:"https://youtu.be/fJRhdDIJqs0",
        containment:'.youtube-bg',
        mute:true,
        loop:true,
        showControls: true
        
    });
    
    /*--------------------------
		12. Parallax active
	----------------------*/
	$('.parallax').parallax("50%", 0.3);

   /*------------------
    	13. wow js active
    ---------------- */
    new WOW().init();
   /*------------
    	14. scrollUp jquery active
    ------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
    /*---------
	   15. Preloader
	------------------------*/
		$(window).on('load', function() {
			$(".preloader").fadeOut("slow");;
		});
    /*---------
        MEGAMIND
     16. Review Page
  ------------------------*/
    $("#review-rate .food-review-rate").on("click", function() {
    
      $("#hiddenDiv").css("display","block");
    })
    // $(".clickCategory").click(function() {
    //   var $cat_id = $(this).children("input").val();
    //   var $thisPane = $(this).children("a").attr('href');
    //   if($('.tab-pane').hasClass("active")) {
    //     $('.tab-pane').removeClass("active");
    //   }
    //   $.ajax({
    //         type: 'POST',
    //         url: 'views.php',
    //         data: {category: $cat_id},
    //         success: function (html) {
    //             $('.tab-content').hide().append(html).fadeIn();
    //             $($thisPane).addClass("active");
    //         }
    //     });
    // });
    $("[name=phone_no]").on("change", function() {
      // $(this).parent().removeClass("has-error");
      // $(this).siblings("span").css("display","none");
      var ph = $(this).val();
      ph = $.trim(ph);
      var len = ph.toString().length;
      if (len == 11 && isNaN(ph) == false) {
        $(this).parent().removeClass("has-error");
        $(this).siblings("span").css("display","none");
      } else {
        $(this).parent().addClass("has-error");
        $(this).siblings("span").css("display","block");
      }
    })
    $("[name=c_title]").on("change", function() {
      $(this).parent().removeClass("has-error");
      $(this).siblings("span").css("display","none");
    })
    $("[name=name]").on("change", function() {
      $(this).parent().removeClass("has-error");
      $(this).siblings("span").css("display","none");
    })
    $("[name=u_surname]").on("change", function() {
      $(this).parent().removeClass("has-error");
      $(this).siblings("span").css("display","none");
    })
    $("[name=email]").on("change", function() {
      // $(this).parent().removeClass("has-error");
      // $(this).siblings("span").css("display","none");
      var mail = $(this).val(); 
      mail = $.trim(mail);
      var filter = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

      if (filter.test(mail)) {
        $(this).parent().removeClass("has-error");
        $(this).siblings("span").css("display","none");
      } else {
        $(this).parent().addClass("has-error");
        $(this).siblings("span").css("display","block");
      }
    })
    $("[name=phone]").on("change", function() {
      var ph = $(this).val();
      ph = $.trim(ph);
      var len = ph.toString().length;
      if (len == 11 && isNaN(ph) == false) {
        $(this).parent().removeClass("has-error");
        $(this).siblings("span").css("display","none");
      } else {
        $(this).parent().addClass("has-error");
        $(this).siblings("span").css("display","block");
      }
    })
    $("#review_terms input").click(function() {
      if ($(this).prop("checked")) {
        $("#review-terms_error").css("display","none");
      } else {
        $("#review-terms_error").css("display","block");
      }
    })
    $("#review-msg textarea").on("keyup",function(e) {
      var $review = $(this).val();
      
      // if ($review.replace(/\s+/g, '').length < 8) {
      //   var $remain = 8 - $review.replace(/\s+/g, '').length;
      //   $(this).parent().addClass("has-error");
      //   $("#review-msg_error").text("Type "+ $remain + " more characters...");
      //   $("#review-msg_error").css("display","block");
      // } else {
      //   $(this).parent().removeClass("has-error");
      //   $("#review-msg_error").css("display","none");
      // }
      var $reviewTitle = $review.split(". ");
      
      var len = $review.replace(/\s+/g, '').length;
      //console.log($reviewTitle.length);
      if (len > 15) {
        
        $("[name=review_title]").val($review.substring(0, 8)+"..."); 
      } else {
        if ($reviewTitle.length > 1) {
          $("[name=review_title]").val($reviewTitle[0]);
        } else {
          $("[name=review_title]").val($review); 
        }
        
      }
      
      
      
    })
    // $("#review-title input").on("keyup", function() {
    //   var rTitle = $(this).val().replace(/\s+/g, '');
    //   if (rTitle.length < 8) {
    //     var $remain = 8 - rTitle.length;
    //     $(this).parent().addClass("has-error");
    //     $("#review-title_error").text("Type "+ $remain + " more characters...");
    //     $("#review-title_error").css("display","block");
    //   } else {
    //     $(this).parent().removeClass("has-error");
    //     $("#review-title_error").css("display","none");
    //   }
    // })

})(jQuery);

