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
	<title>FAUST - The Musical</title>
	<meta name="description" content="FAUST, a musical, is an original work written and composed for the stage by Alpha Crucis Arts, based on the legend of Faust - the man who sold his soul to the Devil." />
	<meta name="keywords" content="faust, faust the musical, alpha crucis arts, alphacrucis arts" />
	<meta name="robots" content="index, follow" />
	<meta name="author" content="Alpha Crucis Arts">

	<!-- CSS
	================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700|Old+Standard+TT:400,400italic,700|PT+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
	<!-- <link rel='stylesheet' type='text/css' href="/min/b=stylesheets&amp;f=base.css,skeleton.css,fixed-positioning.css,animations.css,layout.css"> -->
	<link rel='stylesheet' type='text/css' href="stylesheets/base.css">
	<link rel='stylesheet' type='text/css' href="stylesheets/skeleton.css">
	<link rel='stylesheet' type='text/css' href="stylesheets/fixed-positioning.css">
	<link rel='stylesheet' type='text/css' href="stylesheets/animations.css">
	<link rel='stylesheet' type='text/css' href="stylesheets/layout.css">

	<!-- JS
	================================================== -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/conditionizr.js/2.2.0/conditionizr.min.js" ></script>
	<!-- <script type="text/javascript" src="/min/b=js&amp;f=smartpreload.js,jquery.inview.js,howler.min.js,sounds.js,smooth-scroll.js,jquery.columnizer.js,skrollr.min.js,main.js"></script> -->
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
	<script type="text/javascript" src="js/smartpreload.js"></script>
	<script type="text/javascript" src="js/jquery.inview.js"></script>
	<script type="text/javascript" src="js/howler.min.js"></script>
	<script type="text/javascript" src="js/sounds.js"></script>
	<script type="text/javascript" src="js/smooth-scroll.js"></script>
	<script type="text/javascript" src="js/jquery.columnizer.js"></script>
	<script type="text/javascript" src="js/skrollr.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

		<script>
		conditionizr({
			chrome     : { classes: true },
			safari     : { classes: true },
			opera      : { classes: true },
			firefox    : { classes: true },
			ie10       : { classes: true },
			ie9        : { classes: true },
			ie8        : { classes: true },
			ie7        : { classes: true },
			ie6        : { classes: true }
		});
		</script>

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" 	 href="images/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57"		href="images/touch-icon-iphone-114.png" />
	<link rel="apple-touch-icon" sizes="114x114"	href="images/touch-icon-iphone-114.png" />
	<link rel="apple-touch-icon" sizes="72x72"		href="images/touch-icon-ipad-144.png" />
	<link rel="apple-touch-icon" sizes="144x144"	href="images/touch-icon-ipad-144.png" />

</head>

