<!-- site navigation v1 -->
<ul class="nav"> 
	<li><a href="#intro" title="Home">Home&nbsp;</a</li>
    <li><a href="#part1" title="Part 1">Part 1</a><span>Part 1 Subheading</span></li>
    <li><a href="#part2" title="Part 2">Part 2</a><span>Part 2 Subheading</span></li>
    <li><a href="#part3" title="Part 3">Part 3</a><span>Part 3 Subheading</span></li>
    <li><a href="#part4" title="Part 4">Part 4</a><span>Part 4 Subheading</span></li>
    <li><a href="#sound" title="Sound">Sound</a><span>Turn the sound on or off</span></li>
</ul> <!-- end site navigation v1 -->




<!-- start part 1 layout v1 -->
.city-centre-back .city-top {
	background: url(../images/part1/top/city-top-centre-back.png) no-repeat;
}

.city-left-back .city-top {
	background: url(../images/part1/top/city-top-left-back.png) no-repeat;
}

.city-right-mid .city-top {
	background: url(../images/part1/top/city-top-right-mid.png) no-repeat;
}

.city-left-mid .city-top {
	background: url(../images/part1/top/city-top-left-mid.png) no-repeat;
}

.city-right-fore .city-top {
	background: url(../images/part1/top/city-top-right-fore.png) no-repeat;
}

.city-left-fore .city-top {
	background: url(../images/part1/top/city-top-left-fore.png) no-repeat;
}

.city-centre-back .city-tile {
	background: url(../images/part1/tile/city-tile-centre-back.png) repeat-y;
}

.city-left-back .city-tile {
	background: url(../images/part1/tile/city-tile-left-back.png) repeat-y;
}

.city-right-mid .city-tile {
	background: url(../images/part1/tile/city-tile-right-mid.png) repeat-y;
	margin: -1px 0 0 3px; 
}

.city-left-mid .city-tile {
	background: url(../images/part1/tile/city-tile-left-mid.png) repeat-y;
}

.city-right-fore .city-tile {
	background: url(../images/part1/tile/city-tile-right-fore.png) repeat-y;
}

.city-left-fore .city-tile {
	background: url(../images/part1/tile/city-tile-left-fore.png) repeat-y;
}

.city-centre-back .city-bottom {
	background: url(../images/part1/bottom/city-bottom-centre-back.jpg) no-repeat;
}

.city-left-back .city-bottom {
	background: url(../images/part1/bottom/city-bottom-left-back.png) no-repeat;
}

.city-right-mid .city-bottom {
	background: url(../images/part1/bottom/city-bottom-right-mid.png) no-repeat;
}

.city-left-mid .city-bottom {
	background: url(../images/part1/bottom/city-bottom-left-mid.png) no-repeat;
}

.city-right-fore .city-bottom {
	background: url(../images/part1/bottom/city-bottom-right-fore.png) no-repeat;
}

.city-left-fore .city-bottom {
	background: url(../images/part1/bottom/city-bottom-left-fore.png) no-repeat;
}
<!-- end part 1 layout v1 -->

<!-- start gradient flood 1 v1 -->
.gradient-1  /* Floods from start of intro to the end of Part 1 */ {
background: -moz-linear-gradient(top, rgba(0,0,0,0.9) 0%, rgba(120,7,0,0.86) 10%, rgba(118,7,0,0.8) 25%, rgba(112,7,0,0.8) 75%, rgba(112,7,0,0) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.9)), color-stop(10%,rgba(120,7,0,0.86)), color-stop(25%,rgba(118,7,0,0.8)), color-stop(75%,rgba(112,7,0,0.8)), color-stop(100%,rgba(112,7,0,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, rgba(0,0,0,0.9) 0%,rgba(120,7,0,0.86) 10%,rgba(118,7,0,0.8) 25%,rgba(112,7,0,0.8) 75%,rgba(112,7,0,0) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, rgba(0,0,0,0.9) 0%,rgba(120,7,0,0.86) 10%,rgba(118,7,0,0.8) 25%,rgba(112,7,0,0.8) 75%,rgba(112,7,0,0) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(0,0,0,0.9) 0%,rgba(120,7,0,0.86) 10%,rgba(118,7,0,0.8) 25%,rgba(112,7,0,0.8) 75%,rgba(112,7,0,0) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(0,0,0,0.9) 0%,rgba(120,7,0,0.86) 10%,rgba(118,7,0,0.8) 25%,rgba(112,7,0,0.8) 75%,rgba(112,7,0,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e6000000', endColorstr='#00700700',GradientType=0 ); /* IE6-9 */
	/* Spotlight gradient from .palette-near-black to .palette-blood-red: http://www.colorzilla.com/gradient-editor/#000000+0,780700+10,700700+75,700700+100&0.9+0,0.8+25,0.8+75,0+100;Custom */	
}
<!-- end gradient flood 1 v1 -->

<!-- start cityscape v1 -->
				<div class="city-left-back"
					data--100-top-top	 = "background-position:0px 200px;"
					data-500-top-top 	 = "background-position:0px 0px;"
					data--300-bottom-bottom = "background-position:0px 0px; postition:!fixed;">
				</div>
				
				<div class="city-centre-back"
					data-100-top-top	 = "background-position:0px 0px;	transform:scale(1);" 	
					data-500-top-top	 = "background-position:0px 0px;"
					data--300-bottom-bottom = "background-position:0px 0px; postition:!fixed; transform:scale(0.9);">
				</div>
				
				
				<div class="city-right-mid"
					data--100-top-top	 = "background-position:0px 250px;"
					data-250-top-top	 = "background-position:0px 125px;"
					data-500-top-top	 = "background-position:0px 0px;"
					data--300-bottom-bottom = "background-position:0px 0px;  postition:!fixed;">
				<span class="hotspot apartment on" data-bottom = "opacity:!1;" data--50-bottom= "opacity:0.5;" ></span>
				<span class="hotspot apartment off"></span>	
				</div>
				
				<div class="city-left-mid"
					data--100-top-top	 = "background-position:0px 250px; left: 10%;"
					data-250-top-top	 = "background-position:0px 125px;"
					data-500-top-top	 = "background-position:0px 0px; "
					data--300-bottom-bottom = "background-position:0px 0px; left: 8%; postition:!fixed;">
				</div>
				
				

				<div class="city-right-fore"
					data--100-top-top	 = "background-position:0px 300px; 	right:-5%;"
					data-500-top-top	 = "background-position:0px 0px;"
					data--300-bottom-bottom = "background-position:0px 0px; postition:!fixed; right:0%;">
				<span class="hotspot sixsixsix on" data-bottom = "opacity:!1;" data--50-bottom= "opacity:0.5;" ></span>
				<span class="hotspot sixsixsix off"></span>
				</div>


					
				<div class="city-left-fore"
					data--100-top-top	 = "background-position:0px 300px; 	left:-5%;"
					data-500-top-top	 = "background-position:0px 0px;"
					data--300-bottom-bottom = "background-position:0px 0px; postition:!fixed; left:0%;">
				<span class="hotspot hotel on" data-bottom = "opacity:!1;" data--50-bottom= "opacity:0.5;" ></span>
				<span class="hotspot hotel off"></span>
				<span class="hotspot radio on" data-bottom = "opacity:!1;" data--50-bottom= "opacity:0.5;" ></span>
				<span class="hotspot radio off"></span>
				</div>
<!-- end cityscape v1 -->