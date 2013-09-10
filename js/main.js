$(window).resize(function() {
	setMargins();
});

$( document ).ready(function() {
	setMargins();
	loading();
	intermissionClick();

	/* init columnize */
	$(function(columnize){
		$('.news-copy').columnize({
			width: 300,
			height: 280
		});
	});


	/* init skrollr */
	console.log( "ready!" );
	skrollr.init({
		forceHeight: false
	});


});

//USED TO CHECK WHICH INTERMISSON IS SELECTED AND OPEN/CLOSE CONTENT
function intermissionClick(){
		//SCRIPT TO HANDLE CLICK EVENTS ON INTERMISSION BUTTONS
	$(".more-info-button.one").click(function() {
		// $(".more-info-button").closest('.intermission-main').children('.more-info').toggle();
		$('.more-info.one').slideToggle();
	});

	$(".more-info-button.two").click(function() {
		// $(".more-info-button").closest('.intermission-main').children('.more-info').toggle();
		$('.more-info.two').slideToggle();
	});

	$(".more-info-button.three").click(function() {
		// $(".more-info-button").closest('.intermission-main').children('.more-info').toggle();
		$('.more-info.three').slideToggle();
	});

	$(".more-info-button.four").click(function() {
		// $(".more-info-button").closest('.intermission-main').children('.more-info').toggle();
		$('.more-info.four').slideToggle();
	});


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
			// load image into the background of the appropriate div, or this can be set in the css which is preferable.
			// $(item).css('background-image', "url("+imageURL+")");
		}
		else if (imageURL == undefined) {
			console.log(this);
		}
	});
}

//PROGRESS BAR ANIMATION
function progressBar(percent, $element) {
	var testing = true;
	if (testing==true) {
		$("#nav-menu").delay(1000).fadeIn(2000);
		$("body").css("overflow","hidden");
		$("body").css("height","auto");
	}
	loadingBarWidth = percent * $element.width() / 100;
	$('.progress').animate({width: loadingBarWidth },{
        complete: function () {
        	if ($(".progress").width() == $(".loading-bar").width()){
			 	$(".loading-bar").animate({opacity:"0"}, 200);
			 	$(".loading-text.loading").animate({opacity:"0"}, 500, function(){
			 		//wait for the fade before sliding up.
				 	$(".loading-text.loading").css("margin-top", '-55px').addClass("slideUp");
				 	$(".loading-text.ready").css("display", "block").addClass("slideUp");
				 	//uses big entrance as well as pulse animation effects
			 		$(".ready-arrow").css("display", "block").addClass("pulse");
			 		//this delays the page content from loading for 2.5s
					$("#nav-menu").delay(1000).fadeIn(2000);
					$("body").css("overflow","hidden");
					$("body").css("height","auto");
				});
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
		console.log(margin, margin);
		$(".left-border").css("left", margin);
		$(".right-border").css("right", margin);
	}
	else {
		$(".left-border").css("left", "0");
		$(".right-border").css("right", "0");
	}
}


