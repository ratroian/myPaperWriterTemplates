<?php
add_filter('wp_trim_words', 'highlight_results');
add_filter('the_excerpt', 'highlight_results');
add_filter('the_title', 'highlight_results');
?>


<div class="main-search">
	<div class="container search-inner">
		<div class="search-content">
			<h1 class="search-title mb-40">Read our sample essays and get inspired for your own academic work</h1>

			<div class="search-search">
				<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
			</div>
		</div>
		<!-- <div class="search-img">
		</div> -->
	</div>
</div>
</div>
</div>