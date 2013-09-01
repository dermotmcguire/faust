
<!-- Intro and Part 1 -->

<!-- Storyboard: 
	1. Intro text, image, quote appears.
	2. Page loading animation plays - body is set to overflow:auto c.f. http://www.barrelny.com/blog/taking-control-of-imageloading/.
	3. Scroll starts, faust falls through.
	5. City rises from below, faust falls to center.
	6. City scrolls to bottom, faust falls out of screen.
	7. Hotspots turn on.
-->

<div class="body-gradient-flood gradient-1" id="scene0">

<div class="faust-falling"
	data-anchor-target = "#scene0"
	data-0-top		   = "top:-100%;"
	data-100-top 	   = "top:60%;"
	data-800-top 	   = "top[quadratic]:60%;"
	data-1000-top      = "top[quadratic]:55%; transform:rotate(0deg);"
	data-5000-top      = "top[quadratic]:30%; transform:rotate(10deg);"
	data-7000-top      = "top[quadratic]:35%; transform:rotate(45deg);"
	data-9000-top	   = "top[quadratic]:30%;"
	data-9200-top	   = "top[quadratic]:25%;"
	data-0-bottom      = "top[quadratic]:150%; transform:rotate(90deg);">
</div>

	<div class="scene intro js-intro-splash"> <!-- Begin Intro -->

	
		<div class="container">
			
			<div class="intro-face centered">
				<div class="intro-face-complete faceglow"></div>
				<div class="intro-face-glow"></div>
				<img class="intro-face-lefteye eyeglow" src="images/intro/face-lefteye.png" />
				<img class="intro-face-righteye eyeglow" src="images/intro/face-righteye.png" />
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
				
				<p class="loading-text pulse">LOADING</p>
				<p class="loading-text-ready pulse">START SCROLLING</p>
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

	<div class="scene part1" id="scene1"> <!-- Part 1 -->

		<div class="city centered">

			<div class="city-left-back"
				data-anchor-target="#scene1"
				data--100-top	 	= "background-position:0px 200px;"
				data-500-top 	 	= "background-position:0px 0px;"
				data--300-bottom = "background-position:0px 0px; postition:!fixed;">
			</div>
	
			<div class="city-centre-back"
				data-anchor-target="#scene1"
				data-100-top	 	= "background-position:0px 0px; transform:scale(1);" 	
				data-500-top	 	= "background-position:0px 0px;"
				data--300-bottom = "background-position:0px 0px; transform:scale(0.9); postition:!fixed;">
			</div>

			<div class="city-right-mid"
				data-anchor-target="#scene1"
				data--100-top	 	= "background-position:0px 250px;"
				data-250-top	 	= "background-position:0px 125px;"
				data-500-top	 	= "background-position:0px 0px;"
				data--300-bottom = "background-position:0px 0px; postition:!fixed;">
				
				<span class="hotspot apartment on flicker"  data--350-bottom= "opacity:0.5;" data--300-bottom = "opacity:!1;"></span>
				<span class="hotspot apartment off"></span>	
			</div>
	
			<div class="city-left-mid"
				data-anchor-target="#scene1"
				data--100-top	 	= "background-position:0px 250px; left: 10%;"
				data-250-top	 	= "background-position:0px 125px;"
				data-500-top	 	= "background-position:0px 0px;"
				data--300-bottom = "background-position:0px 0px; left: 8%; postition:!fixed;">
			</div>
	
			<div class="city-right-fore"
				data-anchor-target="#scene1"
				data--100-top	 	= "background-position:0px 300px; right:-5%;"
				data-500-top	 	= "background-position:0px 0px;"
				data--300-bottom = "background-position:0px 0px; right:0%; postition:!fixed;">
				
				<span class="hotspot sixsixsix on flicker"  data--350-bottom= "opacity:0.5;" data--300-bottom = "opacity:!1;"></span>
				<span class="hotspot sixsixsix off"></span>
			</div>

			<div class="city-left-fore"
				data-anchor-target="#scene1"
				data--100-top	 	= "background-position:0px 300px; left:-5%;"
				data-500-top	 	= "background-position:0px 0px;"
				data--300-bottom = "background-position:0px 0px; left:0%; postition:!fixed;">
				
				<span class="hotspot hotel on flicker"  data--350-bottom= "opacity:0.5;" data--300-bottom = "opacity:!1;"></span>
				<span class="hotspot hotel off"></span>
				
				<span class="hotspot radio on flicker"  data--350-bottom= "opacity:0.5;" data--300-bottom = "opacity:!1;"></span>
				<span class="hotspot radio off"></span>
			</div>
			
		</div>

	</div>

</div> <!-- End Gradient Flood 1 -->
<!-- End Part 1 -->