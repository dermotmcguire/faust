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
		<div class="room centered scene-container"
		data-anchor-target  = "#scene2"
		data-0-top			= "display:!block;"
		data-0-bottom    	= "position:!fixed;">

			<div class="scene-layer cityscape-master"
			data-anchor-target	= "#scene2"
			data-0-top			= "display:!block; opacity: 0.0; transform: translate3d(200px, -10px, 0) scale(2.50);"
			data--500-top		= "opacity: 0.8;"
			data-0-bottom		= "opacity: 1.0; transform: translate3d(-40px, -40px, 0) scale(0.60);">

				<div class="scene-layer citylights-master"
				data-anchor-target	= "#scene2">
				</div>
				<div class="scene-layer sparklelights1-master flicker-slow-one"
				data-anchor-target	= "#scene2">
				</div>

			</div>

			<a class="hotspot-link" href="#intermission-2">
				<span class="hotspot tower-sprite on"
				data-anchor-target  = "#scene2"
				data-0-top			= "display:!none;  opacity: 0.0;"
				data-10-bottom		= "display:!block; opacity: 1.0;">
				</span>
			</a>

			<div class="scene-layer window-master"
			data-anchor-target	= "#scene2"
			data-0-top			= "display:!block; opacity: 0.0; transform: translate3d(-400px, -420px, 0) scale(1.00);"
			data--500-top		= "opacity: 1.0;"
			data--5000-top		= "transform: translate3d(-400px, -420px, 0) scale(0.77);"
			data-0-bottom		= "transform: translate3d(-485px, -530px, 0px) scale(0.5);">
			</div>



			<div class="scene-layer room-master"
			data-anchor-target	= "#scene2"
			data-0-top			= "display:!block;"
			data--500-top		= "opacity: 0.0; transform: translate3d(35%, -40%, 0px) scale(2.0); filter: blur(4.0px);"
			data--1000-top		= "opacity: 1.0;"
			data-0-bottom		= "transform: translate3d(-15%, -30%, 0) scale(0.5); filter: blur(1.0px);">
			</div>

			<div class="scene-layer mephisto-master"
			data-anchor-target 	= "#scene2"
			data-0-top			= "display:!block; opacity: 1.0; transform: translate3d(-100%, -30%, 0) scale(1.0);"
			data--1000-top		= "opacity: 0.8;"
			data-0-bottom		= "opacity: 1.0; transform: translate3d(-20%, -30%, 0) scale(0.65);">
			</div>

			<div class="scene-layer faust-master"
			data-anchor-target 	= "#scene2"
			data-0-top			= "display:!block; opacity: 1.0; transform: translate3d(100%, -30%, 0) scale(1.0);"
			data--4000-top		= "transform: translate3d(100%, -30%, 0) scale(1.0);"
			data--9000-top		= "transform: translate3d(10%, -30%, 0) scale(0.80);">
			</div>

		</div>

	</div>

</div>


