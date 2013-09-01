<!-- Copy content from line 68 -->

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

	<div class="intermission"  id="intermission-3"> <!-- Intermission 3 -->
		<div class="intermission-bg">
			<div class="headline">
				<div class="news-lines"></div>
					<h2>&nbsp;&nbsp;&nbsp;&nbsp;THE STARS NEVER SHINE</h2>
				<div class="news-lines"></div>
			</div>

			<div class="container">
				<div class="narrative-text news-copy">
					
					<?php perch_content('Part 3 Narrative Content'); ?>

				</div>
				<div class="clear"></div>
					<div class="news-lines inner"></div>
						<div class="eight columns">
							<a href="javascript:void(0);" id="part3pushHeight"><h3>NEWSFLASH</h3></a>
						</div>
						<div class="eight columns">
							<a href="javascript:void(0);" id="part3pushHeight"><h3>THE ARCHIVES</h3></a>
						</div>
				<div class="clear"></div>
					<div class="news-lines inner"></div>
				<div class="clear"></div>
				<div class="information-text hidden-text" id="newsflash">
					<div class="one-third column faust-article-left">
					<?php perch_content_custom('News Articles', array(
						'template'=>'_faust_article_one-third.html',
						'sort'=>'date',
						'sort-order'=>'DESC',
						'count'=>2
					)); ?>
					</div>
					<div class="two-thirds column faust-article-right">
						<?php perch_content_custom('News Articles', array(
						'template'=>'_faust_article_two-thirds.html',
						'sort'=>'date',
						'sort-order'=>'DESC',
						'count'=>2
					)); ?>
					</div>
				<div class="clear"></div>
				<div class="sixteen columns information-text" id="thearchives">
					<?php perch_content_custom('News Articles', array(
						'template'=>'_faust_article_archive.html',
						'sort'=>'date',
						'sort-order'=>'DESC',
						'count'=>9
					)); ?>
				</div>
				</div>
			</div> <!-- end container -->
		</div>
	</div><!-- End Intermission 3 -->

	
<script type="text/javascript">

	$(function(columnize){
		$('.news-copy').columnize({width:300});
	});
	
	$(function(part3pushing){
			var push3 = document.getElementById('intermission-3').scrollHeight;
			$("#part3pushHeight").click(function(){
				$("#intermission-3 .hidden-text").css("opacity","1"),
				$("#intermission-3").animate({ height : push3+'px' },500);
			});
		});
</script>

<!-- End Document
================================================== -->
</body>
</html>