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
		<div class="sample-info">
			<div class="h3">Paper Details:</div>
			<ul class="sample-info-list">
				<li><div>Category: <span><?php the_category(); ?></span></div></li>
				<li><div>Pages: <span><?php bac_post_pages_count(); ?> page(s)</span></div></li>
				<li><div>Words: <span><?php bac_post_word_count(); ?> words</span></div></li>
				<li><div>Date added: <span><?php echo get_the_date( $d, $post );?></span></div></li>
				<li><div>Views: <span><?php setPostViews(get_the_ID());
        echo getPostViews(get_the_ID()); ?></span></div></li>
			</ul>
		</div>
		<div class="categories-cloud">
			<div class="h4 title">Categories</div>
			<div class="categories-cloud-inner">
				<?php prevNextCatsInPost(); ?>
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

<div class="container container-slider">
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
      
<div class="related-sample">
	<div class="related-sample-general">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    <div class="related-sample-general-numbers"><?php bac_post_word_count(); ?> words | <?php bac_post_pages_count();?> page(s)</div>
	</div>
	<p><?php echo wp_trim_words(get_the_content(), 22); ?></p>
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
    	<div class="related-sample">
	<div class="related-sample-general">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		<div class="related-sample-general-numbers"><?php bac_post_word_count(); ?> words | <?php bac_post_pages_count();?> page(s)</div>
	</div>
	<p><?php echo wp_trim_words(get_the_content(), 22); ?></p>
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

