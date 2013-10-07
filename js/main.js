$(window).resize(function() {
	setMargins();
	skrollr.init().refresh();
});

$( document ).ready(function() {
	setMargins();
	loading();
	intermissionClick();
	archivesClick();
	hideOnScroll();
	/* init columnize */
	$(function(columnize){
		$('.news-copy').columnize({
			width: 300,
			height: 380
		});
	});

	/* init skrollr */
	// skrollr.init({
	// 	smoothScrolling: false,
	// 	forceHeight: false
	// });

 	var s = skrollr.init({
		smoothScrolling: false,
		forceHeight: false
	});

	skrollr.menu.init(s, {
		//skrollr will smoothly animate to the new position using `animateTo`.
		animate: true,

		//The easing function to use.
		easing: 'sqrt',

		//How long the animation should take in ms.
		duration: function(currentTop, targetTop) {
		    //By default, the duration is hardcoded at 500ms.
		    return 500;

		    //But you could calculate a value based on the current scroll position (`currentTop`) and the target scroll position (`targetTop`).
		    //return Math.abs(currentTop - targetTop) * 10;
		},
	});
	skrollr.init().refresh();
	int1 = $("#intermission1").offset().top;
	int2 = $("#intermission2").offset().top;
	int3 = $("#intermission3").offset().top;	
	int4 = $("#intermission4").offset().top;
	linkLook = $("#look").offset().top;
	linkListen = $("#listen").offset().top;
	// linkArchives = $("#the-archives").offset().top;
	linkNewsflash = $("#newsflash").offset().top;

	$(".link-look").attr("data-menu-top", linkLook);
	$(".link-listen").attr("data-menu-top", linkListen);
	$(".link-the-archives").attr("data-menu-top", linkNewsflash);
	$(".link-newsflash").attr("data-menu-top", linkNewsflash);
	$(".link-1").attr("data-menu-top", int1);
	$(".link-2").attr("data-menu-top", int2);
	$(".link-3").attr("data-menu-top", int3);
	$(".link-4").attr("data-menu-top", int4);

	//KEEP THIS STUFF IT OPENS THE INTERMISSIONS
    $("a[href*=#]").on('click', function(e) {
      var locationToGo = $(this).attr('href');

      // $('.more-info').hide();
	    if (locationToGo == '#the-project' ){ 
	        $('.more-info.one').show('slow');
	    };
	    if (locationToGo == '#the-production') {
	        $('.more-info.one').show('slow');
	    };

	    if (locationToGo == '#listen' || locationToGo == '#look') {
	        $('.more-info.two').show('slow');
	    };
	    if (locationToGo == '#newsflash') {
	        $('.more-info.newsflash.three').show('slow');
	    };
    });


});

function hideOnScroll() {
	$(window).scroll(function() {
		if ($(window).scrollTop() - $(".intermission.one").offset().top >= $(".intermission.one").height()){
			$(".more-info.one.container").hide();
			// console.log("one out");
		}
		if ($(window).scrollTop() - $(".intermission.two").offset().top >= $(".intermission.two").height()){
			$(".more-info.two.container").hide();
			// console.log("two out");
		}
		if ($(window).scrollTop() - $(".intermission.three").offset().top >= $(".intermission.three").height()){
			$(".more-info.three.container").hide();
			// console.log("three out");
		}
	});
}
function archivesClick() {
	$(".archive-reveal-button").click(function() {
		// $(this).toggleClass("less");
		// if ($(this).hasClass("less") == true){
		// 	$(".archive-reveal-button").find("h5").text("Show more", function(){
		// 		$(this).find("h5").text("Show less");
		// 	});
		// }
	    $(".archive-content-main .article-archive").replaceWith($(this).parent().clone().removeClass("four").addClass("sixteen"));
	    $(".archive-content-main .archive-reveal-button").hide();
	    $(".archive-content-main").show();
	    $(".archive-content-main .archive-content").show();
	});
}

