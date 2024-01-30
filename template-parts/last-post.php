<div class="last-added-item card">
	<?php 
			the_post();
			echo"<div class='sample-preview'>";
			the_category();
			echo "<div class='sample-views'>";
			echo getPostViews(get_the_ID());
			echo "</div></div>";
			the_title( '<div class="h4 entry-wrapper"><a class="entry-title" href="'.esc_url( get_permalink() ).'">', '</a></div>' );
			echo "<p>".wp_trim_words( get_the_content(), 50, '...' )."</p>"; ?>
	<div class="sample-preview">

		<div class="sample-numbers">
			<span class="words-count">
				<?php if(function_exists('bac_post_word_count')) { bac_post_word_count(); }?> words</span>
			<span>|</span>
			<span class="pages-count"><?php bac_post_pages_count(); ?> page(s)</span>
		</div>
		<a class="secondary-link" href="<?php the_permalink() ?>">See More</a>
	</div>
</div>