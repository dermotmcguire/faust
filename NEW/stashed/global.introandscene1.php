<!-- Copy content from line 72 -->

<?php include('perch/runtime.php');?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>FAUST</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
  	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700|Old+Standard+TT:400,400italic,700|PT+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
  	<link href='http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css' rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/animations.css">
  	<link rel='stylesheet' media='screen and (min-width: 767px)' href="stylesheets/layout.css"/>
	<link rel='stylesheet' media='screen and (max-width: 767px)' href="stylesheets/mobile.css"/>


	<!-- JS
	================================================== -->
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="js/jquery.columnizer.js" type="text/javascript"></script>
	<script src="js/smartpreload.js" type="text/javascript"></script>
	<script src="js/modernizr.custom.js" type="text/javascript"></script>
	<script src="js/skrollr.min.js" type="text/javascript"></script>
	<script src="js/skrollr.menu.min.js" type="text/javascript"></script>
	<script src="js/jquery.inview.js" type="text/javascript"></script>
	<script src="js/smooth-scroll.js" type="text/javascript"></script>

	<!--[if lt IE 9]>
	<script src="javascripts/skrollr.ie.min.js" type="text/javascript"></script>
	<![endif]-->
	
	<!-- Contact Form
	================================================== -->
	<script src="cfg-contactform-4/js/contactform.js"></script>
	<link href="cfg-contactform-4/css/contactform.css" rel="stylesheet" type="text/css" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" 	 href="images/misc/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="57x57"		href="images/misc/touch-icon-iphone-114.png" />
	<link rel="apple-touch-icon" sizes="114x114"	href="images/misc/touch-icon-iphone-114.png" />
	<link rel="apple-touch-icon" sizes="72x72"		href="images/misc/touch-icon-ipad-144.png" />
	<link rel="apple-touch-icon" sizes="144x144"	href="images/misc/touch-icon-ipad-144.png" />




<script type="text/javascript">
	function imgLoaded(img){
    var $img = $(img);
    $img.parent().addClass('loaded');
};
</script>

</head>
<body>

<!-- Intro and Part 1 -->

<!-- Storyboard: 
	1. Intro text, image, quote appears.
	2. Page loading animation plays - body is set to overflow:auto c.f. http://www.barrelny.com/blog/taking-control-of-imageloading/.
	3. Scroll starts, faust falls through.
	5. City rises from below, faust falls to center.
	6. City scrolls to bottom, faust falls out of screen.
	7. Hotspots turn on.
-->

<div class="body-gradient-flood gradient-1">