<div class="plagiarism-banner hidden">
	<div class="wrapper">
		<div class="content">
			<div class="img">
			<svg width="157" height="156" viewBox="0 0 157 156" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M156.5 78.0002L78.5 0L0.499756 78.0002L78.5 156L156.5 78.0002Z" fill="#2F2F2F"/>
				<path d="M78.6183 33.795L78.6142 33.6201L78.6876 33.7055L78.7016 33.6875L78.7026 33.7229L96.5791 54.5223C102.532 61.4487 101.743 71.8895 94.8167 77.8426L80.2521 90.3605L80.2608 90.6794L80.0611 90.5247L79.9529 90.6176L79.9487 90.4376L64.7671 78.6761C57.5471 73.0827 56.2286 62.6955 61.822 55.4755L78.6183 33.795Z" fill="#D78D93"/>
				<path d="M58.1841 47.3722L58.181 47.2422L58.2356 47.3057L58.2462 47.292L58.2469 47.3189L71.5801 62.8321C76.0201 67.9981 75.4316 75.7854 70.2656 80.2255L59.4026 89.562L59.4091 89.7994L59.2604 89.6842L59.1795 89.7537L59.1763 89.6191L47.8531 80.8467C42.4682 76.6749 41.4847 68.9276 45.6566 63.5426L58.1841 47.3722Z" fill="#D78D93"/>
				<path d="M59.0905 61.9938L59.089 61.9307L59.1155 61.9615L59.1205 61.9551L59.1208 61.9677L65.5616 69.4616C67.7065 71.9571 67.4222 75.7189 64.9266 77.8638L59.679 82.3738L59.6822 82.4889L59.6101 82.4331L59.5713 82.4665L59.5698 82.4018L54.1 78.1642C51.4987 76.1489 51.0236 72.4065 53.0389 69.8052L59.0905 61.9938Z" fill="#F8ED9D"/>
				<path d="M99.7543 47.3722L99.7513 47.2422L99.8059 47.3057L99.8165 47.292L99.8173 47.3189L113.15 62.8321C117.59 67.9981 117.002 75.7854 111.836 80.2255L100.973 89.5624L100.979 89.7994L100.831 89.6844L100.75 89.7537L100.747 89.6195L89.4235 80.8467C84.0385 76.6749 83.0551 68.9276 87.2269 63.5426L99.7543 47.3722Z" fill="#D78D93"/>
				<path d="M100.66 61.9944L100.659 61.9307L100.686 61.9618L100.691 61.9551L100.691 61.9683L107.132 69.4616C109.277 71.9571 108.993 75.7189 106.497 77.8638L101.25 82.3738L101.253 82.4889L101.181 82.433L101.142 82.4665L101.14 82.4017L95.6703 78.1642C93.069 76.1489 92.594 72.4065 94.6092 69.8052L100.66 61.9944Z" fill="#F8ED9D"/>
				<path d="M79.8337 53.3986L79.8317 53.3145L79.867 53.3556L79.8739 53.3467L79.8744 53.3641L88.5099 63.4116C91.3856 66.7575 91.0044 71.8011 87.6585 74.6768L80.6229 80.7237L80.6271 80.8775L80.5308 80.8029L80.4783 80.848L80.4762 80.7606L73.1426 75.0791C69.6549 72.3772 69.018 67.3594 71.7199 63.8717L79.8337 53.3986Z" fill="#F8ED9D"/>
				<path d="M29.3531 84.2137C29.3531 76.197 35.8518 69.6982 43.8685 69.6982H116.974V98.7291H43.8685C35.8519 98.7291 29.3531 92.2303 29.3531 84.2137Z" fill="white"/>
				<path d="M64.4118 84.2137C64.4118 76.197 70.9106 69.6982 78.9272 69.6982H90.8035V98.7291H78.9272C70.9106 98.7291 64.4118 92.2303 64.4118 84.2137Z" fill="#D88D95"/>
				<path d="M76.552 84.2137C76.552 76.197 83.0508 69.6982 91.0674 69.6982H95.554V98.7291H91.0674C83.0508 98.7291 76.552 92.2303 76.552 84.2137Z" fill="white"/>
				<path d="M116.182 98.729C124.199 98.729 130.697 92.2303 130.697 84.2136C130.697 76.197 124.199 69.6982 116.182 69.6982C108.165 69.6982 101.667 76.197 101.667 84.2136C101.667 92.2303 108.165 98.729 116.182 98.729Z" fill="#F3BBC0"/>
				<path d="M75.6217 80.6094L64.9257 86.7847L84.0812 119.963L87.2791 113.151L94.7771 113.788L75.6217 80.6094Z" fill="#B66F76"/>
				<path d="M67.6622 80.6094L78.3582 86.7847L59.2028 119.963L56.0049 113.151L48.5068 113.788L67.6622 80.6094Z" fill="#D88D95"/>
				<path d="M71.2314 95.2299C77.3155 95.2299 82.2477 90.2977 82.2477 84.2136C82.2477 78.1294 77.3155 73.1973 71.2314 73.1973C65.1473 73.1973 60.2151 78.1294 60.2151 84.2136C60.2151 90.2977 65.1473 95.2299 71.2314 95.2299Z" fill="#F3BBC0"/>
				<path d="M71.2314 90.2552C74.5679 90.2552 77.2726 87.5505 77.2726 84.214C77.2726 80.8776 74.5679 78.1729 71.2314 78.1729C67.895 78.1729 65.1902 80.8776 65.1902 84.214C65.1902 87.5505 67.895 90.2552 71.2314 90.2552Z" fill="#F8ED9D"/>
				<mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="101" y="69" width="30" height="30">
				<path d="M116.182 98.729C124.199 98.729 130.697 92.2303 130.697 84.2136C130.697 76.197 124.199 69.6982 116.182 69.6982C108.165 69.6982 101.667 76.197 101.667 84.2136C101.667 92.2303 108.165 98.729 116.182 98.729Z" fill="#F3BBC0"/>
				</mask>
				<g mask="url(#mask0)">
				<path d="M117.082 91.0253C120.868 91.0253 123.937 87.956 123.937 84.1699C123.937 80.3837 120.868 77.3145 117.082 77.3145C113.296 77.3145 110.227 80.3837 110.227 84.1699C110.227 87.956 113.296 91.0253 117.082 91.0253Z" fill="#D88D95"/>
				</g>
			</svg>
			</div>
			<div class="text">
				<div class="like-h1">Feeling lucky?</div>
				<p>Your professor may flag you for plagiarism if you hand in this sample as your own. Shall we write a brand new paper for you instead?</p>
				<div class="like-h2">Get 20% Off</div>
				<p>on your first order</p>
			</div>
			<div class="btn">
				<a target="_blank" href="/manage/signup/">Do My Paper</a>
				<p class="clipboard">Use code:
					<span class="clip">SAMPLES20</span>
					<svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M8.99765 8.9769L3.73518 8.9769C3.48142 8.9769 3.23805 8.87533 3.05862 8.69453C2.87918 8.51373 2.77837 8.26852 2.77837 8.01283L2.77837 1.26441C2.77837 1.00872 2.87918 0.763508 3.05861 0.582711C3.23805 0.401914 3.48142 0.300343 3.73518 0.300343L8.99765 0.300343C9.25142 0.300343 9.49479 0.401914 9.67422 0.58271C9.85366 0.763507 9.95447 1.00872 9.95447 1.2644L9.95447 8.01283C9.95447 8.26852 9.85366 8.51373 9.67422 8.69453C9.49479 8.87532 9.25142 8.9769 8.99765 8.9769ZM7.56243 11.6997L1.00235 11.6997C0.748586 11.6997 0.505217 11.5981 0.32578 11.4173C0.146342 11.2365 0.0455356 10.9913 0.0455356 10.7356L0.0455339 3.3285L1.28259 3.32849L1.28259 10.4533L7.56243 10.4533L7.56243 11.6997Z" fill="#D88D94"/>
					</svg>
				</p>
				<div class="copy-success">Code copied! Use it at checkout.</div>
				<span id="cliptext"></span>
			</div>
		</div>
		<div class="close">
			<svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M8.02602 6.49908L12.6799 1.8554C12.8837 1.65158 12.9982 1.37513 12.9982 1.08687C12.9982 0.798614 12.8837 0.522165 12.6799 0.318337C12.4761 0.114509 12.1997 0 11.9114 0C11.6232 0 11.3468 0.114509 11.143 0.318337L6.5 4.97283L1.85699 0.318337C1.65319 0.114509 1.37678 -2.14767e-09 1.08856 0C0.800348 2.14767e-09 0.523938 0.114509 0.320139 0.318337C0.11634 0.522165 0.00184703 0.798614 0.00184703 1.08687C0.00184703 1.37513 0.11634 1.65158 0.320139 1.8554L4.97397 6.49908L0.320139 11.1427C0.218698 11.2434 0.138182 11.3631 0.0832357 11.495C0.0282893 11.6269 0 11.7684 0 11.9113C0 12.0542 0.0282893 12.1957 0.0832357 12.3276C0.138182 12.4595 0.218698 12.5792 0.320139 12.6798C0.420751 12.7813 0.540454 12.8618 0.67234 12.9168C0.804227 12.9717 0.945688 13 1.08856 13C1.23144 13 1.3729 12.9717 1.50479 12.9168C1.63667 12.8618 1.75637 12.7813 1.85699 12.6798L6.5 8.02532L11.143 12.6798C11.2436 12.7813 11.3633 12.8618 11.4952 12.9168C11.6271 12.9717 11.7686 13 11.9114 13C12.0543 13 12.1958 12.9717 12.3277 12.9168C12.4595 12.8618 12.5792 12.7813 12.6799 12.6798C12.7813 12.5792 12.8618 12.4595 12.9168 12.3276C12.9717 12.1957 13 12.0542 13 11.9113C13 11.7684 12.9717 11.6269 12.9168 11.495C12.8618 11.3631 12.7813 11.2434 12.6799 11.1427L8.02602 6.49908Z" fill="#A6A6A6"/>
			</svg>
		</div>
	</div>
