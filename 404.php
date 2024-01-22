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

	<section class="no-results page-404 not-found">
		<div class="no-result-words">
		<div class="h5"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'mypaperwriter' ); ?></div>

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

				<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'mypaperwriter' ); ?></p>
				<?php
			endif;
			?>
			</div>
		</div><!-- .page-content -->
		<img src="<?php bloginfo('template_url'); ?>/img/tear.png" alt="">
	</section><!-- .no-results -->

		</div><!-- #primary -->

<?php
get_footer();
