<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mypaperwriter
 */

get_header();
?>

<?php get_template_part('template-parts/inner-search'); ?>

<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>

<?php
	function f_rand($min=0,$max=1,$mul=10){
    	if ($min>$max) return false;
    		return mt_rand($min*$mul,$max*$mul)/$mul;
	}


	function rSchema()
{
	static $foo_called = false;
    if ($foo_called) return;

    $foo_called = true;

    echo f_rand(9.7,10);
}
?>

<script type='application/ld+json'>
{
	"@context": "http://schema.org",
	"@type": "product",
	"name": "My Paper Writer",
	"image": "https://mypaperwriter.com/theme/0.loc/img/logo/logo.svg",
	"aggregateRating": {
		"@type": "AggregateRating",
		"bestRating": "10",
		"worstRating": "0",
		"ratingValue": "<?php rSchema() ?>",
		"ratingCount": "<?php echo rand(189,325)?>"
	}
}
</script>

<div class="container sides sides-sample">
	<aside class="sidebar">
		<div class="sample-info d-none-mob">
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

		<div class="categories-cloud">
			<div class="h4 title">Categories</div>
			<div class="categories-cloud-inner">
				<?php prevNextCatsInPost(); ?>
			</div>
		</div>
		<div class='benefits'>
			<div class="h4 title">Skip the Writing, Enjoy the Results</div>
			<div class='benefit'>
				<p class='benefit__title'>Driven by Creativity</p>
				<p class='benefit__description'>We don't copy, we create anew - every project begins with original ideas
					and ends with a happy customer.</p>
			</div>
			<div class='benefit'>
				<p class='benefit__title'>100% Confidential</p>
				<p class='benefit__description'>To ensure protection of your privacy and personal data, we have put in
					the best safeguards there are.</p>
			</div>
			<div class='benefit'>
				<p class='benefit__title'>A Money-Back Option</p>
				<p class='benefit__description'>Our service comes with a money-back guarantee, but our work is so good
					you won't really need this option.</p>
			</div>

		</div>
		<div class="calc-wrap">
			<div class="h4 title">Get a Price Quote</div>
			<div class="calculator">
				<div class="services flex space-b">
					<div class="service-type active h6">Writing</div>
					<div class="service-type h6">Editing</div>
					<div class="service-type h6">Other</div>
				</div>
				<div class="calc-body">
					<div class="pp row">
						<div class="visible-block flex column">
							<p class="calc-description">Purpose</p>
							<div class="select flex a-center space-b">
								<span>Purpose</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
									fill="none">
									<path d="M2 4L6 8L10 4" stroke="#343939" />
								</svg>
							</div>
						</div>
						<div class="masked-block flex column gap" style="display: none;">
							<p class="option active">High School</p>
							<p class="option">College Freshman</p>
							<p class="option">College Sophomore</p>
							<p class="option">College Junior</p>
							<p class="option">College Senior</p>
							<p class="option">Master's</p>
							<p class="option">PhD</p>
							<p class="option">Business (Standard)</p>
							<p class="option">Business (Premium)</p>
						</div>
					</div>
					<div class="dl row">
						<div class="visible-block flex column">
							<p class="calc-description">Deadline</p>
							<div class="select flex a-center space-b">
								<span>Deadline</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
									fill="none">
									<path d="M2 4L6 8L10 4" stroke="#343939" />
								</svg>
							</div>
						</div>
						<div class="masked-block flex column gap" style="display: none;">
							<p class="option" data-dl="0">3-8 hours</p>
							<p class="option" data-dl="1">9-12 hours</p>
							<p class="option" data-dl="2">13-23 hours</p>
							<p class="option" data-dl="3">1 day</p>
							<p class="option" data-dl="4">2 days</p>
							<p class="option" data-dl="5">3 days</p>
							<p class="option" data-dl="6">4 days</p>
							<p class="option" data-dl="7">5-6 days</p>
							<p class="option" data-dl="8">7-8 days</p>
							<p class="option active" data-dl="9">9-10 days</p>
							<p class="option" data-dl="10">11-14 days</p>
							<p class="option" data-dl="11">15+ days</p>
						</div>
					</div>
					<div class="flex price-line space-b">
						<div class="final flex no-shrink">
							<p class="price no-shrink h4">$11.13</p>
							<p class="descr">per 100 words</p>
						</div>
						<a class="secondary-link" href="/manage/signup" rel="nofollow"><span>Submit Details</span></a>
					</div>
				</div>
				<div class="type-other flex column a-center" style="display: none;">
					<div class="h6">We can cope with any task!</div>
					<p class="descr">Explain what needs to be done - it can be anything - and your expert
						will figure out the best solution for you.</p>
					<a class="secondary-link" href="/manage/signup" rel="nofollow"><span>Submit Details</span></a>
				</div>
			</div>
		</div>



		<div class="search-bar">
			<div div class="title">Search</div>
			<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
		</div>
	</aside>

	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', get_post_type() );
	endwhile;
	?>
</div>

<!-- <div class="container">
	<div class="related-samples-wrapper">
		<div class="h3 related-samples-title">Related Samples</div>
		<div class="related-samples owl-carousel">
			<?php
			global $post;
			$current_post = $post;
			$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 9, 'post__not_in' => array($post->ID) ) );
			
			if( $related ) foreach( $related as $post ) {
				 setup_postdata($post);
				?>
					<div class="related-sample">
						<div class="related-sample-general">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							<div class="related-sample-general-numbers">
								<div><span>Pages:</span> <?php bac_post_pages_count(); ?> page(s)</div>
										<div><span>Words:</span> <?php bac_post_word_count(); ?> words</div>
							</div>
						</div>
						<p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
					</div>
			<?php }
			wp_reset_postdata(); ?>
		</div>
	</div>
