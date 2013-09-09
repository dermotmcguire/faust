$( document ).ready(function() {
	function progressBar(percent, $element) {
		loadingBarWidth = percent * $element.width() / 100;
		$('.progress').animate({width: loadingBarWidth },{
	        complete: function () {
	        	if ($(".progress").width() == $(".loading-bar").width()){
				 	$(".loading-bar").animate({opacity:"0"}, 500);
				 	$(".loading-text.loading").animate({opacity:"0"}, 500, function(){
				 		//wait for the fade before sliding up.
					 	$(".loading-text.loading").css("margin-top", '-55px').addClass("slideUp");
					 	$(".loading-text.ready").addClass("slideUp");
					 	//uses big entrance as well as pulse animation effects
				 		$(".ready-arrow").css("display", "block").addClass("bigEntrance pulse");
				 		//this delays the page content from loading for 2.5s
						$("section").delay(500).fadeIn(2000);
					});
				};
	        }
		},
		500);
	}
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
			$(item).children('img').attr('src', 'assets/images/'+ imageURL).load( function() {
				//increase counter of loaded images
				numberOfLoaded++;
				//remove the image from the page as we no longer need it
				this.remove();
				progressBar(step * numberOfLoaded, $('.loading-bar'));
			});

			// load image into the background of the appropriate div, or this can be set in the css which is preferable.
			$(item).css('background-image', "url('assets/images/"+ imageURL+"')");
		}
		else if (imageURL == undefined) {
			console.log(this);
		}


	});

	/* init columnize */
	$(function(columnize){
		$('.news-copy').columnize({width:300});
	});

	/* init intermissions push-downs */
	$(function(part1pushing){
		var push1 = document.getElementById('intermission1').scrollHeight;
		$("#part1pushHeight").click(function(){
			$("#intermission1").animate({ height : push1+'px' },500);
		});
	});
	$(function(part2pushing){
		var push2 = document.getElementById('intermission2').scrollHeight;
		$("#part2pushHeight").click(function(){
			$("#intermission2").animate({ height : push2+'px' },500);
		});
	});
	$(function(part3pushing){
		var push3 = document.getElementById('intermission3').scrollHeight;
		$("#part3pushHeight").click(function(){
			$("#intermission3 .hidden-text").css("opacity","1"),
			$("#intermission3").animate({ height : push3+'px' },500);
		});
	});
	$(function(part4pushing){
		var push4 = document.getElementById('intermission4').scrollHeight;
		$("#part4pushHeight").click(function(){
			$("#intermission4").animate({ height : push4+'px' },500);
		});
	});

	/* init skrollr */
		console.log( "ready!" );
		skrollr.init({
			forceHeight: false
		});

});

