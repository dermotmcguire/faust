
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
	data-0-top		   = "top[swing]: -100%; display: !block;opacity:0.0;"
	data--200-top 	   = "top[swing]: 20%;opacity:1.0;"
	data--800-top 	   = "top[swing]: 25%;"
	data--1000-top     = "top[swing]: 35%;"
	data--5000-top     = "top[swing]: 10%;"
	data--7000-top     = "top[swing]: 25%;"
	data--9000-top	   = "top[swing]: 15%;"
	data--9200-top	   = "top[swing]: 25%;"
	data-0-bottom      = "top[swing]: 150%; display: !none;">
</div>

	<div class="scene intro js-intro-splash"> <!-- Begin Intro -->

		<div class="container">

			<div class="intro-face centered">
				<div class="intro-face-complete faceglow"></div>
				<div class="intro-face-glow"></div>
				<img class="intro-face-lefteye eyeglow" src="images/intro/face-lefteye.png" />
				<img class="intro-face-righteye eyeglow" src="images/intro/face-righteye.png" />
			</div>

			<!-- title -->
<!-- 			<div class="title"> 
				<p>I see my discourse leaves you cold;<br/>Dear kids, I do not take offense;<br/>Recall: the Devil, he is old,<br/>Grow old yourselves, and he'll make sense!</p>
				<p class="sub-quote">&mdash;Johann Wolfgang Von Goethe, Faust</p>

				<div id="title-logo" class="loading-start"><div class="loading-ready"></div></div>

				<div id="loading-bar" class="loading-start"><div class="loading-ready"></div></div>

				<p class="loading-text pulse">LOADING</p>
				<p class="loading-text-ready pulse">START SCROLLING</p>
			</div>  -->
			<div class="title"> <!-- title -->
				<p class="quote">I see my discourse leaves you cold;<br/>Dear kids, I do not take offense;<br/>Recall: the Devil, he is old,<br/>Grow old yourselves, and he'll make sense!</p>
				<p class="sub quote">&mdash;Johann Wolfgang Von Goethe, Faust</p>

				<div id="title-logo" class="loading-start"><div class="loading-ready"></div></div>
				<div class="loading-container">
					<div class="loading-bar">
						<div class="progress">
						</div>
					</div>	
					<p class="loading-text loading ">Loading</p>
					<p class="loading-text ready ">Start Scrolling</p>
				</div>
				<a href="#scene-one"><span class="ready-arrow"> </span></a>		
			</div>			
			<!-- end title -->

		</div>

	</div> <!-- End Intro -->

	<div class="city-pre">
		<div class="js-image scene-layer one-c" data-image-url="images/intro/spotlight-left.png">
			<img src="">
		</div>			
		<div class="intro-spotlights">
			<img class="spotlight-left-outer"		src="images/intro/spotlight-left.png"  />
			<img class="spotlight-right-inner"		src="images/intro/spotlight-right.png"  />
			<img class="spotlight-left-inner"		src="images/intro/spotlight-left.png" />
			<img class="spotlight-right-outer"		src="images/intro/spotlight-right.png" />
		</div>
	</div>

	<div class="scene part1" id="scene1"> <!-- Part 1 -->

		<div class="city centered"
			data-anchor-target  = "#scene1"
			data-0-top			= "display:!block;">


			<div class="scene1-layer city-left-back"
				data-anchor-target	= "#scene1"
				data-800-top		= "opacity: 0; transform: translateY(-2%);"
				data-450-top		= "opacity: 0.7;"
				data-0-bottom 		= "transform:translateY(0);">
			</div>

			<div class="scene1-layer city-centre-back"
				data-anchor-target  = "#scene1"
				data-800-top		= "opacity: 0; transform: scale(1.1) translateY(4%);"
				data-450-top		= "opacity: 1;"
				data-0-bottom		= "transform: scale(1.0) translateY(0%);">
			</div>

			<div class="scene1-layer city-right-mid"
				data-anchor-target 	= "#scene1"
				data-800-top		= "opacity: 0; transform: translateY(6%);"
				data-450-top		= "opacity: 1; transform: translateY(5%);"
				data-0-bottom		= "transform: translateY(0);">

				<a class="hotspot-link" href="#intermission-1">
					<span class="hotspot apartment on flicker"
					data-anchor-target 	= "#scene1"
					data--130-bottom	= "opacity: 0.0; display: !block;"
					data-0-bottom		= "opacity: 0.5;"></span>
				</a>

				<span class="hotspot apartment off"
				data-anchor-target 	= "#scene1"
				data--130-bottom	= "opacity: 0.0;"
				data-0-bottom		= "opacity: 1.0;"></span>
			</div>

			<div class="scene1-layer city-left-mid"
				data-anchor-target	= "#scene1"
				data-800-top		= "opacity: 0.0; transform: translateY(6%) translateX(4%);"
				data-150-top		= "opacity: 1.0;"
				data-0-bottom		= "transform: translateY(0%) translateX(14%);">
			</div>

			<div class="scene1-layer city-right-fore"
				data-anchor-target	= "#scene1"
				data-800-top		= "opacity: 0.0; transform: translateY(7%) translateX(5%);"
				data-150-top		= "opacity: 1.0;"
				data-0-bottom		= "transform: translateY(0%) translateX(0%);">

				<a class="hotspot-link" href="#intermission-1">
					<span class="hotspot sixsixsix on flicker"
					data-anchor-target 	= "#scene1"
					data--130-bottom	= "opacity: 0.0; display: !block;"
					data--0-bottom		= "opacity: 0.5;"></span>
				</a>

				<span class="hotspot sixsixsix off"
				data-anchor-target 	= "#scene1"
				data--130-bottom	= "opacity: 0.0;"
				data-0-bottom		= "opacity: 1.0;"></span>
			</div>

			<div class="scene1-layer city-left-fore"
				data-anchor-target	= "#scene1"
				data-800-top		= "opacity: 0.0; transform: translateY(7%) translateX(-10%);"
				data-150-top		= "opacity: 1.0;"
				data-0-bottom		= "transform: translateY(0%) translateX(0%);">

				<a class="hotspot-link" href="#intermission-1">
					<span class="hotspot hotel on flicker"
					data-anchor-target 	= "#scene1"
					data--130-bottom	= "opacity: 0.0; display: !block;"
					data-0-bottom		= "opacity: 0.5;"></span>
				</a>

		     	<span class="hotspot hotel off"
				data-anchor-target 	= "#scene1"
				data--130-bottom	= "opacity: 0.0;"
				data-0-bottom		= "opacity: 1.0;"></span>

				<a class="hotspot-link" href="#intermission-1">
					<span class="hotspot radio on flicker"
					data-anchor-target 	= "#scene1"
					data--130-bottom	= "opacity: 0.0; display: !block;"
					data-0-bottom		= "opacity: 0.5;"></span>
				</a>

				<span class="hotspot radio off"
				data-anchor-target 	= "#scene1"
				data--130-bottom	= "opacity: 0.0;"
				data-0-bottom		= "opacity: 1.0;"></span>
			</div>

		</div>

	</div>

</div> <!-- End Gradient Flood 1 -->
<!-- End Part 1 -->