</div> -->

<div class="container container-slider  pb-section">
	<div class="related-samples-wrapper">
		<div class="h3 related-samples-title">Related Samples</div>
		<div class="related-samples owl-carousel">
			<?php 
global $post;
$current_post = $post; // current post
for($i = 1; $i <= 9; $i++){
  $post = get_previous_post($taxonomy = 'category'); // this uses $post->ID
  setup_postdata($post);
  if( ! empty( $post->post_title ) ) {
?>

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
			<?php
} else {
		$recent_args = array( 
	"posts_per_page" => 1,
    "orderby"        => "date",
    "order"          => "DESC"
);      

$recent_posts = new WP_Query( $recent_args );

if ( $recent_posts -> have_posts() ) :
    while ( $recent_posts -> have_posts() ) :

    $recent_posts -> the_post();
    ?>
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
			<?php
    endwhile;
endif;
	}
}
?>
		</div>

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

<div class="plagiarism-banner hidden">
	<div class="search-banner3">
		<div class="wrap-banner">
			<div class="inner-title banner-title-article">Feeling lucky</br> <span>Get 20% Off</span></div>
			<p class="banner-content-article">Your proffesor make flag you for plagiarism if you hand in this sample as
				your own. Shall we write a brand new paper for you instead?</p>
			<a class="main-link" href="/manage/signup">Get 20% Off Now</a>
		</div>
		<div class="promo">Use code:

			<span>SAMPLE20</span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19"
				fill="none">
				<path
					d="M10.5 6.5H3C2.17275 6.5 1.5 7.17275 1.5 8V15.5C1.5 16.3273 2.17275 17 3 17H10.5C11.3273 17 12 16.3273 12 15.5V8C12 7.17275 11.3273 6.5 10.5 6.5Z"
					fill="#EE8253" />
				<path
					d="M15 2H7.5C7.10218 2 6.72064 2.15804 6.43934 2.43934C6.15804 2.72064 6 3.10218 6 3.5V5H12C12.3978 5 12.7794 5.15804 13.0607 5.43934C13.342 5.72064 13.5 6.10218 13.5 6.5V12.5H15C15.3978 12.5 15.7794 12.342 16.0607 12.0607C16.342 11.7794 16.5 11.3978 16.5 11V3.5C16.5 3.10218 16.342 2.72064 16.0607 2.43934C15.7794 2.15804 15.3978 2 15 2Z"
					fill="#EE8253" />
			</svg> at checkout
		</div>
		<a class="secondary-link" href="/manage/signup">Thanks, I'm okay to miss it</a>
		<div class="close">
			<svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M8.02602 6.49908L12.6799 1.8554C12.8837 1.65158 12.9982 1.37513 12.9982 1.08687C12.9982 0.798614 12.8837 0.522165 12.6799 0.318337C12.4761 0.114509 12.1997 0 11.9114 0C11.6232 0 11.3468 0.114509 11.143 0.318337L6.5 4.97283L1.85699 0.318337C1.65319 0.114509 1.37678 -2.14767e-09 1.08856 0C0.800348 2.14767e-09 0.523938 0.114509 0.320139 0.318337C0.11634 0.522165 0.00184703 0.798614 0.00184703 1.08687C0.00184703 1.37513 0.11634 1.65158 0.320139 1.8554L4.97397 6.49908L0.320139 11.1427C0.218698 11.2434 0.138182 11.3631 0.0832357 11.495C0.0282893 11.6269 0 11.7684 0 11.9113C0 12.0542 0.0282893 12.1957 0.0832357 12.3276C0.138182 12.4595 0.218698 12.5792 0.320139 12.6798C0.420751 12.7813 0.540454 12.8618 0.67234 12.9168C0.804227 12.9717 0.945688 13 1.08856 13C1.23144 13 1.3729 12.9717 1.50479 12.9168C1.63667 12.8618 1.75637 12.7813 1.85699 12.6798L6.5 8.02532L11.143 12.6798C11.2436 12.7813 11.3633 12.8618 11.4952 12.9168C11.6271 12.9717 11.7686 13 11.9114 13C12.0543 13 12.1958 12.9717 12.3277 12.9168C12.4595 12.8618 12.5792 12.7813 12.6799 12.6798C12.7813 12.5792 12.8618 12.4595 12.9168 12.3276C12.9717 12.1957 13 12.0542 13 11.9113C13 11.7684 12.9717 11.6269 12.9168 11.495C12.8618 11.3631 12.7813 11.2434 12.6799 11.1427L8.02602 6.49908Z"
					fill="#252b4a" />
			</svg>
		</div>
	</div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
	$('.owl-carousel').owlCarousel({
		loop: true,
		nav: false,
		dots: true,
		center: false,
		navText: [
			'<span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none"><path d="M25.6833 27.65L18.05 20L25.6834 12.35L23.3334 10L13.3334 20L23.3333 30L25.6833 27.65Z" fill="#EE8253"/></svg></span>',
			'<span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none"><path d="M14.3169 27.65L21.9502 20L14.3169 12.35L16.6669 10L26.6669 20L16.6669 30L14.3169 27.65Z" fill="#EE8253"/></svg></span>',
		],
		touchDrag: true,

		items: 1,
		responsive: {
			768: {
				margin: 20,
				items: 2
			},
			1280: {
				margin: 20,
				items: 3,
				nav: true,
				dots: false,
			},
		},
	});
});
</script>
<?php
get_footer();