<div class="faust-falling"
	data-0-start	= "top:-100%;"
	data-80-start 	= "top:60%;"
	data-800-start 	= "top[quadratic]:60%;"
	data-1000-start = "top[quadratic]:55%;transform:rotate(0deg);"
	data-5000-start = "top[quadratic]:30%;transform:rotate(10deg);"
	data-7000-start = "top[quadratic]:35%;transform:rotate(45deg);"
	data-9000-start	= "top[quadratic]:30%;"
	data-9200-start	= "top[quadratic]:25%;"
	data-10000-start= "top[quadratic]:150%;rotate(90deg);"></div>

		<div class="scene intro js-intro-splash"> <!-- Begin Intro -->

		
			<div class="container">
				
				<div class="intro-face centered">
					<div class="intro-face-complete"	></div>
					<div class="intro-face-glow"		></div>
					<img class="intro-face-lefteye" 	src="images/intro/face-lefteye.png" />
					<img class="intro-face-righteye" 	src="images/intro/face-righteye.png" />
				</div>
			

				<div class="title"> <!-- title -->
					<p>I see my discourse leaves you cold;<br/>Dear kids, I do not take offense;<br/>Recall: the Devil, he is old,<br/>Grow old yourselves, and he'll make sense!</p>
					<p class="sub-quote">&mdash;Johann Wolfgang Von Goethe, Faust</p>
					<div class="title-logo">
						<div class="image_wrapper">
							<img class="logo-blue" src="images/intro/intro-title-blue.png" alt="FAUST" onload="imgLoaded(this)" />
						</div>
						<div class="image_wrapper">
							<img class="logo-red"  src="images/intro/intro-title-red.png"  alt="FAUST" onload="imgLoaded(this)" />
						</div>
					</div>

					<div class="loading-bar">
						<div class="image_wrapper">
							<img class="loading-bar-mask" src="images/intro/loading-bar-mask-red.png" alt="loading-bar-mask" />
						</div>
						<div class="image_wrapper">
							<img class="loading-bar" src="images/intro/loading-bar-mask-grey.png" alt="loading-bar" onload="imgLoaded(this)" />
						</div>
					</div>
					
					<p class="loading-text">LOADING</p>
					<p class="loading-text-ready">START SCROLLING</p>
				</div> <!-- end title -->

			</div>
			
			<div class="city-pre">
				<div class="intro-spotlights">
					<div class="image_wrapper">
						<img class="spotlight-left-outer"		src="images/intro/spotlight-left.png" onload="imgLoaded(this)" />
					</div>
					<div class="image_wrapper">
						<img class="spotlight-right-inner"		src="images/intro/spotlight-right.png" onload="imgLoaded(this)" />
					</div>
					<div class="image_wrapper">
						<img class="spotlight-left-inner"		src="images/intro/spotlight-left.png" onload="imgLoaded(this)" />
					</div>
					<div class="image_wrapper">
						<img class="spotlight-right-outer"		src="images/intro/spotlight-right.png" onload="imgLoaded(this)" />
					</div>
				</div>
			</div>

			

		</div> <!-- End Intro -->

		<div class="scene part1"> <!-- Part 1 -->

			<div class="city centered">

			<div class="city-left-back"
					data--100-top-top	 = "background-position:0px 200px;"
					data-500-top-top 	 = "background-position:0px 0px;"
					data--300-bottom-bottom = "background-position:0px 0px; postition:!fixed;">
				</div>
				
				<div class="city-centre-back"
					data-100-top-top	 = "background-position:0px 0px;	transform:scale(1);" 	
					data-500-top-top	 = "background-position:0px 0px;"
					data--300-bottom-bottom = "background-position:0px 0px; postition:!fixed; transform:scale(0.9);">
				</div>
				
				
				<div class="city-right-mid"
					data--100-top-top	 = "background-position:0px 250px;"
					data-250-top-top	 = "background-position:0px 125px;"
					data-500-top-top	 = "background-position:0px 0px;"
					data--300-bottom-bottom = "background-position:0px 0px;  postition:!fixed;">
				<span class="hotspot apartment on" data-bottom = "opacity:!1;" data--50-bottom= "opacity:0.5;" ></span>
				<span class="hotspot apartment off"></span>	
				</div>
				
				<div class="city-left-mid"
					data--100-top-top	 = "background-position:0px 250px; left: 10%;"
					data-250-top-top	 = "background-position:0px 125px;"
					data-500-top-top	 = "background-position:0px 0px; "
					data--300-bottom-bottom = "background-position:0px 0px; left: 8%; postition:!fixed;">
				</div>
				
				

				<div class="city-right-fore"
					data--100-top-top	 = "background-position:0px 300px; 	right:-5%;"
					data-500-top-top	 = "background-position:0px 0px;"
					data--300-bottom-bottom = "background-position:0px 0px; postition:!fixed; right:0%;">
				<span class="hotspot sixsixsix on" data-bottom = "opacity:!1;" data--50-bottom= "opacity:0.5;" ></span>
				<span class="hotspot sixsixsix off"></span>
				</div>


					
				<div class="city-left-fore"
					data--100-top-top	 = "background-position:0px 300px; 	left:-5%;"
					data-500-top-top	 = "background-position:0px 0px;"
					data--300-bottom-bottom = "background-position:0px 0px; postition:!fixed; left:0%;">
				<span class="hotspot hotel on" data-bottom = "opacity:!1;" data--50-bottom= "opacity:0.5;" ></span>
				<span class="hotspot hotel off"></span>
				<span class="hotspot radio on" data-bottom = "opacity:!1;" data--50-bottom= "opacity:0.5;" ></span>
				<span class="hotspot radio off"></span>
				</div>
				
			</div>

		</div>

</div> <!-- End Gradient Flood 1 -->
<div class="delete-me"></div>
<!-- End Part 1 -->
<script type="text/javascript">
	var s = skrollr.init({
		edgeStrategy: 'ease'
	});

	$(window).scroll(function() {
		$('.hotspot').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("pulse");
			}
		});
	});

</script>

<!-- End Document
================================================== -->
</body>
</html>