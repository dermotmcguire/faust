<section class="intermission three" id="intermission3" 				>
	<div class="intermission-gradient-top">
	</div>
	<div class="intermission-gradient-vignette">
	</div>
	<header> </header>

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
			<div class="news-lines inner" id="news-lines-1"></div>

			<div class="eight columns">
				<button class="more-info-button three"><h3 id="newsflash" >&#10524;&nbsp;NEWSFLASH&#10523;</h3></button>
			</div>
			<div class="eight columns">
				<button class="more-info-button three"><h3 id="the-archives" >&#10524;&nbsp;THE ARCHIVES&#10523;</h3></button>
			</div>
			<div class="news-lines inner"></div>
		</div>
		<div class="more-info three container">
			<div class="information-text" id="newsflash">
				<div class="one-third column">
				<?php perch_content_custom('News Articles', array(
					'template'=>'_faust_article_one-third.html',
					'sort'=>'date',
					'sort-order'=>'DESC',
					'count'=>2
				)); ?>
				</div>
				<div class="two-thirds column">
					<?php perch_content_custom('News Articles', array(
					'template'=>'_faust_article_two-thirds.html',
					'sort'=>'date',
					'sort-order'=>'DESC',
					'count'=>2
				)); ?>
				</div>
			</div>

			<div class="article-divide"></div>

			<div class="clear"></div>
			<div class="sixteen columns information-text" id="the-archives">
				<?php perch_content_custom('News Articles', array(
					'template'=>'_faust_article_archive.html',
					'sort'=>'date',
					'sort-order'=>'DESC',
					'count'=>9
				)); ?>
			</div>
			
			<div class="article-divide"></div>

		</div>
	</div>
	<footer></footer>
	<div class="intermission-gradient-bottom">
	</div>
</section>