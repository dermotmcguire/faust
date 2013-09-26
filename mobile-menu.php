<?php include('perch/runtime.php');?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<!--[if IEMobile 7 ]>    <html class="no-js iem7"> <![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html class="no-js"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  	================================================== -->
	<meta charset="utf-8">
	<title>FAUST - The Musical</title>
	<meta name="description" content="FAUST, a musical, is an original work written and composed for the stage by Alpha Crucis Arts, based on the legend of Faust - the man who sold his soul to the Devil." />
	<meta name="keywords" content="faust, faust the musical, alpha crucis arts, alphacrucis arts" />
	<meta name="robots" content="index, follow" />
	<meta name="author" content="Alpha Crucis Arts">

	<!-- Mobile Specific Metas
 	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cleartype" content="on">


	<!-- CSS
  	================================================== -->
  	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700|Old+Standard+TT:400,400italic,700|PT+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
	<!-- <link rel='stylesheet' href="/min/b=stylesheets&amp;f=base.css,skeleton.css,fixed-positioning.css,animations.css"/> -->
	<link rel="stylesheet" type="text/css" href="stylesheets/base.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/skeleton.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/fixed-positioning.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/animations.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/mobile-menu.css">

	<!-- JS
	================================================== -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
  	<script type="text/javascript" src="js/fastclick.js"></script>
  	<script type="text/javascript" src="js/smartpreload.js"></script>
  	<script type="text/javascript" src="js/modernizr.custom.js"></script>
  	<script type="text/javascript" src="js/jquery.inview.js"></script>
  	<script type="text/javascript" src="js/howler.min.js"></script>
  	<script type="text/javascript" src="js/sounds.js"></script>
  	<script type="text/javascript" src="js/smooth-scroll.js"></script>
  	<script type="text/javascript" src="js/jquery.columnizer.js"></script>
  	<script type="text/javascript" src="js/main-mobile.js"></script>

	<!--[if lt IE 9]>
	<script src="javascripts/skrollr.ie.min.js" type="text/javascript"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" 	 href="images/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57"		href="images/touch-icon-iphone-114.png" />
	<link rel="apple-touch-icon" sizes="114x114"	href="images/touch-icon-iphone-114.png" />
	<link rel="apple-touch-icon" sizes="72x72"		href="images/touch-icon-ipad-144.png" />
	<link rel="apple-touch-icon" sizes="144x144"	href="images/touch-icon-ipad-144.png" />

</head>

<body>

	<!--COPY THIS HTML - MAKE SURE THIS EVERYTHING IS WRAPPED INSIDE #WRAP-->
	<div class="wrap" id="wrap">

		<div class="menu-container slideDown">
			<a href="#menu" class="menu-link">&nbsp;</a>
		</div>

		<aside class="open-close" id="menu" role="navigation">
			<div id="nav-menu" class="mobile-menu">
				<ul class="container">
					<li class="eight columns section-link"><a class="scene-link" href='#scene1'><span>Part I: Before the Fall</span></a>
						<ul class="part1 submenu">
		       				<li class='first'><a href="#intermission1"><span>The Project</span></a></li>
		       				<li class='amp'><span>+</span></li>
		       				<li class='last'><a href="#intermission1"><span>The Production</span></a></li>
		     			</ul>
					</li>
					<li class="eight columns section-link"><a class="scene-link" href='#scene2'><span>Part II: The Wages of Sin</span></a>
				 		<ul class="part2 submenu">
		      				<li class='first'><a href="#intermission2"><span>Listen</span></a></li>
		       				<li class='amp'><span>+</span></li>
		       				<li class='last'><a href="#intermission2"><span>Look</span></a></li>
		     			</ul>
					</li>
					<li class="eight columns section-link"><a class="scene-link" href='#scene3'><span>Part III: The Stars Never Shine</span></a>
				 		<ul class="part3 submenu">
		       				<li class='first'><a href="#intermission3"><span>Newsflash</span></a></li>
		       				<li class='amp'><span>+</span></li>
		       				<li class='last'><a href="#intermission3"><span>The Archives</span></a></li>
		     			</ul>
					</li>
					<li class="eight columns section-link"><a class="scene-link" href='#scene4'><span>Part IV: Sign in Blood</span></a>
				 		<ul class="part4 submenu">
		       				<li class='center'><a class="center-link" href="#intermission4"><span>Contact Us</span></a></li>
		     			</ul>
					</li>
				</ul>
			</div>
		</aside>

		<!-- Start mobile content -->
		<div class="mobile-container" id="mobile-container">
			<div class="mobile-scenes">
				<!-- Scene 0 -->
				<section class="body-gradient-flood mobile-section gradient-1" id="scene0">

					<div class="js-image faust-falling"
					data-anchor-target = "#scene1"
					data-0-top		   = "top[swing]: -100%; display:!block;opacity:0.0;"
					data--200-top 	   = "top[swing]: 20%;opacity:1.0;"
					data--800-top 	   = "top[swing]: 25%;"
					data--1000-top     = "top[swing]: 35%;"
					data--5000-top     = "top[swing]: 10%;"
					data--7000-top     = "top[swing]: 25%;"
					data--9000-top	   = "top[swing]: 15%;"
					data--9200-top	   = "top[swing]: 25%;"
					data-0-bottom      = "top[swing]: 150%; display: !none;"
					data-image-url	 	= "images/sprite-faust-falling-mobile.png">
					<img src="">
					</div>

					<!-- Begin Intro -->
					<div class="scene intro container js-intro-splash">
						<div class="gradient-0">
							<div class="title"> <!-- title -->
								<p class="quote">I see my discourse leaves you cold;<br/>Dear kids, I do not take offense;<br/>Recall: the Devil, he is old,<br/>Grow old yourselves, and he'll make sense!</p>
								<p class="sub quote">&mdash;Johann Wolfgang Von Goethe, Faust</p>


								<div id="title-logo" class="loading-start">
									<div class="red-mask"></div>
									<div class="blue"></div>
								</div>
								<h3 class="title-sub-heading">The Musical</h3>
							</div>
							<!-- end title -->
						</div>
					</div> <!-- End Intro -->

				</section>

				<!-- Scene 1 -->
				<section class="mobile-section scene part1" id="scene1">
					<div class="city">
					    <img src="images/city-composite-mobile.png" class="city-composite" alt="scene1 cityscape" />
					</div>
				</section>

				<!-- Intermission 1 -->
				<section class="mobile-section" id="intermission1">
					The Project and The Production. Intermission1.
				</section>

				<!-- Scene 2 -->
				<section class="mobile-section" id="scene2">
					<div class="room">
					    <img src="images/room-composite-mobile.jpg" class="room-composite" alt="scene2 room" />
				    </div>
				</section>

				<!-- Intermission 2 -->
				<section class="mobile-section" id="intermission2">
					Listen and Look. Intermission2.
				</section>

				<!-- Scene 3 -->
				<section class="mobile-section" id="scene3">
					<div class="alley">
					    <img src="images/alley-composite-mobile.jpg" class="alley-composite" alt="scene3 alley" />
					</div>
				</section>

				<!-- Intermission 3 -->
				<section class="mobile-section" id="intermission3">
					Newsflash and the Archives. Intermssion3.
				</section>

				<!-- Scene 4 -->
				<section class="mobile-section" id="scene4">
					<div class="moon">
					    <img src="images/moon-composite-mobile.jpg" class="moon-composite" alt="scene4 moon" />
					</div>
				</section>

				<!-- Intermission 3 -->
				<section class="mobile-section" id="intermission4">
					Sign Up Form.
				</section>
			</div>
		</div>


	<!-- End mobile content -->
	</div>

<div class="clear"></div>

	<!-- Skrollr Lives Here! -->
	<script src="js/skrollr.min.js" type="text/javascript"></script>
	<script src="js/skrollr.ie.min.js" type="text/javascript"></script>

<!-- End Document
================================================== -->
</body>
</html>