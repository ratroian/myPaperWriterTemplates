<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mypaperwriter
 */

?>

<section class="no-results not-found">
	<div class="no-result-words">
	<div class="h5"><?php esc_html_e( 'Sorry we couldn\'t find any matches', 'mypaperwriter' ); ?></div>

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
			get_search_form();

		endif;
		?>
		<ul>
			Search Tips
			<li>Use different keywords</li>
			<li>Double-check your spelling</li>
			<li>Starting whith less specific - you can narrow your results letter</li>
		</ul>
		</div>
	</div><!-- .page-content -->
	<img src="<?php bloginfo('template_url'); ?>/img/tear.png" alt="">
</section><!-- .no-results -->
