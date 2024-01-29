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

<div class="container sides pb-section">
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
		the_archive_title( '<h1 class="page-title"><span>Search results for: </span>', '</h1>' );
				while ( have_posts() ) :
					echo "<div class='card'>".
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
			<div class="sample-numbers">
				<span class="words-count">
					<?php if(function_exists('bac_post_word_count')) { bac_post_word_count(); }?> words</span>
				<span>|</span>
				<span class="pages-count"><?php bac_post_pages_count(); ?> page(s)</span>
			</div>
			<a class="secondary-link" href="<?php the_permalink() ?>">See More</a>

		</div>
	</div>
	<?php
					$postcount++;
					if($postcount==3){?>
	<div class="search-banner3">
		<div class="inner-title">Here is your topic!</div>
		<p>We will write the topic for you if you can't find it among our "<?php the_archive_title() ?>"
			samples.</p>
		<a class="main-link" href="/manage/signup">Order Now</a>
	</div>
	<?php } ?>
	<?php
				endwhile;
				the_posts_pagination( array(
					'prev_next'=>true,
					'total'=>2,
				    'mid_size'=>3,
					 	'prev_text' => _( '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path d="M6.94 4L6 4.94L9.05333 8L6 11.06L6.94 12L10.94 8L6.94 4Z" fill="#252B4A"/>
</svg>'),
					  	'next_text' => _( '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path d="M6.94 4L6 4.94L9.05333 8L6 11.06L6.94 12L10.94 8L6.94 4Z" fill="#252B4A"/>
</svg>'),
					) );
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
</div>
</div>
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

<?php
get_sidebar();
get_footer();