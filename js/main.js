
$(window).on("resize", function() {
    var a = $(window).width();
	//for resizie function i use this other wise no need of this (till end comment) to be added
    if (a >= 992) {
        $(".carousel .item > div").unwrap();
        for (var b = $(".carousel .carousel-inner > div"), c = 0; c < b.length; c += 3) b.slice(c, c + 3).wrapAll("<div class='item'></div>");
        $(".carousel .carousel-inner .item:first-child").addClass("active"), setTimeout(function() {
            $("#carousel-first").carousel({interval: 1000})
			$("#carousel-two").carousel({interval: 1500})
        }, 500)
    }
	//end
    if (a <= 991) {
         $(".carousel .item > div").unwrap();
        for (var b = $(".carousel .carousel-inner > div"), c = 0; c < b.length; c += 1) b.slice(c, c + 1).wrapAll("<div class='item'></div>");
        $(".carousel .carousel-inner .item:first-child").addClass("active"), setTimeout(function() {
            $("#carousel-first").carousel({interval: 1000})
			$("#carousel-two").carousel({interval: 1500})
        }, 500)
		

    }
    if (a <= 767) {
        $(".navbar-header").prependTo('.nav-wrap');
        $(".header-actions > li:first-child").wrapInner('<div class="search-responsive"></div>').appendTo('.nav-wrap');
        $(".header-actions > li:last-child").wrapInner('<div class="category-responsive"></div>').appendTo('.nav-wrap');

            $(".nav-wrap").children('li').wrapAll('<ul class="responsive-fix"></ul>')
    }else{
        /*window.addEventListener('resize', function () {
            "use strict";
            window.location.href = window.location.href;
        });*/


    }

}).resize();



$("#carousel-first").carousel({interval: 1000 * 6})
$("#carousel-two").carousel({interval: 1500 * 6})

$('.cat-trigger').click(function (e) {
    e.preventDefault();
    $(this).toggleClass('active');
    $('.categories-dropdown').slideToggle();

})
   //
$('.scroller').mCustomScrollbar();

$(".store-targets a").click(function(e) {
	e.preventDefault();
	//alert(urlHash)
	var urlHash = $(this).attr('href')
    $('html, body').animate({
        scrollTop: $(urlHash).offset().top
    }, 2000);
});





 
    //Wizard
    $('.step-tabs a[data-toggle="tab"]').on('show.bs.tab', function (e) {
		
        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {
		e.preventDefault();
        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {
		e.preventDefault();
        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });


function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}





/* Thanks to CSS Tricks for pointing out this bit of jQuery
http://css-tricks.com/equal-height-blocks-in-rows/
It's been modified into a function called at page load and then each time the page is resized. One large modification was to remove the set height before each new calculation. */

equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

$(window).on('load', function() {
  equalheight('.equal-height');
	
	$('.tips').height($('.video-card').height())
	

});



$(":radio").change(function(a) {
    var b = $(this).data("id");
    $(".split").removeClass("in"), $("#" + b).addClass("in")
});






$(document).ready(function() {

    $this = $(this), window.displayBoxIndex = -1, $(document).on("keyup", ".searchjs > div > input", function(a) {
        $(".resultContainer").show(), thisLn = $(this).val().length, thisLn < 1 && ($(".resultContainer").hide(), $("#searchResults ul li a").removeClass("selected"))
    }), $(document).on("click", "html", function(a) {
        $(".resultContainer").hide()
    }), $(window).focus(function() {
        $(".resultContainer").hide()
    }), $(document).on("click", ".searchjs", function(a) {
        a.stopPropagation()
    });
    var a = function(a) {

        displayBoxIndex += a;
        var b = $(".searchResults ul li a");
        displayBoxIndex >= b.length && (displayBoxIndex = 0), displayBoxIndex < 0 && (displayBoxIndex = b.length - 1);
        var c = "selected";
        b.removeClass(c).eq(displayBoxIndex).addClass(c)
    };
    $(document).on("keyup", function(b) {
        /*if (13 == b.keyCode) {
            var c = $(".searchResults ul li a.selected").attr("href");
            return window.location.href = c, !1
        }*/
        40 == b.keyCode && a(1), 38 == b.keyCode && a(-1)
    });
	
	
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 500) {
    $('.totop').fadeIn();
  } else {
    $('.totop').fadeOut();
  }
});
	
	$(".totop").on('click',function (e) {
		e.preventDefault()
   //1 second of animation time
   //html works for FFX but not Chrome
   //body works for Chrome but not FFX
   //This strange selector seems to work universally
   $("html, body").animate({scrollTop: 0}, 1000);
});


    var owl = $('#owl');

// Go to the next item
    $('.onn').click(function(e) {
        e.preventDefault();
        owl.trigger('next.owl.carousel');
    })
// Go to the previous item
    $('.opp').click(function(e) {
        e.preventDefault();
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [300]);
    })


    var owl2 = $('#owl2');
    // Go to the next item
    $('.on').click(function(e) {
        e.preventDefault();
        owl2.trigger('next.owl.carousel');
    })
// Go to the previous item
    $('.op').click(function(e) {
        e.preventDefault();
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl2.trigger('prev.owl.carousel', [300]);
    })

    owl.owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:3
            },
            1199:{
                items:5
            }
        }
    })

    owl2.owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:3
            },
            1199:{
                items:5
            }
        }
    })
	
	
});






