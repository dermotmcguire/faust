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
	<link type="text/css" rel="stylesheet" href="/min/b=stylesheets&amp;f=base.css,skeleton.css,fixed-positioning.css,animations.css,layout.css" />

	<!-- JS
	================================================== -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
  	<script type="text/javascript" src="/min/b=js&amp;f=smartpreload.js,modernizr.custom.js,jquery.inview.js,howler.min.js,sounds.js,smooth-scroll.js,jquery.columnizer.js,main.js"></script>


	<!--[if lt IE 9]>
	<script src="javascripts/skrollr.ie.min.js" type="text/javascript"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" 	 href="images/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57"		href="images/touch-icon-iphone-114.png" />
	<link rel="apple-touch-icon" sizes="114x114"	href="images/touch-icon-iphone-114.png" />
	<link rel="apple-touch-icon" sizes="72x72"		href="images/touch-icon-ipad-144.png" />
	<link rel="apple-touch-icon" sizes="144x144"	href="images/touch-icon-ipad-144.png" />

	<!-- Image Load Parser c.f. http://codepen.io/patrickkunka/pen/zxgas
	================================================== -->


</head>
<body>
<div class="left-border gradient-fixer"></div>
<div class="right-border gradient-fixer"></div>
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
<div class="all-scenes  gradient-1">
<script>setMargins();</script>
<!-- The Intro and the First Scene
================================================== -->
<!-- Part 1 Start -->
	<?php perch_layout('global.introandscene1'); ?>
	<?php perch_layout('global.intermission1'); ?>
	<?php perch_layout('global.scene2'); ?>
	<?php perch_layout('global.intermission2'); ?>
	<?php perch_layout('global.scene3'); ?>
	<?php perch_layout('global.intermission3'); ?>
	<?php perch_layout('global.scene4'); ?>

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