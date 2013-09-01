<div class="intermission"  id="intermission3"> <!-- Intermission 3 -->
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
				<div class="news-lines inner" id="news-lines-3"></div>
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
			<div class="sixteen columns information-text" id="the-archives">
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