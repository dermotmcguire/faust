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

	<!-- Mobile Specific Metas
 	================================================== -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->

	<!-- CSS
  	================================================== -->
  	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700|Old+Standard+TT:400,400italic,700|PT+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' media='screen and (min-width: 767px)' href="/min/b=stylesheets&amp;f=base.css,skeleton.css,fixed-positioning.css,animations.css,layout.css"/>
	<link rel='stylesheet' media='screen and (max-width: 766px)' href="/min/b=stylesheets&amp;f=base.css,skeleton.css,fixed-positioning.css,animations.css,mobile.css"/>

	<!-- JS
	================================================== -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
  	<script type="text/javascript" src="/min/b=js&amp;f=smartpreload.js,modernizr.custom.js,jquery.inview.js,howler.min.js,sounds.js,smooth-scroll.js,jquery.columnizer.js,main.js"></script>

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

	<div class="left-border"></div>
	<div class="right-border"></div>

	<div id="nav-menu">
		<ul>
			<li class='has-sub'><a href='#intermission1'><span>Part I</span></a>
				<ul>
					<li class='has-sub'><a href="#intermission1"><span>Before the Fall</span></a>
						<ul class="part1-submenu">
		       				<li><a href="#the-project"><span>The Project</span></a></li>
		       				<li class='last'><a href="#the-production"><span>The Production</span></a></li>
		     			</ul>
		   			</li>
		 		</ul>
			</li>
			<li class='has-sub'><a href='#intermission2'><span>Part II</span></a>
		 		<ul>
		   			<li class='has-sub'><a href="#intermission2"><span>The Wages of Sin</span></a>
	   					<ul class="part2-submenu">
		      				<li><a href="#listen"><span>Listen</span></a></li>
		       				<li class='last'><a href="#look"><span>Look</span></a></li>
		     			</ul>
	   				</li>
		 		</ul>
			</li>
			<li class='has-sub'><a href='#intermission3'><span>Part III</span></a>
		 		<ul>
		   			<li class='has-sub'><a href="#intermission3"><span>The Stars Never Shine</span></a>
		     			<ul class="part3-submenu">
		       				<li><a href="#newsflash"><span>Newsflash</span></a></li>
		       				<li class='last'><a href="#newsflash"><span>The Archives</span></a></li>
		     			</ul>
		   			</li>
		 		</ul>
			</li>
			<li class='has-sub'><a href='#intermission4'><span>Part IV</span></a>
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

	<!-- All Scenes Start -->
	<div class="all-scenes gradient-1" id="desktop-scenes">

		<!-- Part 1 Start -->
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

			<!-- Begin Intro -->
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
								<div class="progress">
								</div>
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
						<a href="#scene-one"><span class="ready-arrow pulse"> </span></a>
					</div>
					<!-- end title -->
				</div>
			</div> <!-- End Intro -->

			<div class="city-pre">
				<div class="js-image scene-layer one-c" data-image-url="images/spotlight-left.png">
					<img src="">
				</div>
				<div class="intro-spotlights fadeIn">
					<!-- <div class="js-image spotlight-left-outer"> -->
						<img class="spotlight-left-outer"		src="images/spotlight-left.png"  />
					<!-- </div> -->
					<!-- <div class="js-image spotlight-right-inner"> -->
						<img class="spotlight-right-inner"		src="images/spotlight-right.png"  />
					<!-- </div> -->
					<!-- <div class="js-image spotlight-left-inner"> -->
						<img class="spotlight-left-inner"		src="images/spotlight-left.png" />
					<!-- </div> -->
					<!-- <div class="js-image spotlight-right-outer"> -->
						<img class="spotlight-right-outer"		src="images/spotlight-right.png" />
					<!-- </div> -->
				</div>
			</div>

			<div class="scene part1" id="scene1"> <!-- Part 1 -->
				<div class="city centered"
					data-anchor-target  = "#scene1"
					data-0-top			= "display:!block;">

					<div class=" js-image scene1-layer city-left-back"
						data-anchor-target	= "#scene1"
						data-800-top		= "opacity: 0; transform: translateY(2%);"
						data-450-top		= "opacity: 0.7;"
						data-0-bottom 		= "transform:translateY(0);"
						data-image-url		= "images/city-left-back.png">
						<img src="">
					</div>

					<div class="js-image scene1-layer city-centre-back"
						data-anchor-target  = "#scene1"
						data-800-top		= "opacity: 0; transform: scale(1.1) translateY(4%);"
						data-450-top		= "opacity: 1;"
						data-0-bottom		= "transform: scale(1.0) translateY(0%);"
						data-image-url		= "images/city-centre-back.png">
						<img src="">
						<div class="intro-face" >
							<div class="intro-face-complete faceglow"></div>
							<div class="intro-face-glow"></div>
							<img class="intro-face-lefteye eyeglow" src="images/face-lefteye.png" />
							<img class="intro-face-righteye eyeglow" src="images/face-righteye.png" />
						</div>
					</div>

					<div class="js-image scene1-layer city-right-mid"
						data-anchor-target 	= "#scene1"
						data-800-top		= "opacity: 0; transform: translateY(6%);"
						data-450-top		= "opacity: 1; transform: translateY(5%);"
						data-0-bottom		= "transform: translateY(0);"
						data-image-url		= "images/city-right-mid.png">
						<img src="">
						<span class="hotspot apartment on flicker"></span>
					</div>

					<div class="js-image scene1-layer city-left-mid"
						data-anchor-target	= "#scene1"
						data-800-top		= "opacity: 0.0; transform: translateY(0%) translateX(0%);"
						data-150-top		= "opacity: 1.0;"
						data-0-bottom		= "transform: translateY(0%) translateX(14%);"
						data-image-url		= "images/city-left-mid.png">
						<img src="">
					</div>

					<div class="js-image scene1-layer city-right-fore"
						data-anchor-target	= "#scene1"
						data-800-top		= "opacity: 0.0; transform: translateY(7%) translateX(5%);"
						data-150-top		= "opacity: 1.0;"
						data-0-bottom		= "transform: translateY(0%) translateX(0%);"
						data-image-url		= "images/city-right-fore.png">
						<img src="">
						<span class="hotspot sixsixsix on flicker"></span>
					</div>

					<div class="js-image scene1-layer city-left-fore"
						data-anchor-target	= "#scene1"
						data-800-top		= "opacity: 0.0; transform: translateY(0%) translateX(-3%);"
						data-150-top		= "opacity: 1.0;"
						data-0-bottom		= "transform: translateY(0%) translateX(0%);"
						data-image-url		= "images/city-left-fore.png">
						<img src="">
						<span class="hotspot hotel on flicker"></span>
						<span class="hotspot radio on flicker"></span>
					</div>
				</div>
			</div>
		</div>
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
					<!--
					<div class="js-image scrawledtext-1"
					data-image-url = "images/newspaper-scrawledtext-1.png">
					<img src="">
					</div>
					<div class="js-image scrawledtext-2"
					data-image-url = "images/newspaper-scrawledtext-1.png">
					<img src="">
					</div>
					-->

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
				</div><!-- End Intermission-Accessories -->
				<footer></footer>
			</div><!-- End Intermission-Content -->

			<div class="intermission-gradient-bottom"></div>

		</section>

		<div id="scene2" class="scene part2 gradient-2"> <!-- Part 2 -->
			<div class="room centered scene-container"
			data-anchor-target  = "#scene2"
			data--1-top			= "position:!fixed;"
			data-0-top			= "position:!relative;"
			data-0-bottom	= "top:0;"
			data--500-bottom	= "top:-200%;">

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
				data-0-bottom	= "opacity: 1.0; transform: translate3d(-40px, 0, 0) scale(0.8);">

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
				data-0-bottom	= "filter: blur(1px); transform: translate3d(-12%, -32%, 0) scale(0.55);"
				data-image-url		= "images/room-master.png">
				<span class="couch-salome-sprite"></span>
				<img src="">

					<div class="js-image scene-layer room-master-mask"
					data-anchor-target  = "#scene2"
					data-500-top		= "display:!block; opacity:1; width:50%;"
					data--7500-top		= "opacity:0; width:90%;"
					data-image-url		= "images/room-master-mask.png">
					<img src="">
					</div>

				</div>

				<div class="js-image scene-layer mephisto-master"
				data-anchor-target 	= "#scene2"
				data-0-top			= "display:!block; opacity: 1.0; transform: translate3d(15%, -30%, 0) scale(0.8);"
				data-0-bottom	= "transform: translate3d(-20%, -30%, 0) scale(0.6);"
				data-image-url		= "images/room-mephisto-master-v2.png">
				<img src="">
				</div>

				<div class="js-image scene-layer faust-master"
				data-anchor-target 	= "#scene2"
				data-0-top			= "display:!block; opacity: 1.0; transform: translate3d(-10%, -30%, 0) scale(1.55);"
				data-0-bottom	= "transform: translate3d(15%, -34%, 0) scale(0.6);"
				data-image-url		= "images/room-faust-master-v2.png">
				<img src="">
				</div>

			</div>
		</div>

		<section class="intermission two" id="intermission2" 				>

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
					<!--
					<div class="js-image scrawledtext-1"
					data-image-url = "images/newspaper-scrawledtext-1.png">
					<img src="">
					</div>
					<div class="js-image scrawledtext-2"
					data-image-url = "images/newspaper-scrawledtext-1.png">
					<img src="">
					</div>
					-->

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
						<div class="news-lines"></div>
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
				</div><!-- End Intermission-Accessories -->
				<footer></footer>
			</div><!-- End Intermission-Content -->

			<div class="intermission-gradient-bottom"></div>

		</section>

		<div id="scene3" class="scene part3 gradient-3"> <!-- Part 3 -->
			<div class="centered alley"
			data-1-top			= "position: !relative;"
			data-0-top			= "position: !fixed; top: 0%;"
			data-0-bottom		= "top:0;"
			data--1000-bottom	= "top:!-200%; position: !relative;">

				<div class="js-image scene-layer alley-master"
				data-anchor-target	= "#scene3"
				data-500-top		= "display:!block; opacity: 0; transform: translate3d(-600px, 720px, 0px) scale(1.8);"
				data--1000-top		= "opacity: 1; transform: translate3d(-500px, 420px, 0px) scale(1.6);"
				data--2000-bottom 	= "transform: translate3d(50px, -944px, 0px) scale(1);"
				data-0-bottom 		= "transform: translate3d(50px, -944px, 0px) scale(1);"
				data-image-url		= "images/alley-master-v2.jpg">
				<img src="">

					<div class="js-image scene-layer alley-margarite"
					data-anchor-target 	= "#scene3"
					data-0-top	 		= "position:!absolute; filter: blur(6px);"
					data--8000-top 		= "filter: blur(3px);"
					data-0-bottom 		= "filter: blur(0px);"
					data-image-url		= "images/alley-margarite.png">
					<img src=""></div>

					<div class="js-image scene-layer alley-mephisto"
					data-anchor-target 	= "#scene3"
					data-0-top	 		= "position:!absolute; display:!block; opacity: 0.0; filter: blur(2px); transform: translate3d(-600px, 0, 0px);"
					data--8000-top	 	= "opacity: 0.6; filter: blur(2px); transform: translate3d(0px, 0, 0px);"
					data-0-bottom 		= "opacity: 1.0; filter: blur(0px);"
					data-image-url		= "images/alley-mephisto.jpg">
					<img src=""></div>

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

				<!--<div class="js-image scene-layer alley-rain rain-three"
					data-anchor-target 	= "#scene3"
					data-top			= "display: none;"
					data--8000-top		= "display: block;"
					data-image-url		= "images/rain-2.gif">
					<img src="">
				</div>-->

			</div>
		</div>

		<section class="intermission three" id="intermission3">

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
						<div class="news-lines"></div>
						<div class="news container">
							<div class="narrative-text news-copy">
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
				</div><!-- End Intermission-Accessories -->
				<footer></footer>
			</div><!-- End Intermission-Content -->

			<div class="intermission-gradient-bottom"></div>

		</section>
		<div id="scene4" class="scene part4 "> <!-- Part 4 -->
				<div class="body-gradient-flood gradient-4 night scene-container"
				data-anchor-target  = "#scene4"
				data-1-top			= "position: !relative;"
				data-0-top			= "position: !fixed; top: 0%;"
				data--100-bottom		= "top:0%;"
				data--1600-bottom		= "top: -100%; position:!relative">

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
		</div>

		<!-- Intermission 4 -->
		<section class="intermission four" id="intermission4">
			<header> </header>
			<!-- SECTION HEADLINES -->
			<div class="intermission-main">
				<div class="container">
					<div class="headlines">
						<div class="headline left">
							<h3 class="palette-blood-red">PART IV</h3>
						</div>
						<div class="headline right">
							<h2 class="palette-deep-purple">SIGN IN</h2>
							</br>
							<h2 class="palette-blood-red">BLOOD<span class="moon-fullstop" data-anchor-target = "#intermission4" data-230-top = "opacity: 0.9; transform: translate3d(0,-120px,0) scale(0);" data-130-top = "opacity: 0.9; transform: translate3d(0,10px,0) scale(0.76);" data-100-top = "opacity: 0.9; transform: translate3d(0,0,0) scale(0.75);" >.</span></h2>
						</div>
					</div>
					<!-- SECTION MAIN CONTENT -->
					<div class="contact">
						<!-- CONTACT DETAILS -->
						<div class="eight columns contact-details">
							<!-- CONTACT OPTION 1 -->
							<h4>Contact Us</h4>
							<p>
								We’d be delighted to answer your enquiries at:
								</br>
								<a href="mailto:info@faust-musical.com"> info@faust-musical.com </a>
							</p>
							<!-- SOCIAL SECTION -->
							<p>
								Or check us out here:
							</p>
							<ul class="social">
								<a href="https://www.facebook.com/pages/FAUST-A-Musical/1405003313058613" target="_blank">
									<li class="facebook">
										facebook
									</li>
								</a>
								<a href="https://twitter.com/FAUST_Musical" target="_blank">
									<li class="twitter">
										twitter
									</li>
								</a>
								<a href="http://www.instagram.com/faust_musical/" target="_blank">
									<li class="instagram">
										instagram
									</li>
								</a>
								<a href="http://pinterest.com/FAUSTmusical/" target="_blank">
									<li class="pinterest">
										pinterest
									</li>
								</a>
								<a href="http://soundcloud.com/faust_musical" target="_blank">
									<li class="soundcloud">
										soundcloud
									</li>
								</a>
								<a href="https://vimeo.com/faustmusical/" target="_blank">
									<li class="vimeo">
										vimeo
									</li>
								</a>
							</ul>
							<!-- CONTACT FORM -->
							<h4> Sign up for our Newsletter</h4>
							<!-- Begin MailChimp Signup Form -->
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
									</div>	<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
								</form>
							</div>
								<!--End mc_embed_signup-->
						</div>

		  				<div class="eight columns">
							<?php perch_content('Part 4 Info For Artists'); ?>
		  				<div class="clear"></div>
							<?php perch_content('Part 4 Info For Sponsors'); ?>
		 				</div>


						<!-- CREDITS SECTION -->
						<ul class="sixteen columns logo-soup credits">
							<li class="columns eight credit alphacrucis">
								<p>
									<span>FAUST is an </span><span class="alphacrucis logo">Alphacrucis</span><span> production, </span>
								</p>
							</li>
							<li class="columns eight credit invisible-artists">
								<p>
									<span>Website designed by</span><span class="invisible-artists logo">Invisible Artists</span>
								</p>
							</li>
							<li class="columns eight credit gina-kiel">
								<p>
									<span>with illustrations supplied by Gina Kiel </span><span class="gina-kiel logo">Gina Kiel</span>
								</p>
							</li>
							<li class="columns eight credit drawing-book">
								<p>
									<span>represented by Drawing Book</span> <span class="drawing-book logo">Drawing Book</span>
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<footer></footer>
		</section>

</div>

<div class="clear"></div>


	<!-- Skrollr Lives Here! -->
	<script src="js/skrollr.min.js" type="text/javascript"></script>
	<script src="js/skrollr.menu.min.js" type="text/javascript"></script>
	<script src="js/skrollr.ie.min.js" type="text/javascript"></script>

	<!-- Set browser update warning -->
	<script type="text/javascript">
	var $buoop = {vs:{i:8,f:20,o:10.6,s:4,n:9}}
		$buoop.ol = window.onload;
		window.onload=function(){
		 try {if ($buoop.ol) $buoop.ol();}catch (e) {}
		 var e = document.createElement("script");
		 e.setAttribute("type", "text/javascript");
		 e.setAttribute("src", "http://browser-update.org/update.js");
		 document.body.appendChild(e);
	}
	</script>


<!-- End Document
================================================== -->
</body>
</html>