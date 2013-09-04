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

</head>
<body>
<!-- Part 2 -->

<!-- Storyboard: 
	1. Room scales backwards through entire length.
	2. City Background fades in, pulls back.
	3. Window fades in, unblurs, pulls back.
	5. Couch section fades in, unblurs, pulls back.
	6. Curtains and M + F move from right and left, respectively.
	7. Tower section turns on, starts animating.
-->


<div class="scene part2" id="scene2">
	<div class="body-gradient-flood gradient-2">

		<div class="room centered">

			<div class="animation-tracking-container">

				<div class="scene2-layer city-background centered"
				data-anchor-target="#scene2"
				data-0-top    = "display:!block; opacity: 0.0; filter: blur(5.0px); transform: translate3d( 0, 0, -500px) scale(2.0);"
				data-200-top  = " 				 opacity: 1.0; filter: blur(5.0px); transform: translate3d( 0, 0, -500px) scale(1.0);"
				data-5000-top = " 				 opacity: 1.0; filter: blur(1.1px); transform: translate3d( 0, 0, -500px) scale(0.6);"
				data-0-bottom = " 				 opacity: 0.9; filter: blur(1.0px); transform: translate3d( 0, 0, -500px) scale(0.5);">

					<img class="city-black" src="./images/part2/room-citybg-black.png" />
					<img class="city-lights" src="./images/part2/room-citybg-lights.png" />
					<img class="city-lights-sparkle1 flicker" src="./images/part2/room-citybg-lights-sparkle1.png" />
					<img class="city-lights-sparkle2 flicker" src="./images/part2/room-citybg-lights-sparkle2.png" />
					<span class="tower">
						<span class="scene2-layer tower-light"
						data-anchor-target="#scene2"
						data--100-bottom = "display: !block; opacity: 0.0;"
						data-0-bottom    = "display: !block; opacity: 1.0;"></span>
						<span class="scene2-layer tower-sprite"
						data-anchor-target="#scene2"
						data--100-bottom = "display: !block; opacity: 0.0;"
						data-0-bottom    = "display: !block; opacity: 1.0;"></span>
					</span>
				</div>

				<div class="scene2-layer window centered"
				data-anchor-target="#scene2"
				data-0-top    = "display:!block; opacity: 0.0; filter: blur(2.0px); transform: translate3d( 0, 0, -400px) scale(2.0);"
				data-200-top  = "				 opacity: 1.0; filter: blur(2.0px); transform: translate3d( 0, 0, -400px) scale(1.0);"
				data-5000-top = "				 opacity: 0.4; filter: blur(1.1px); transform: translate3d( 0, 0, -400px) scale(0.7);"
				data-0-bottom = "				 opacity: 0.3; filter: blur(1.0px); transform: translate3d( 0, 0, -300px) scale(0.6);">
  				</div>
				
				<div id="third" class="scene2-layer room-inner centered"
				data-anchor-target="#scene2"
				data-0-top       = "display:!block; opacity: 0.0; filter: blur(2.0px); transform: translate3d( 0, 0, -300px) scale(2.0);"
				data-800-top     = "				opacity: 1.0; filter: blur(2.0px); transform: translate3d( 0, 0, -300px) scale(1.0);"
				data-5000-bottom = "				opacity: 0.4; filter: blur(1.1px); transform: translate3d( 0, 0, -200px) scale(0.7);"
				data-0-bottom  	 = "				opacity: 0.3; filter: blur(1.0px); transform: translate3d( 0, 0, -200px) scale(0.6);">
  					
					<div class="scene2-layer couch-section"
					data-anchor-target="#scene2"
					data-0-top       = "    			opacity: 0.0; filter: blur(5.0px); transform: translate3d( 0, 0, -250px) scale(2.0);"
					data-1800-top    = "display:!block; opacity:!1.0; filter: blur(5.0px); transform: translate3d( 0, 0, -250px) scale(2.0);"
					data-5000-bottom = "							  filter: blur(0.1px); transform: translate3d( 0, 0, -150px) scale(1.0);"
					data-0-bottom    = "							  filter: blur(0.0px); transform: translate3d( 0, 0, -150px) scale(1.0);">
						<div class="couch"></div>
						<div class="couch-salome"></div>
						<span class="couch-salome-sprite"></span>
					</div>
				
					<div class="scene2-layer curtain-left"
						data-anchor-target="#scene2"
						data-0-top       = "                left: -10%; opacity: 0.0; filter: blur(1.1px); transform: translate3d( 0, 0, -250px) scale(1.2);"
						data-5000-top    = "display:!block; left: -10%; opacity:!1.0; filter: blur(1.1px); transform: translate3d( 0, 0, -250px) scale(1.2);"
						data-7500-bottom = "				left: -05%; opacity: 0.4; filter: blur(1.1px); transform: translate3d( 0, 0, -150px) scale(0.7);"
						data-0-bottom    = "				left: +10%; opacity: 0.3; filter: blur(1.0px); transform: translate3d( 0, 0, -150px) scale(0.6);">
					</div>
					
					<div class="scene2-layer curtain-right"
						data-anchor-target="#scene2"
						data-0-top       = "                right: -10%; opacity: 0.0; filter: blur(1.1px); transform: translate3d( 0, 0, -250px) scale(1.2);"
						data-5000-top    = "display:!block; right: -10%; opacity:!1.0; filter: blur(1.1px); transform: translate3d( 0, 0, -250px) scale(1.2);"
						data-7500-bottom = "				right: -05%; opacity: 0.4; filter: blur(1.1px); transform: translate3d( 0, 0, -150px) scale(0.7);"
						data-0-bottom    = "				right: +10%; opacity: 0.3; filter: blur(1.0px); transform: translate3d( 0, 0, -150px) scale(0.6);">
					</div>
					
					<div class="scene2-layer mephisto"
						data-anchor-target="#scene2"
						data-0-top       = "                left: -10%; opacity: 0.0; filter: blur(1.1px); transform: translate3d( 0, 0, -250px) scale(1.2);"
						data-6000-top    = "display:!block; left: -10%; opacity:!1.0; filter: blur(1.1px); transform: translate3d( 0, 0, -250px) scale(1.2);"
						data-8000-bottom = "				left: -05%; opacity: 0.4; filter: blur(1.1px); transform: translate3d( 0, 0, -150px) scale(0.7);"
						data-0-bottom    = "				left: +10%; opacity: 0.3; filter: blur(1.0px); transform: translate3d( 0, 0, -150px) scale(0.6);">

					</div>
					
					<div class="scene2-layer faust"
						data-anchor-target="#scene2"
						data-0-top       = "                right: -10%; opacity: 0.0; filter: blur(1.1px); transform: translate3d( 0, 0, -250px) scale(1.2);"
						data-6000-top    = "display:!block; right: -10%; opacity:!1.0; filter: blur(1.1px); transform: translate3d( 0, 0, -250px) scale(1.2);"
						data-8000-bottom = "				right: -05%; opacity: 0.4; filter: blur(1.1px); transform: translate3d( 0, 0, -150px) scale(0.7);"
						data-0-bottom    = "				right: +10%; opacity: 0.3; filter: blur(1.0px); transform: translate3d( 0, 0, -150px) scale(0.6);">
					</div>
				</div>

			</div>
		</div>
	</div> 
</div>

<!-- End Part 2 -->
<script type="text/javascript">
	var s = skrollr.init({
		forceHeight: 'false'
	});

</script>

<!-- End Document
================================================== -->
</body>
</html>