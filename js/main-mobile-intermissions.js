var twoColumns;

$(window).load(function() {
	/* init flexslider */
	$('.flexslider').flexslider();

	/* init columnizer */
	if ($(window).width() >= 600) {
		wrapArticle();
	}	
	else if ($(window).width() < 600) {
		twoColumns = false;
	}
});

$( document ).ready(function() {
	setMargins();
	intermissionClick();
	archivesClick();

	$(window).resize(function() {
		setMargins();

		if ($(window).width() < 600 && twoColumns != false) {
			unwrapArticle();
		}
		else if ($(window).width()>= 600 && twoColumns != true) {
			wrapArticle();
		}
	});

	$('.js .menu-link').click(function (e) {
		$('body').toggleClass('active');
		e.preventDefault();
    });

});

function wrapArticle() {
	twoColumns = true;
	$('.two-cols').columnize({
		columns:2,
		buildOnce: true
	});
}

function unwrapArticle() {
	twoColumns = false;
	$(".article-column p").unwrap();
	$(".column p").unwrap();
	splitText = $("p.split").text();
	$("p.split").prev("p").append(splitText);
	$("p.split").remove();
	$(".main-article-content").wrapInner("<div class='article-column'></div> ");
}

function archivesClick() {
	$(".archive-reveal-button").click(function() {
		$(this).siblings(".archive-content").slideToggle("slow", function() {
			if ($(this).is(':visible')){
				$(this).siblings(".archive-reveal-button").children("h5").text("Read Less");   			
			}
			else if ($(this).is(':hidden')){
				$(this).siblings(".archive-reveal-button").children("h5").text("Read More");   			
			}
		});
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


