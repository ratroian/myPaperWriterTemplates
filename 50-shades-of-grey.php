<?php
/**
 * Template Name: Spec Post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mypaperwriter
 */

get_header();
?>


<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>

<div class="container sides">

	<aside class="sidebar">
		
	</aside>

	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', get_post_type() );
	endwhile;
	?>
</div>

<div class="last-added">
	<div class="container">
		<div class="block-title h2">Last Added</div>
		<div class="last-added-items">
			<?php
			$recent_posts = wp_get_recent_posts('posts_per_page=9');
			foreach( $recent_posts as $recent ){
			echo '<div class="last-added-item">' .
			 '<a class="h5" href="' . get_permalink($recent["ID"]) . '">'.$recent["post_title"].'</a>'.
			 '<p>'.wp_trim_words($recent["post_content"], 20, '...' ).'</p>'.
			 '</div>';
			}
			?>
		</div>
	</div>
</div>

<?php
get_footer();
