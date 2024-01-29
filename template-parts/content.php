<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mypaperwriter
 */

?>

<div class="post-wrapper">
	<div class="sample-info d-block-mob">
		<div class="h3">Paper Details:</div>
		<ul class="sample-info-list">
			<li>
				<div>Category: <span class="categories-cloud cloud"><?php the_category(); ?></span></div>
			</li>
			<li>
				<div>Pages: <span><?php bac_post_pages_count(); ?> page(s)</span></div>
			</li>
			<li>
				<div>Words: <span><?php bac_post_word_count(); ?> words</span></div>
			</li>
			<li>
				<div>Date added: <span><?php echo get_the_date( $d, $post );?></span></div>
			</li>
			<li>
				<div>Views: <span><?php setPostViews(get_the_ID());
        echo getPostViews(get_the_ID()); ?></span></div>
			</li>
		</ul>
	</div>
	<?php
		if ( is_singular() ) :
			the_title( '<h1 class="h4 title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
 		?>

	<div class="post-content">
		<?php
			the_content();
			?>
		<div class="social-buttons">
			<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
				<a class="a2a_button_facebook social-button"></a>
				<a class="a2a_button_linkedin social-button"></a>
				<a class="a2a_button_pinterest social-button"></a>
				<a class="a2a_button_twitter social-button"></a>
				<a class="a2a_button_reddit social-button"></a>
			</div>
			<script async src="https://static.addtoany.com/menu/page.js"></script>
		</div>
	</div>
</div>