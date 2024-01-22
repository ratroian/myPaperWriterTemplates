<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mypaperwriter
 */

get_header();
?>

<?php get_template_part('template-parts/inner-search'); ?>

<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>

<div class="container sides">

	<aside class="sidebar">
		<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar' ); ?>
		<?php endif; ?>
	</aside>

	<div class="posts-area">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div>
</div>
<?php
get_sidebar();
get_footer();
