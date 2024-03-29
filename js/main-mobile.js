var twoColumns;
var initHeight;
// var s;
$(window).load(function() {
	/* init flexslider */
	$('.flexslider').flexslider();

	/* init columnizer */
	if ($(window).width() >= 600) {
		wrapArticle();
		$("#intermission1").find(".flex-next").attr("href", "#intermission1");
		$("#intermission2").find(".flex-next").attr("href", "#intermission2");
		$("#intermission3").find(".flex-next").attr("href", "#intermission3");
		$("#intermission1").find(".flex-prev").attr("href", "#intermission1");
		$("#intermission2").find(".flex-prev").attr("href", "#intermission2");
		$("#intermission3").find(".flex-prev").attr("href", "#intermission3");
	}	
	else if ($(window).width() < 600) {
		twoColumns = false;
		$("#intermission1").find(".flex-next").attr("href", "#intermission1");
		$("#intermission2").find(".flex-next").attr("href", "#intermission2");
		$("#intermission3").find(".flex-next").attr("href", "#intermission3");
		$("#intermission1").find(".flex-prev").attr("href", "#intermission1");
		$("#intermission2").find(".flex-prev").attr("href", "#intermission2");
		$("#intermission3").find(".flex-prev").attr("href", "#intermission3");
	}

 	var s = skrollr.init({
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
});
	
$( document ).ready(function() {
	archivesClick();
	$(window).resize(function() {
		// skrollr.init().refresh();
		// this checks the page to see if the content needs to
		// be columnizes or not
		if ($(window).width() < 600 && twoColumns != false) {
			unwrapArticle();
		}
		else if ($(window).width()>= 600 && twoColumns != true) {
			wrapArticle();
		}
	});

	/* Top Menu click handlers */
	$( ".menu-link" ).click(function() {
		$( ".open-close" ).toggleClass("active");
	});

	$( ".mobile-menu a" ).click(function() {
		$( ".open-close" ).toggleClass("active");
	});

	/* init FastClick */
    $(function() {
    FastClick.attach(document.body);
	});
	document.addEventListener("touchstart", function(){
		// skrollr.init().refresh();
	}, true)

  $('#scene1').bind('inview', function (event, visible) {
  	var inView;
  	var prevView;
    if (visible) {
    	prevView = inView;
    	inView = true;
    	console.log(inView, prevView);
		}
		else {
		prevView = inView;
		inView = false;
    	console.log(inView, prevView);
		}
		if (prevView != inView){
			console.log("something");
		}
  	});
	// initHeight = $("#skrollr-body").height();
	

	// flexArrows = document.getElementsByClassName('flex-next')

	// for (i=0; i<flexArrows.length; i++){
	// 	flexArrows[i].addEventListener("touchstart", function(){
	// 		skrollr.init().refresh();
	// 	}, true);
	// }

});

//columnizes
function wrapArticle() {
	// skrollr.init().refresh();
	twoColumns = true;
	$('.two-cols').columnize({
		columns:2,
		buildOnce: true
	});
}

//de-columnizes
function unwrapArticle() {
	// skrollr.init().refresh();
	twoColumns = false;
	$(".article-column p").unwrap();
	$(".column p").unwrap();
	splitText = $("p.split").text();
	$("p.split").prev("p").append(splitText);
	$("p.split").remove();
	$(".main-article-content").wrapInner("<div class='article-column'></div> ");
}

function archivesClick() {
	// skrollr.init().refresh();
	$(".archive-reveal-button").click(function() {
		$(this).siblings(".archive-content").slideToggle("slow", function() {
			if ($(this).is(':visible')){
				$(this).siblings(".archive-reveal-button").children("h5").text("Read Less");   	
				$("#intermission3").css("height",$("#intermission3").height()+ $(this).height());		
			}
			else if ($(this).is(':hidden')){
				$(this).siblings(".archive-reveal-button").children("h5").text("Read More");
				$("#intermission3").css("height",$("#intermission3").height() - $(this).height());   			
			}
		});
	});
}