<body>

	<div class="left-border"></div>
	<div class="right-border"></div>
	<div class="version-suggestion background">
	</div>
	<div class="version-suggestion">
		<div class="version-message">
			<h6>Hello,</h6>
		<br/>
		<p>
			It looks as though your browser is a little outdated. For a better experience, please <a href="http://browserupdate.org/update.html" target="_blank">update it now</a>.
		</p>
		<br/>
		<h6>-OR-</h6>
		<br/>
		<p>
			Get in touch with us via email at:<br/><a href="mailto:info@faust-musical.com">info@faust-musical.com</a>
		</p>
	</div>
	</div>
	<!-- nav-menu -->
	<div id="nav-menu-wrapper">
		<div id="nav-menu">
			<ul>
				<li class='has-sub'><a href='#scene1'><span>Part I</span></a>
					<ul>
						<li class='has-sub'><a href="#intermission1"><span>Before the Fall</span></a>
							<ul class="part1-submenu">
			       				<li><a href="#the-project"><span>The Project</span></a></li>
			       				<li class='last'><a href="#the-production"><span>The Production</span></a></li>
			     			</ul>
			   			</li>
			 		</ul>
				</li>
				<li class='has-sub'><a href='#scene2'><span>Part II</span></a>
			 		<ul>
			   			<li class='has-sub'><a href="#intermission2"><span>The Wages of Sin</span></a>
		   					<ul class="part2-submenu">
			      				<li><a href="#listen"><span>Listen</span></a></li>
			       				<li class='last'><a href="#look"><span>Look</span></a></li>
			     			</ul>
		   				</li>
			 		</ul>
				</li>
				<li class='has-sub'><a href='#scene3'><span>Part III</span></a>
			 		<ul>
			   			<li class='has-sub'><a href="#intermission3"><span>The Stars Never Shine</span></a>
			     			<ul class="part3-submenu">
			       				<li><a href="#newsflash"><span>Newsflash</span></a></li>
			       				<li class='last'><a href="#the-archives"><span>The Archives</span></a></li>
			     			</ul>
			   			</li>
			 		</ul>
				</li>
				<li class='has-sub'><a href='#scene4'><span>Part IV</span></a>
			 		<ul>
			   			<li class='has-sub'><a href="#intermission4"><span>Sign in Blood</span></a>
			     			<ul class="part4-submenu">
			       				<li class='last'><a href="#intermission4"><span>Contact Us</span></a></li>
			     			</ul>
			   			</li>
			 		</ul>
				</li>
				<li class="audio-button">
					<span class="icon-volume"></span>
				</li>
			</ul>
		</div>
	</div>




	<!-- start all-scenes -->
	<div class="all-scenes gradient-1" id="desktop-scenes">

		<!-- start scene0 -->
		<div class="body-gradient-flood gradient-1" id="scene0">

			<div class="js-image faust-falling"
			data-anchor-target = "#scene0"
			data-0-top		   = "top[swing]: -100%; display: !block;opacity:0.0;"
			data--200-top 	   = "top[swing]: 20%;opacity:1.0;"
			data--800-top 	   = "top[swing]: 25%;"
			data--1000-top     = "top[swing]: 35%;"
			data--5000-top     = "top[swing]: 10%;"
			data--7000-top     = "top[swing]: 25%;"
			data--9000-top	   = "top[swing]: 15%;"
			data--9200-top	   = "top[swing]: 25%;"
			data-0-bottom      = "top[swing]: 150%; display: !none;"
			data-image-url	 	= "images/sprite-faust-falling.png">
			<img src="">
			</div>

			<!-- start intro -->
			<div class="scene intro js-intro-splash">
				<div class="container gradient-0">
					<div class="title"> <!-- title -->

						<p class="quote">I see my discourse leaves you cold;<br/>Dear kids, I do not take offense;<br/>Recall: the Devil, he is old,<br/>Grow old yourselves, and he'll make sense!</p>
						<p class="sub quote">&mdash;Johann Wolfgang Von Goethe, Faust</p>

						<div id="title-logo" class="loading-start">
							<div class="red-mask"></div>
							<div class="blue"></div>
						</div>
						<h3 class="title-sub-heading">The Musical</h3>

						<div class="loading-container">

							<div class="loading-bar">
								<div class="progress"></div>
							</div>

							<ul class="loading-text slides">
								<li class="slide">
									<p class="loading-text loading">Loading</p>
									<script>
									$(".loading").fadeIn(2000, function(){
										$(this).addClass("pulse");
									});
									</script>
								</li>
								<li class="slide">
									<p class="loading-text ready ">Start Scrolling</p>
								</li>
							</ul>

						</div>

						<span class="ready-arrow pulse"> </span>

					<!-- end title -->
					</div>
				</div>
			</div>
			<!-- end intro -->




			<!-- start city-pre -->
			<div class="city-pre">

				<div class="js-image scene-layer one-c" data-image-url="images/spotlight-left.png">
				<img src="">
				</div>

				<div class="intro-spotlights fadeIn">
					<img class="spotlight-left-outer"		src="images/spotlight-left.png"  />
					<img class="spotlight-right-inner"		src="images/spotlight-right.png"  />
					<img class="spotlight-left-inner"		src="images/spotlight-left.png" />
					<img class="spotlight-right-outer"		src="images/spotlight-right.png" />
				</div>

			</div>
			<!-- end city-pre -->




			<!-- start scene1 -->
			<div class="scene part1" id="scene1">

				<div class="city centered"
				data-anchor-target  = "#scene1"
				data-0-top			= "display:!block;">

					<div class="js-image scene1-layer city-compilation"
					data-anchor-target	= "#scene1"
					data-800-top		= "display:!block; position:!relative; opacity: 0; transform: scale(1.2) translate3d(0,800px,0);"
					data-450-top		= "opacity: 1;"
					data-0-bottom 		= "transform: scale(1) translate3d(0,-20px,0);"
					data-image-url		= "images/city-compilation1-v2.png">
					<img src="">

						<div class="intro-face">
							<div class="intro-face-complete faceglow"></div>
							<div class="intro-face-glow"></div>
							<img class="intro-face-lefteye eyeglow" src="images/face-lefteye.png" />
							<img class="intro-face-righteye eyeglow" src="images/face-righteye.png" />
						</div>

						<span class="hotspot harbinger on flicker"></span>
						<span class="hotspot apartment on flicker"></span>
						<span class="hotspot sixsixsix on flicker"></span>
						<span class="hotspot hotel on flicker"></span>
						<span class="hotspot radio on flicker"></span>

					</div>

				</div>
			</div>
			<!-- end scene1 -->
		</div>
		<!-- end scene0 -->




		<!-- start intermission1 -->
		<section class="intermission one" id="intermission1"
		data-anchor-target  = "#intermission1"
		data-0-top			= "display:!block;">

			<div class="intermission-gradient-top"></div>
			<div class="intermission-gradient-vignette"></div>

			<div class="intermission-content">
				<header> </header>

				<div class="intermission-accessories">
					<div class="js-image stain-1"
					data-image-url = "images/newspaper-stain-1.png">
					<img src="">
					</div>
					<div class="js-image stain-2"
					data-image-url = "images/newspaper-stain-2.png">
					<img src="">
					</div>

					<div class="intermission-main">

						<div class="news-lines"></div>

						<div class="container">
							<div class="headlines">
								<div class="headline columns three left">
									<h3 class="palette-blood-red">PART I</h3>
								</div>
								<div class="headline columns thirteen right">
									<h2>BEFORE THE FALL</h2>
								</div>
							</div>
						</div>

						<div class="news-lines"></div>

						<div class="news container">
							<div class="narrative-text news-copy">
								<?php perch_content('Part 1 Narrative Content'); ?>
							</div>

							<div class="eight columns">
								<button class="more-info-button one"><h3 id="the-project" ><span class="fleurdelis-left">-</span>THE PROJECT<span class="fleurdelis-right">-</span></h3></button>
							</div>
							<div class="eight columns">
								<button class="more-info-button one"><h3 id="the-production" ><span class="fleurdelis-left">-</span>THE PRODUCTION<span class="fleurdelis-right">-</span></h3></button>
							</div>
						</div>

						<div class="more-info one container">

							<div class="eight columns information-text" id="the-project">
								<?php perch_content('The Project'); ?>
								<div class="article-divide"></div>
							</div>
							<div class="eight columns information-text" id="the-production">
								<?php perch_content('The Production'); ?>
								<div class="article-divide"></div>
							</div>
						</div>

					</div>
				</div>
				<footer></footer>
			</div>
			<div class="intermission-gradient-bottom"></div>
		</section>
		<!-- end intermission1 -->




		<!-- start part2 .csstransforms3d -->
		<div id="scene2" class="scene part2 gradient-2 csstransforms3d">
			<div class="room centered scene-container"
			data-anchor-target  = "#scene2"
			data--1-top			= "position:!fixed;"
			data-0-top			= "position:!relative; top: 0%;"
			data--14300-top		= "top:0%"
			data--15800-top		= "top:-100%; position:!relative;">

				<div class="overflow">

					<div class="scene-layer room-shadow-left"
					data-anchor-target  = "#scene2"
					data-500-top		= "width:50%; box-shadow: 0px 0px 0px 0px rgba(0,0,0,1);"
					data--5000-top		= "width:-10%; box-shadow: 20px 0px 20px 0px rgba(0,0,0,0.5);">
					</div>

					<div class="scene-layer room-shadow-right"
					data-anchor-target  = "#scene2"
					data-500-top		= "width:50%; box-shadow: 0px 0px 0px 0px rgba(0,0,0,1);"
					data--5000-top		= "width:-10%; box-shadow: -20px 0px 20px 0px rgba(0,0,0,0.5);">
					</div>

					<div class="scene-layer cityscape-master"
					data-anchor-target	= "#scene2"
					data-0-top			= "display:!block; opacity: 1.0; transform: translate3d(200px, -10px, 0) scale(1.2);"
					data-0-bottom		= "opacity: 1.0; transform: translate3d(-40px, 0, 0) scale(0.8);">

						<div class="js-image scene-layer citylights-master"
						data-anchor-target	= "#scene2"
						data-image-url		= "images/room-citylights-master.png">
						<img src="">
						</div>

						<div class="js-image scene-layer sparklelights1-master flicker-slow-one"
						data-anchor-target	= "#scene2"
						data-image-url		= "images/room-sparklelights1-master.png">
						<img src="">
						</div>

						<div class="js-image scene-layer sparklelights2-master flicker-slow-one"
						data-anchor-target	= "#scene2"
						data-image-url		= "images/room-sparklelights2-master.png">
						<img src="">
						</div>

					</div>

					<div class="js-image scene-layer room-master"
					data-anchor-target	= "#scene2"
					data-0-top			= "display:!block; opacity: 1.0; transform: translate3d(-5%, -30%, 0px) scale(1.55); filter: blur(3px);"
					data-0-bottom		= "filter: blur(1px); transform: translate3d(-12%, -28%, 0) scale(0.55);"
					data-image-url		= "images/room-master.png">
					<img src="">
						<span class="couch-salome-sprite"></span>

						<div class="js-image scene-layer room-master-mask"
						data-anchor-target  = "#scene2"
						data-500-top		= "display:!block; opacity:1;"
						data--5000-top		= "opacity:0;"
						data-image-url		= "images/room-master-mask.png">
						<img src="">
						</div>

					</div>

					<div class="js-image scene-layer mephisto-master"
					data-anchor-target 	= "#scene2"
					data-0-top			= "display:!block; opacity: 1.0; transform: translate3d(15%, -30%, 0) scale(0.8);"
					data-0-bottom		= "transform: translate3d(-20%, -30%, 0) scale(0.6);"
					data-image-url		= "images/room-mephisto-master-v2.png">
					<img src="">
					</div>

					<div class="js-image scene-layer faust-master"
					data-anchor-target 	= "#scene2"
					data-0-top			= "display:!block; opacity: 1.0; transform: translate3d(-10%, -30%, 0) scale(1.55);"
					data-0-bottom		= "transform: translate3d(15%, -34%, 0) scale(0.6);"
					data-image-url		= "images/room-faust-master-v2.png">
					<img src="">
					</div>

				</div>
				<div class="test"></div>
			</div>
		</div>
		<!-- end part2 .csstransforms3d -->




		<!-- start part2 .no-csstransforms3d -->
		<div id="scene2" class="scene part2 gradient-2 no-csstransforms3d scene2no3d">
			<div class="room centered scene-container"
			data-anchor-target  = ".scene2no3d"
			data--1-top			= "position:!fixed;"
			data-0-top			= "position:!relative; top: 0%;"
			data--14300-top		= "top:0%"
			data--15800-top		= "top:-100%; position:!relative;">

				<div class="overflow">

					<div class="scene-layer room-shadow-left"
					data-anchor-target  = ".scene2no3d"
					data-500-top		= "width:50%; box-shadow: 0px 0px 0px 0px rgba(0,0,0,1);"
					data--5000-top		= "width:-10%; box-shadow: 20px 0px 20px 0px rgba(0,0,0,0.5);">
					</div>

					<div class="scene-layer room-shadow-right"
					data-anchor-target  = ".scene2no3d"
					data-500-top		= "width:50%; box-shadow: 0px 0px 0px 0px rgba(0,0,0,1);"
					data--5000-top		= "width:-10%; box-shadow: -20px 0px 20px 0px rgba(0,0,0,0.5);">
					</div>

					<div class="scene-layer cityscape-master"
					data-anchor-target	= ".scene2no3d"
					data-0-top			= "display:!block; opacity: 1.0; transform: translate(200px, -10px) scale(1.2);"
					data-0-bottom		= "opacity: 1.0; transform: translate(-40px, 0) scale(0.8);">

						<div class="js-image scene-layer citylights-master"
						data-anchor-target	= ".scene2no3d"
						data-image-url		= "images/room-citylights-master.png">
						<img src="">
						</div>

						<div class="js-image scene-layer sparklelights1-master flicker-slow-one"
						data-anchor-target	= ".scene2no3d"
						data-image-url		= "images/room-sparklelights1-master.png">
						<img src="">
						</div>

						<div class="js-image scene-layer sparklelights2-master flicker-slow-one"
						data-anchor-target	= ".scene2no3d"
						data-image-url		= "images/room-sparklelights2-master.png">
						<img src="">
						</div>

					</div>

					<div class="js-image scene-layer room-master"
					data-anchor-target	= ".scene2no3d"
					data-0-top			= "display:!block; opacity: 1.0; transform: translate(-5%, -30%) scale(1.55); filter: blur(3px);"
					data-0-bottom		= "filter: blur(1px); transform: translate(-12%, -28%) scale(0.55);"
					data-image-url		= "images/room-master.png">
					<img src="">
						<span class="couch-salome-sprite"></span>

						<div class="js-image scene-layer room-master-mask"
						data-anchor-target  = ".scene2no3d"
						data-500-top		= "display:!block; opacity:1;"
						data--5000-top		= "opacity:0;"
						data-image-url		= "images/room-master-mask.png">
						<img src="">
						</div>

					</div>

					<div class="js-image scene-layer mephisto-master"
					data-anchor-target 	= ".scene2no3d"
					data-0-top			= "display:!block; opacity: 1.0; transform: translate(15%, -30%) scale(0.8);"
					data-0-bottom		= "transform: translate(-20%, -30%) scale(0.6);"
					data-image-url		= "images/room-mephisto-master-v2.png">
					<img src="">
					</div>

					<div class="js-image scene-layer faust-master"
					data-anchor-target 	= ".scene2no3d"
					data-0-top			= "display:!block; opacity: 1.0; transform: translate(-10%, -30%) scale(1.55);"
					data-0-bottom		= "transform: translate(15%, -34%) scale(0.6);"
					data-image-url		= "images/room-faust-master-v2.png">
					<img src="">
					</div>

				</div>
				<div class="test"></div>
			</div>
		</div>
		<!-- end part2 .no-csstransforms3d -->




		<!-- start intermission2 -->
		<section class="intermission two" id="intermission2"
		data-16501-top = "position:!relative; top:0px"
		data-16500-top = "position:!fixed; top:2531px"
		data-15000-top = "top:901px"
		data-901-top		= "position:!fixed;"
		data-900-top 		= "position:!relative; top:0px">

			<div class="intermission-gradient-top"></div>
			<div class="intermission-gradient-vignette"></div>

			<div class="intermission-content">
				<header> </header>

				<div class="intermission-accessories">
					<div class="js-image stain-1"
					data-image-url = "images/newspaper-stain-1.png">
					<img src="">
					</div>
					<div class="js-image stain-2"
					data-image-url = "images/newspaper-stain-2.png">
					<img src="">
					</div>

						<div class="intermission-main">

							<div class="news-lines"></div>

							<div class="container">
								<div class="headlines">
									<div class="headline columns three left">
										<h3 class="palette-blood-red">PART II</h3>
									</div>
									<div class="headline columns thirteen right">
										<h2>THE WAGES OF SIN</h2>
									</div>
								</div>
							</div>

							<div class="news-lines" id="intermission2"></div>

							<div class="news container">
								<div class="narrative-text news-copy">
									<?php perch_content('Part 2 Narrative Content'); ?>
								</div>

								<div class="clear"></div>

								<div class="eight columns">
									<button class="more-info-button two"><h3 id="listen" ><span class="fleurdelis-left">-</span>LISTEN<span class="fleurdelis-right">-</span></h3></button>
								</div>
								<div class="eight columns">
									<button class="more-info-button two"><h3 id="look" ><span class="fleurdelis-left">-</span>LOOK<span class="fleurdelis-right">-</span></h3></button>
								</div>
							</div>

							<div class="more-info two container">
								<div class="eight columns information-text" id="listen">
									<?php perch_content('Listen-Intro'); ?>
									<?php perch_content('Listen-TrackLinks'); ?>
									<div class="article-divide"></div>
								</div>

								<div class="eight columns information-text" id="look">
									<?php perch_content('Look-Section'); ?>
									<?php perch_content('Look-Embeds'); ?>
									<div class="article-divide"></div>
								</div>
							</div>
						</div>
					</div>
					<footer></footer>
				</div>
			<div class="intermission-gradient-bottom"></div>
		</section>
		<!-- end intermission2 -->




		<!-- start part3 .csstransforms3d -->
		<div id="scene3" class="scene part3 gradient-3 csstransforms3d">
			<div class="centered alley"
			data-101-top		= "position: !relative;"
			data--100-top		= "position: !fixed; top: 0%;"
			data--14500-top		= "top:0%;"
			data--16000-top		= "top:-100%"
			data--16001-top		= "position:!relative;">

				<div class="overflow"
				data-101-top		= "opacity: 0"
				data--100-top		= "opacity: 1">

					<div class="js-image scene-layer alley-master"
					data-anchor-target	= "#scene3"
					data-500-top		= "display:!block; opacity: 0; transform: translate3d(-600px, 720px, 0px) scale(1.8);"
					data--1000-top		= "opacity: 1; transform: translate3d(-500px, 420px, 0px) scale(1.6);"
					data--2000-bottom 	= "transform: translate3d(50px, -944px, 0px) scale(1);"
					data-0-bottom 		= "transform: translate3d(50px, -944px, 0px) scale(1);"
					data-image-url		= "images/alley-master-v2.jpg">
					<img src="">

						<div class="overflow">

							<div class="js-image scene-layer alley-margarite"
							data-anchor-target 	= "#scene3"
							data-0-top	 		= "position:!absolute; filter: blur(6px);"
							data--8000-top 		= "filter: blur(3px);"
							data-0-bottom 		= "filter: blur(0px);"
							data-image-url		= "images/alley-margarite.png">
							<img src="">
							</div>

							<div class="js-image scene-layer alley-mephisto"
							data-anchor-target 	= "#scene3"
							data-0-top	 		= "position:!absolute; display:!block; opacity: 0.0; filter: blur(2px); transform: translate3d(-600px, 0, 0px);"
							data--8000-top	 	= "opacity: 0.6; filter: blur(2px); transform: translate3d(0px, 0, 0px);"
							data-0-bottom 		= "opacity: 1.0; filter: blur(0px);"
							data-image-url		= "images/alley-mephisto.jpg">
							<img src="">
							</div>

							<div class="js-image scene-layer alley-rain rain-one"
							data-anchor-target 	= "#scene3"
							data-image-url		= "images/alley-rain-long.png">
							<img src="">
							</div>

							<div class="js-image scene-layer alley-rain rain-two"
							data-anchor-target 	= "#scene3"
							data-image-url		= "images/alley-rain-long-fade.png">
							<img src="">
							</div>
						</div>
					</div>
				</div>
				<div class="test"></div>
			</div>
		</div>
		<!-- end part3 .csstransforms3d -->




		<!-- start part3 .no-csstransforms3d -->
		<div id="scene3" class="scene part3 gradient-3 no-csstransforms3d scene3no3d">
			<div class="centered alley"
			data-101-top			= "position: !relative;"
			data--100-top			= "position: !fixed; top: 0%;"
			data--14500-top			= "top:0%;"
			data--16000-top			= "top:-100%"
			data--16001-top			= "position:!relative;">

				<div class="overflow"
				data-101-top		= "opacity: 0"
				data--100-top		= "opacity: 1">

					<div class="js-image scene-layer alley-master"
					data-anchor-target	= ".scene3no3d"
					data-500-top		= "display:!block; opacity: 0; transform: translate(-600px, 720px) scale(1.8);"
					data--1000-top		= "opacity: 1; transform: translate(-500px, 420px) scale(1.6);"
					data--2000-bottom 	= "transform: translate(50px, -944px) scale(1);"
					data-0-bottom 		= "transform: translate(50px, -944px) scale(1);"
					data-image-url		= "images/alley-master-v2.jpg">
					<img src="">

						<div class="overflow">

							<div class="js-image scene-layer alley-margarite"
							data-anchor-target 	= ".scene3no3d"
							data-0-top	 		= "position:!absolute; filter: blur(6px);"
							data--8000-top 		= "filter: blur(3px);"
							data-0-bottom 		= "filter: blur(0px);"
							data-image-url		= "images/alley-margarite.png">
							<img src="">
							</div>

							<div class="js-image scene-layer alley-mephisto"
							data-anchor-target 	= ".scene3no3d"
							data-0-top	 		= "position:!absolute; display:!block; opacity: 0.0; filter: blur(2px); transform: translate(-600px, 0);"
							data--8000-top	 	= "opacity: 0.6; filter: blur(2px); transform: translate(0, 0);"
							data-0-bottom 		= "opacity: 1.0; filter: blur(0px);"
							data-image-url		= "images/alley-mephisto.jpg">
							<img src="">
							</div>

							<div class="js-image scene-layer alley-rain rain-one"
							data-anchor-target 	= ".scene3no3d"
							data-image-url		= "images/alley-rain-long.png">
							<img src="">
							</div>

							<div class="js-image scene-layer alley-rain rain-two"
							data-anchor-target 	= ".scene3no3d"
							data-image-url		= "images/alley-rain-long-fade.png">
							<img src="">
							</div>

						</div>
					</div>
				</div>
				<div class="test"></div>
			</div>
		</div>
		<!-- end part3 .no-csstransforms3d -->




		<!-- start intermission3 -->
		<section class="intermission three"
		data-16001-top 		= "position:!relative; top:0;"
		data-16000-top 		= "position:!fixed; opacity:0;"
		data-15000-top		= "top:830px;"
		data-14000-top 		= "position:!fixed; top:830px;"
		data-14100-top 		= "opacity:1"
		data-701-top		= "position:!fixed;"
		data-700-top 		= "position:!relative; top:0px">

			<div class="intermission-gradient-top"></div>
			<div class="intermission-gradient-vignette"></div>

			<div class="intermission-content">
				<header> </header>

				<div class="intermission-accessories">
					<div class="js-image stain-1"
					data-image-url = "images/newspaper-stain-1.png">
					<img src="">
					</div>
					<div class="js-image stain-2"
					data-image-url = "images/newspaper-stain-2.png">
					<img src="">
					</div>

					<div class="intermission-main">

						<div class="news-lines"></div>

						<div class="container">
							<div class="headlines">
								<div class="headline columns three left">
									<h3 class="palette-blood-red">PART III</h3>
								</div>
								<div class="headline columns thirteen right">
									<h2>THE STARS NEVER SHINE</h2>
								</div>
							</div>
						</div>

						<div class="news-lines" ></div>

						<div class="news container">
							<div class="narrative-text news-copy"  id="intermission3">
								<?php perch_content('Part 3 Narrative Content'); ?>
							</div>

							<div class="clear"></div>

							<div class="sixteen columns">
								<button class="more-info-button newsflash three"><h3 id="newsflash" ><span class="fleurdelis-left">-</span>NEWSFLASH<span class="fleurdelis-right">-</span></h3></button>
							</div>
						</div>

						<div class="more-info newsflash three container">
							<div class="sixteen columns information-text" id="newsflash">
								<?php perch_content_custom('News Articles', array(
									'template'=>'faust_article.html',
									'sort'=>'date',
									'sort-order'=>'DESC',
									'count'=>3
								)); ?>
							</div>

							<div class="news container">
								<div class="sixteen columns">
									<button class="more-info-button the-archives three"><h3 id="the-archives" ><span class="fleurdelis-left">-</span>THE ARCHIVES<span class="fleurdelis-right">-</span></h3></button>
								</div>
							</div>

							<div class="more-info three the-archives container">
								<div class="sixteen columns information-text" id="the-archives">
									<?php perch_content_custom('News Articles', array(
										'template'=>'_faust_article_archive.html',
										'sort'=>'date',
										'sort-order'=>'DESC',
									)); ?>
								</div>

								<div class="archive-content-main">
									<div class="article-archive"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<footer></footer>
			</div>
		<div class="intermission-gradient-bottom"></div>
		</section>
		<!-- end intermission3 -->




		<!-- start part4 .csstransforms3d -->
		<div id="scene4" class="scene part4 csstransforms3d"> <!-- Part 4 -->
			<div class="body-gradient-flood gradient-4 night scene-container"
			data-anchor-target  = "#scene4"
			data-1-top			= "position: !relative;"
			data-0-top			= "position: !fixed; top: 0%;"
			data--12000-top		= "top:0%;"
			data--13000-top		= "top: -200%;">

				<div class="overlay">

					<div class="spot-gradient"></div>

					<div class="scene-layer moon"
					data-anchor-target="#scene4"
					data-0-top 			= "top: 0px; transform: translate3d(0%, 120%, 0) scale(0.75); filter: blur(0px); opacity:0;"
					data-3000-top		= "top: 0%; transform: translate3d(0%, 100%, 0) scale(0.75); filter: blur(0px); opacity:1"
					data--8000-top		= "display:!block; opacity: 1.0; transform: translate3d(0%, -20%, 0) scale(0.5); filter: blur(5px);"
					data--10000-top		= "opacity:0">
					</div>

					<div class="scene-layer red-moon"
					data-anchor-target="#scene4"
					data-0-top 			= "top: 0px; transform: translate3d(0%, 120%, 0) scale(0.75); filter: blur(0px); opacity:0;"
					data-3000-top		= "top: 0%; transform: translate3d(0%, 100%, 0) scale(0.75); filter: blur(0px); opacity:1"
					data--8000-top		= "display:!block; opacity: 0; transform: translate3d(0%, -20%, 0) scale(0.5); filter: blur(5px);"
					data--10000-top		= "opacity:1;"
					data--13000-top		= "transform: translate3d(0%, 100%, 0) scale(0.1);">
					</div>

					<div class="scene-layer city-bg"
					data-anchor-target 	= "#scene4"
					data-0-top			= "display:!block; top: 0%;"
					data--2000-top		= "opacity: 0.0; transform: translate3d(1%, 50%, 0) scale(2.5); filter: blur(5px);"
					data--8000-top		= "opacity: 1.0; transform: translate3d(0%, 30%, 0) scale(1.2); filter: blur(0px);">
					</div>

					<div class="scene-layer city-bg-mask"
					data-anchor-target 	= "#scene4"
					data-0-top			= "display:!block; top: 0%;"
					data--8000-top		= "opacity: 0; transform: translate3d(0%, 30%, 0) scale(1.2);"
					data--10000-top		= "opacity:1;">
					</div>

					<div class="scene-layer clouds cloudcruise-one"
					data-anchor-target 	= "#scene4"
					data-0-top			= "display:!block; opacity:0; transform: scale(2); top: 0%;"
					data--500-top	= "opacity:0.4;">
					</div>

					<div class="scene-layer clouds cloudcruise-two"
					data-anchor-target	= "#scene4"
					data-0-top			= "display:!block; opacity:0; transform: scale(1); top: 0%;"
					data--500-top		= "opacity:0.4;">
					</div>

					<div class="scene-layer clouds cloudcruise-three"
					data-anchor-target	= "#scene4"
					data-0-top			= "display:!block; opacity:0; transform: scale(0.5); top: 0%;"
					data--500-top		= "opacity:0.4;">
					</div>

					<div class="scene-layer couple"
					data-anchor-target	= "#scene4"
					data-0-top			= "display:!block; top:0%; opacity: 0.0; transform: scale(1.5) translate3d(1%, 15%, 0); filter: blur(2px);"
					data--1000-top		= "opacity: 1.0;"
					data--6000-top		= "transform: scale(0.65) translate3d(1%, -20%, 0); filter: blur(1px);"
					data--8000-top		= "transform: scale(0.40) translate3d(1%, -60%, 0); filter: blur(0px);">
					</div>

					<div class="scene-layer couple-mask"
					data-anchor-target	= "#scene4"
					data-0-top			= "display:!block; top:0%; transform: scale(1.5) translate3d(1%, 20%, 0);"
					data--8000-top		= "opacity: 0; transform: scale(0.40) translate3d(1%, -60%, 0);"
					data--10000-top		= "opacity: 1;">
					</div>
				</div>
				<div class="test"></div>
			</div>
		</div>
		<!-- end part4 .csstransforms3d -->




		<!-- start part4 .no-csstransforms3d -->
		<div id="scene4" class="scene part4 no-csstransforms3d scene4no3d"> <!-- Part 4 -->
			<div class="body-gradient-flood gradient-4 night scene-container"
			data-anchor-target  = ".scene4no3d"
			data-1-top			= "position: !relative;"
			data-0-top			= "position: !fixed; top: 0%;"
			data--12000-top		= "top:0%;"
			data--13000-top		= "top: -200%;">

				<div class="overlay">

					<div class="spot-gradient"></div>

					<div class="scene-layer moon"
					data-anchor-target=".scene4no3d"
					data-0-top 			= "top: 0px; transform: translate(0%, 120%) scale(0.75); filter: blur(0px); opacity:0;"
					data-3000-top		= "top: 0%; transform: translate(0%, 100%) scale(0.75); filter: blur(0px); opacity:1"
					data--8000-top		= "display:!block; opacity: 1.0; transform: translate(0%, -20%) scale(0.5); filter: blur(5px);"
					data--10000-top		= "opacity:0">
					</div>

					<div class="scene-layer red-moon"
					data-anchor-target=".scene4no3d"
					data-0-top 			= "top: 0px; transform: translate(0%, 120%) scale(0.75); filter: blur(0px); opacity:0;"
					data-3000-top		= "top: 0%; transform: translate(0%, 100%) scale(0.75); filter: blur(0px); opacity:1"
					data--8000-top		= "display:!block; opacity: 0; transform: translate(0%, -20%) scale(0.5); filter: blur(5px);"
					data--10000-top		= "opacity:1;"
					data--13000-top		= "transform: translate(0%, 100%) scale(0.1);">
					</div>

					<div class="scene-layer city-bg"
					data-anchor-target 	= ".scene4no3d"
					data-0-top			= "display:!block; top: 0%;"
					data--2000-top		= "opacity: 0.0; transform: translate(1%, 50%) scale(2.5); filter: blur(5px);"
					data--8000-top		= "opacity: 1.0; transform: translate(0%, 30%) scale(1.2); filter: blur(0px);">
					</div>

					<div class="scene-layer city-bg-mask"
					data-anchor-target 	= ".scene4no3d"
					data-0-top			= "display:!block; top: 0%;"
					data--8000-top		= "opacity: 0; transform: translate(0%, 30%) scale(1.2);"
					data--10000-top		= "opacity:1;">
					</div>

					<div class="scene-layer clouds cloudcruise-one"
					data-anchor-target 	= ".scene4no3d"
					data-0-top			= "display:!block; opacity:0; transform: scale(2); top: 0%;"
					data--500-top	= "opacity:0.4;">
					</div>

					<div class="scene-layer clouds cloudcruise-two"
					data-anchor-target	= ".scene4no3d"
					data-0-top			= "display:!block; opacity:0; transform: scale(1); top: 0%;"
					data--500-top		= "opacity:0.4;">
					</div>

					<div class="scene-layer clouds cloudcruise-three"
					data-anchor-target	= ".scene4no3d"
					data-0-top			= "display:!block; opacity:0; transform: scale(0.5); top: 0%;"
					data--500-top		= "opacity:0.4;">
					</div>

					<div class="scene-layer couple"
					data-anchor-target	= ".scene4no3d"
					data-0-top			= "display:!block; top:0%; opacity: 0.0; transform: scale(1.5) translate(1%, 15%); filter: blur(2px);"
					data--1000-top		= "opacity: 1.0;"
					data--6000-top		= "transform: scale(0.65) translate(1%, -20%); filter: blur(1px);"
					data--8000-top		= "transform: scale(0.40) translate(1%, -60%); filter: blur(0px);">
					</div>

					<div class="scene-layer couple-mask"
					data-anchor-target	= ".scene4no3d"
					data-0-top			= "display:!block; top:0%; transform: scale(1.5) translate(1%, 20%);"
					data--8000-top		= "opacity: 0; transform: scale(0.40) translate(1%, -60%);"
					data--10000-top		= "opacity: 1;">
					</div>

				</div>
				<div class="test"></div>
			</div>
		</div>
		<!-- end part4 .no-csstransforms3d -->




		<!-- start intermission4 -->
		<section class="intermission four" id="intermission4">
			<header> </header>

			<div class="intermission-main">
				<div class="container">
					<div class="headlines">
						<div class="headline left">
							<h3 class="palette-blood-red">PART IV</h3>
						</div>
						<div class="headline right">
							<h2 class="palette-deep-purple">SIGN IN</h2>
							</br>
							<h2 class="palette-blood-red">BLOOD<span class="moon-fullstop" data-anchor-target = "#intermission4" data-230-top = "opacity: 0.9; transform: translate(0,-120px) scale(0);" data-130-top = "opacity: 0.9; transform: translate(0,10px) scale(0.76);" data-100-top = "opacity: 0.9; transform: translate(0,0) scale(0.75);" >.</span></h2>
						</div>
					</div>

					<div class="contact">
						<div class="eight columns contact-details">
							<h4>Contact Us</h4>

							<p>We’d be delighted to answer your enquiries at:</br><a href="mailto:info@faust-musical.com"> info@faust-musical.com </a></p>

							<p>Or check us out here:</p>

							<ul class="social">
								<a href="https://www.facebook.com/pages/FAUST-A-Musical/1405003313058613" target="_blank"><li class="facebook">facebook</li></a>
								<a href="https://twitter.com/FAUST_Musical" target="_blank"><li class="twitter">twitter</li></a>
								<a href="http://www.instagram.com/faust_musical/" target="_blank"><li class="instagram">instagram</li></a>
								<a href="http://pinterest.com/FAUSTmusical/" target="_blank"><li class="pinterest">pinterest</li></a>
								<a href="http://soundcloud.com/faust_musical" target="_blank"><li class="soundcloud">soundcloud</li></a>
								<a href="https://vimeo.com/faustmusical/" target="_blank"><li class="vimeo">vimeo</li></a>
							</ul>

							<h4> Sign up for our Newsletter</h4>

							<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
							<div id="mc_embed_signup">
								<form action="http://alphacrucisarts.us7.list-manage.com/subscribe/post?u=d943f5972398e07dfef801218&amp;id=a5647fcb08" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									<div class="indicates-required"></div>
									<div class="mc-field-group">
										<label for="mce-EMAIL">Email Address</label>
										<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
									</div>
									<div id="mce-responses" class="clear">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div>
									<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
								</form>
							</div>
						</div>

						<div class="eight columns">
							<?php perch_content('Part 4 Info For Artists'); ?>
							<div class="clear"></div>
							<?php perch_content('Part 4 Info For Sponsors'); ?>
						</div>

						<ul class="sixteen columns logo-soup credits">
							<li class="columns eight credit alphacrucis">
								<p><span>FAUST is an </span><span class="alphacrucis logo">Alphacrucis</span><span> production, </span></p>
							</li>
							<li class="columns eight credit invisible-artists">
								<p><span>Website designed by</span><span class="invisible-artists logo">Invisible Artists</span></p>
							</li>
							<li class="columns eight credit gina-kiel">
								<p><span>with illustrations supplied by Gina Kiel </span><span class="gina-kiel logo">Gina Kiel</span></p>
							</li>
							<li class="columns eight credit drawing-book">
								<p><span>represented by Drawing Book</span> <span class="drawing-book logo">Drawing Book</span></p>
							</li>
						</ul>

					</div>
				</div>
			</div>
			<footer></footer>
		</section>
		<!-- end intermission4 -->

	</div>
	<div class="clear"></div>

	<!--[if lt IE 9]>
	<script type="text/javascript" src="skrollr.ie.min.js"></script>
	<![endif]-->

	<!-- Set browser update warning -->
	<script type="text/javascript">

		if (Modernizr.csstransforms3d) {
			$( "div" ).remove( ".no-csstransforms3d" );
		}else{
			$( "div" ).remove( ".csstransforms3d" );
		}

		if (!Modernizr.csstransforms) {
			$(".version-suggestion").css("display", "block");
		}

	</script>

<!-- End Document
================================================== -->
</body>
</html>