
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
		
		$(".navbar-header").prependTo('.nav-wrap')
    }
   
}).resize();



$("#carousel-first").carousel({interval: 1000 * 6})
$("#carousel-two").carousel({interval: 1500 * 6})

   //
	$('.scroller').mCustomScrollbar();







 
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



