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
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1;">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta http-equiv="cleartype" content="on">


	<!-- CSS
  	================================================== -->
  	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700|Old+Standard+TT:400,400italic,700|PT+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
	<!-- <link rel='stylesheet' href="/min/b=stylesheets&amp;f=base.css,skeleton.css,fixed-positioning.css,animations.css,flexslider.css,mobile.css"/> -->
	<link rel='stylesheet' type="text/css" href="stylesheets/base.css">
	<link rel='stylesheet' type="text/css" href="stylesheets/skeleton.css">
	<link rel='stylesheet' type="text/css" href="stylesheets/fixed-positioning.css">
	<link rel='stylesheet' type="text/css" href="stylesheets/animations.css">
	<link rel='stylesheet' type="text/css" href="stylesheets/mobile.css">
	<link rel='stylesheet' type="text/css" href="stylesheets/flexslider.css">
	<!-- JS
	================================================== -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
	<!-- J<script type="text/javascript" src="/min/b=js&amp;f=audioplayer.min.js,fastclick.js,jquery.columnizer.js,jquery.flexslider.js,skrollr.min.js,skrollr.menu.min.js,main-mobile.js"></script> -->
	<script type="text/javascript" src="js/audioplayer.min.js"></script>
	<script type="text/javascript" src="js/fastclick.js"></script>
	<script type="text/javascript" src="js/jquery.columnizer.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/skrollr.min.js"></script>
	<script type="text/javascript" src="js/skrollr.menu.min.js"></script>
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

	<div class="wrap" id="wrap">

		<div class="menu-container slideDown">
			<a href="#menu" class="menu-link">&nbsp;</a>
		</div>

		<aside class="open-close" id="menu" role="navigation">
			<div id="nav-menu" class="mobile-menu">
				<ul class="container" id="scrollable">
					<li class="eight columns section-link">
						<a class="scene-link" href='#scene1'>
							<span>Part I: Before the Fall</span>
						</a>
					</li>
					<li class="eight columns section-link">
						<a class="scene-link" href='#scene2'>
							<span>Part II: The Wages of Sin</span>
						</a>
					</li>
					<li class="eight columns section-link">
						<a class="scene-link" href='#scene3'>
							<span>Part III: The Stars Never Shine</span>
						</a>
					</li>
					<li class="eight columns section-link">
						<a class="scene-link" href='#scene4'>
							<span>Part IV: Sign in Blood</span>
						</a>
					</li>
				</ul>
			</div>
		</aside>
		<!-- Start mobile content -->
		<div class="mobile-container" id="skrollr-body">
			<!-- Scene 0 -->
			<section class="body-gradient-flood mobile-section scene" id="scene0">
				<!-- Begin Intro -->
				<div class="scene intro container js-intro-splash">
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
				</div> <!-- End Intro -->
			</section>

			<!-- Scene 1 -->
			<section class="mobile-section scene part1" id="scene1">
				<div class="faust-container"
					data-0-top	= "opacity:1;"
					data-0-bottom	= "opacity:1;">
					<div class="js-image faust-falling"
						data-2p-top 		= "opacity:0.0; top:0%"
						data--5p-top		= "opacity:1.0; top: 15%;"
						data--100p-top		= "opacity: 1.0; top: 50%;"
						data--200p-top		= "opacity: 1.0; top: 100%"
						data-image-url	 	= "images/sprite-faust-falling-mobile.png">
					</div>
				</div>
				<div class="city">
				    <img src="images/city-composite-mobile.jpg"  data-interchange="[images/city-composite-tablet.jpg, (small)]" class="city-composite" alt="scene1 cityscape" />
				</div>
			</section>

			<!-- Intermission 1 -->
			<section class="mobile-section intermission flexslider" id="intermission1">
				<div class="intermission-gradient-top"></div>
				<div class="intermission-gradient-vignette"></div>
				<ul class="slides container">
					<li class="main-slide">
						<div class="news-lines"></div>
							<h1>Part I</h1>
							<h2>Before the fall</h2>
						<div class="news-lines"></div>
						<div class="two-cols main-article-content">
							<div class="article-column">
								<?php perch_content('Part 1 Narrative Content'); ?>
							</div>
						</div>
					</li>
					<li>
						<div class="news-lines"></div>
							<h2>The Project</h2>
						<div class="news-lines"></div>
						<div class="two-cols main-article-content">
							<div class="article-column">
								<?php perch_content('The Project'); ?>
							</div>
						</div>
					</li>
					<li>
						<div class="news-lines"></div>
							<h2>The Production</h2>
						<div class="news-lines"></div>
						<div class="two-cols main-article-content">
							<div class="article-column">
								<?php perch_content('The Production'); ?>
							</div>
						</div>
					</li>
				</ul>
				<div class="intermission-gradient-bottom"></div>
			</section>

			<!-- Scene 2 -->
			<section class="mobile-section scene part2" id="scene2">
				<div class="room"
				data-bottom-top = " transform: scale(2);"
				data-top = "transform: scale(1);">
				    <img src="images/room-composite-mobile-v2.jpg" data-interchange="[images/room-composite-tablet-v2.jpg, (small)]" class="room-composite" alt="scene2 room" />
			    </div>
			</section>

			<!-- Intermission 2 -->
			<section class="mobile-section intermission flexslider" id="intermission2">
				<div class="intermission-gradient-top"></div>
				<div class="intermission-gradient-vignette"></div>
				<ul class="slides container">
					<li class="main-slide">
						<div class="news-lines"></div>
							<h1>Part II</h1>
							<h2>The Wages of Sin</h2>
						<div class="news-lines"></div>
						<div class="two-cols main-article-content">
							<div class="article-column">
								<?php perch_content('Part 2 Narrative Content'); ?>
							</div>
						</div>
					</li>
					<li>
						<div class="news-lines"></div>
							<h2>Listen</h2>
						<div class="news-lines"></div>
						<div class="main-article-content">
							<?php perch_content('Listen-Intro'); ?>
							<?php perch_content('Listen-TrackLinks'); ?>
							<script>$( function() { $( 'audio' ).audioPlayer(); } );</script>
						</div>
					</li>
					<li>
						<div class="news-lines"></div>
							<h2>Look</h2>
						<div class="news-lines"></div>
						<div class="main-article-content">
							<?php perch_content('Look-Section'); ?>
							<?php perch_content('Look-Embeds'); ?>
						</div>
					</li>
				</ul>
				<div class="intermission-gradient-bottom"></div>
			</section>

			<!-- Scene 3 -->
			<section class="mobile-section scene part3" id="scene3">
				<div class="alley"
					data-bottom-top	= "transform: scale(2);"
					data-top = "transform: scale(1); ">
				    <img src="images/alley-composite-mobile.jpg" data-interchange="[images/alley-composite-tablet.jpg, (small)]" class="alley-composite" alt="scene3 alley" />
				</div>
			</section>

			<!-- Intermission 3 -->
			<section class="mobile-section intermission flexslider" id="intermission3">
				<div class="intermission-gradient-top"></div>
				<div class="intermission-gradient-vignette"></div>
				<ul class="slides container">
					<li class="main-slide">
						<div class="news-lines"></div>
							<h1>Part III</h1>
							<h2>The Stars Never Shine</h2>
						<div class="news-lines"></div>
						<div class="two-cols main-article-content">
							<div class="article-column">
								<?php perch_content('Part 3 Narrative Content'); ?>
							</div>
						</div>
					</li>
					<li>
						<div class="news-lines"></div>
							<h2>Newsflash</h2>
						<div class="news-lines"></div>
						<div class="main-article-content">
							<?php perch_content_custom('News Articles', array(
								'template'=>'faust_article_mobile.html',
								'sort'=>'date',
								'sort-order'=>'DESC',
								'count'=>2
							)); ?>
						</div>
					</li>
					<li>
						<div class="news-lines"></div>
						<h2>The Archives</h2>
						<div class="news-lines"></div>
						<div class="main-article-content sixteen columns">
							<?php perch_content_custom('News Articles', array(
								'template'=>'_faust_article_archive_mobile.html',
								'sort'=>'date',
								'sort-order'=>'DESC',
								'count'=>2
							)); ?>
						</div>
					</li>
				</ul>
				<div class="intermission-gradient-bottom"></div>
			</section>

			<!-- Scene 4 -->
			<section class="mobile-section scene part4" id="scene4">
				<div class="moon"
					data-bottom-top 	= "transform: scale(2); top:0px;"
					data-top 		= "transform: scale(1); top: 0px;">
				    <img src="images/moon-composite-mobile.jpg" data-interchange="[images/moon-composite-tablet.jpg, (small)]" class="moon-composite" alt="scene4 moon" />
				</div>
			</section>

			<!-- Intermission 4 -->
			<section class="mobile-section intermission flexslider" id="intermission4">
				<ul class="slides container">
					<li class="main-slide">
						<h1>Part IV</h1>
						<h2><span class="palette-deep-purple">SIGN IN</span> <span class="palette-blood-red">BLOOD</span></h2>
						<div class="eight columns contact">
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
						</div>
						<div class="eight columns contact">
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
						</div>
						<!-- INFO SECTION -->
						<div class ="sixteen columns information">
							<div class="eight columns contact">
								<?php perch_content('Part 4 Info For Artists'); ?>
							</div>
							<div class="eight columns contact">
								<?php perch_content('Part 4 Info For Sponsors'); ?>
							</div>
						</div>

						<!-- CREDITS SECTION -->
						<div class="sixteen columns contact">
							<h4>Credits</h4>
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
							<ul class="sixteen columns logo-soup-small credits">
								<li class="credit alphacrucis">
									<span class="alphacrucis logo">Alphacrucis</span>
								</li>
								<li class="credit invisible-artists">
									<span class="invisible-artists logo">Invisible Artists</span>
								</li>
								<li class="credit gina-kiel">
									<span class="gina-kiel logo">Gina Kiel</span>
								</li>
								<li class="credit drawing-book">
									<span class="drawing-book logo">Drawing Book</span>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</section>
		</div>
	<!-- End mobile content -->
	</div>

<div class="clear"></div>
  <script>
      document.write('<script src=/js/vendor/'
        + ('__proto__' in {} ? 'zepto' : 'jquery')
        + '.js><\/script>');
    </script>

  <script src="js/foundation.js"></script>
  <script src="js/foundation.interchange.js"></script>
  <!-- Other JS plugins can be included here -->

  <script>
    $(document).foundation();
  </script>

<!-- End Document
================================================== -->
</body>
</html>