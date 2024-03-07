<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mypaperwriter
 */

get_header();
?>

<section class="no-results page-404 not-found container">
	<div class="no-result-words">
		<div class="h5"><?php esc_html_e( 'Sorry', 'mypaperwriter' ); ?></div>

		<div class="page-content">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) :

				printf(
					'<p>' . wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'mypaperwriter' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					) . '</p>',
					esc_url( admin_url( 'post-new.php' ) )
				);

			elseif ( is_search() ) :
				?>

			<p><?php esc_html_e( 'Please try again with some different keywords.', 'mypaperwriter' ); ?></p>

			<?php

			else :
				?>

			<p><?php esc_html_e( 'The page you’re looking for doesn’t exist.', 'mypaperwriter' ); ?>
			</p>
			<?php
			endif;
			?>
		</div>
		<a href="/samples/" rel="nofollow" class="main-link">Get Back to the Homepage</a>
	</div><!-- .page-content -->
</section><!-- .no-results -->

<div class='container  pb-section'>
	<div class='cta'>
		<div class='cta__content'>
			<div class="cta__title poppins-bold">Cross that paper off your list</div>
			<p>Secure the top grades, with vetted experts at your fingertips.</p>
			<div class='cta__btns'>
				<a href="/manage/signup" rel="nofollow" class="main-link">Write My Paper</a>
				<a href="/manage/login" rel="nofollow" class="secondary-link">
					View Sample</a>
			</div>
		</div>
	</div>
</div>

</div><!-- #primary -->

<?php
get_footer();