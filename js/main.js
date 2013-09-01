// $( document ).ready(function() {
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
	function loading(){
		// The number of bg images on the page we are waiting for
		numberOfImages = $('.js-image').length,
		//tracks how many have loaded
		numberOfLoaded = 0,
		//breaks up the loader into stages for accurate representation
		step = 100 / numberOfImages;
		//for each div with a background image we care about waiting for
		$('.js-image').each( function (i, item) {
			//fetch the url from the data attribute
			imageURL = $(this).data("image-url");
			//I have split the directory path from the image name to accomodate a changing file path
			//sets the image src to that in the data type so we can measure the load time
			$(item).children('img').attr('src',  imageURL).load( function() {
				//increase counter of loaded images
				numberOfLoaded++;
				//remove the image from the page as we no longer need it
				this.remove();
				progressBar(step * numberOfLoaded, $('.loading-bar'));
			});
			//load image into the background of the appropriate div, or this can be set in the css which is preferable.
			$(item).css('background-image', "url('"+ imageURL+"')");
		});		
	}


// });

