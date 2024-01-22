<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package mypaperwriter
 */

get_header();
?>

<?php get_template_part('template-parts/inner-search'); ?>
<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>

<div class="container sides">
	<aside class="sidebar">
		<div class="categories-cloud">
			<div class="h4 title">Categories</div>
				<div class="categories-cloud-inner">
					<?php prevNextCatsInPost(); ?>
				</div>
				<div class="search-bar">
					<div class="title">Search</div>
					<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
				</div>
		</div>
	</aside>
	<div class="search-post-wrapper">
		<?php if ( have_posts() ) : ?>

				<?php
				while ( have_posts() ) :
					echo "<div class='sample'>".
					the_post();
					echo"<div class='sample-preview'>";
					the_category();
					echo "<div class='sample-views'>";
					echo getPostViews(get_the_ID());
					echo "</div></div>";
					the_title( '<div class="h4 entry-wrapper"><a class="entry-title" href="'.esc_url( get_permalink() ).'">', '</a></div>' );
					echo "<p>".wp_trim_words( get_the_content(), 50, '...' )."</p>";
				?>
				<div class="sample-preview">
          <a class="read-more" href="<?php the_permalink() ?>">Read More</a>
					<div class="sample-numbers">
						<span class="words-count">
						<?php if(function_exists('bac_post_word_count')) { bac_post_word_count(); }?> words</span> |
						<span class="pages-count"><?php bac_post_pages_count(); ?> page(s)</span>
					</div>
				</div>
				</div>
				<?php
					$postcount++;
					if($postcount==3){?>
					<div class="search-banner3">
            <div class="inner-title">Here is your topic!</div>
						<p>We will write the topic for you if you can't find it among our samples.</p>
						<a class="order" href="/manage/signup">Order Now</a>
					</div>
					<?php } ?>
				<?php
				endwhile;
				the_posts_pagination( array(
				    'mid_size'=>3,
					 	'prev_text' => _( '<< Previous'),
					  	'next_text' => _( 'Next >>'),
					) );
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
			</div>
	</div>

<?php
get_sidebar();
get_footer();