</div>

<script>
	document.addEventListener("DOMContentLoaded", function() {
		$('.owl-carousel').owlCarousel({
			// autoplay: true,
			margin: 21,
			dots: false,
			loop: true,
      navText: ['<span><svg width="17" height="32" viewBox="0 0 17 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.358665 14.8749L14.9179 0.355957C15.3949 -0.119461 16.1672 -0.118661 16.6434 0.358417C17.1193 0.835433 17.1181 1.60816 16.641 2.08395L2.94835 15.7388L16.6415 29.3935C17.1185 29.8694 17.1197 30.6416 16.6439 31.1187C16.4052 31.3578 16.0925 31.4774 15.7797 31.4774C15.4678 31.4774 15.1563 31.3586 14.918 31.1211L0.358665 16.6025C0.128918 16.374 -3.8147e-06 16.0629 -3.8147e-06 15.7388C-3.8147e-06 15.4146 0.129287 15.1039 0.358665 14.8749Z" /></svg></span>', '<span><svg width="17" height="32" viewBox="0 0 17 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.4471 14.7013L2.05779 0.351802C1.58634 -0.118066 0.82306 -0.117276 0.352402 0.354232C-0.117891 0.82568 -0.116675 1.58939 0.354833 2.05962L13.8876 15.555L0.354346 29.0504C-0.117101 29.5207 -0.118316 30.2839 0.351916 30.7554C0.587852 30.9918 0.896946 31.1099 1.20604 31.1099C1.51434 31.1099 1.82222 30.9925 2.05773 30.7578L16.4471 16.4087C16.6741 16.1828 16.8015 15.8754 16.8015 15.555C16.8015 15.2347 16.6738 14.9276 16.4471 14.7013Z" /></svg></span>'],
      nav: true,
			responsive : {
				0 : {
          items: 1.2,
          stagePadding: 0,
				},
				360 : {
					items: 1,
          stagePadding: 36.5,
				},
				680 : {
					items: 2,
          stagePadding: 71.5,
				},
				1000 : {
					items: 3,
					stagePadding: 45.5,
				},
				1320 : {
				  items: 4,
					loop: false,
				},
			}
		});
	});
</script>
<?php
get_footer();