//USED TO CHECK WHICH INTERMISSON IS SELECTED AND OPEN/CLOSE CONTENT
function intermissionClick(){
		//SCRIPT TO HANDLE CLICK EVENTS ON INTERMISSION BUTTONS
	$(".more-info-button.one").click(function() {
		// $(".more-info-button").closest('.intermission-main').children('.more-info').toggle();
		$('.more-info.one').slideToggle();
	});

	$(".more-info-button.two").click(function() {
		// $(".more-info-button").closest('.intermission-main').children('.more-info').toggle();
		// var interHeight = $(".more-info.two.container").height();
		// var sceneHeight = $(".scene.part2").height();
		// $(".scene.part2").css("height", interHeight + sceneHeight);
		$('.more-info.two').slideToggle();
	});

	$(".more-info-button.newsflash").click(function() {
		// $(".more-info-button").closest('.intermission-main').children('.more-info').toggle();
		$('.more-info.newsflash').slideToggle();
	});

	$(".more-info-button.the-archives").click(function() {
		// $(".more-info-button").closest('.intermission-main').children('.more-info').toggle();
		$('.more-info.the-archives').slideToggle();
	});

	$(".more-info-button.four").click(function() {
		// $(".more-info-button").closest('.intermission-main').children('.more-info').toggle();
		$('.more-info.four').slideToggle();
	});
	resetDataPoints();

}

function resetDataPoints(){
	console.log("update points");
	int1 = $("#intermission1").offset().top;
	int2 = $("#intermission2").offset().top;
	int3 = $("#intermission3").offset().top;	
	int4 = $("#intermission4").offset().top;
	linkLook = $("#look").offset().top;
	linkListen = $("#listen").offset().top;
	linkNewsflash = $("#newsflash").offset().top;
	// linkArchives = $("#the-archives").offset().top;

	$(".link-look").data("data-menu-top", linkLook);
	$(".link-listen").data("data-menu-top", linkListen);
	$(".link-newsflash").data("data-menu-top", linkNewsflash);
	$(".link-newsflash").data("data-menu-top", linkNewsflash);
	$(".link-1").data("data-menu-top", int1);
	$(".link-2").data("data-menu-top", int2);
	$(".link-3").data("data-menu-top", int3);
	$(".link-4").data("data-menu-top", int4);
}

//SETS UP THE VARIABLES NEEDED FOR THE PROGESS BAR
function loading(){
	//The number of bg images on the page we are waiting for
	numberOfImages = $('.js-image').length,
	//tracks how many have loaded
	numberOfLoaded = 0,
	//breaks up the loader into stages for accurate representation
	step = 100 / numberOfImages;
	//for each div with a background image we care about waiting for
	$('.js-image').each( function (i, item) {
		//fetch the url from the data attribute
		// console.log("image element : ", $(this);
		imageURL = $(this).data("image-url");
		if (imageURL != undefined) {
			//I have split the directory path from the image name to accomodate a changing file path
			//sets the image src to that in the data type so we can measure the load time
			$(item).children('img').attr('src', imageURL).load( function() {
				//increase counter of loaded images
				numberOfLoaded++;
				//remove the image from the page as we no longer need it
				$(this).remove();
				progressBar(step * numberOfLoaded, $('.loading-bar'));
			});
		}
		else if (imageURL == undefined) {
			// console.log(this);
		}
	});
}

//PROGRESS BAR ANIMATION
function progressBar(percent, $element) {
	loadingBarWidth = percent * $element.width() / 100;
	$('.progress').animate({width: loadingBarWidth },{
        complete: function () {
        	if ($(".progress").width() == $(".loading-bar").width()){
			 	$(".loading-bar").animate({opacity:"0"}, 200);
			 	$(".loading-text.loading").animate({opacity:"0"}, 500, function(){
			 		//wait for the fade before sliding up.
					$(".slides").animate({marginTop:"-100px"}, 600);
					$(".loading-text.ready").delay(500).fadeIn().addClass("slideUp");
				 	//uses pulse animation effect
			 		$(".ready-arrow").css("display", "block").addClass("pulse");
			 		//this delays the page content from loading for 2.5s
					$("#nav-menu").delay(1000).fadeIn(2000);
					$("body").css("overflow","hidden");
					$("body").css("height","auto");
				});
				skrollr.init().refresh();
			};
        }
	},
	500);
}

//WHEN THE PAGE IS SCALED THE SIDE GRADIENTS ADJUST
function setMargins() {
	var allScene_width = $(".all-scenes").width();
	var margin = ($("body").width() - allScene_width-20)/2;
	var marginLeft = $(".all-scenes").css("margin-left");
	var marginRight = $(".all-scenes").css("margin-right");
	if ($(window).width() > 1440) {
		$(".left-border").css("left", margin);
		$(".right-border").css("right", margin);
	}
	else {
		$(".left-border").css("left", "0");
		$(".right-border").css("right", "0");
	}
}


