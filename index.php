<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mypaperwriter
 */

get_header();

add_filter('wp_trim_words', 'highlight_results');
add_filter('the_excerpt', 'highlight_results');
add_filter('the_title', 'highlight_results');
?>

<div class="main-search">
	<div class="container search-inner">
		<div class="search-content">
			<h1 class="search-title">Best Research Paper Samples That Will Inspire You</h1>
	    <p class="search-subtitle">Read research paper, term paper and essay samples written by our professional writers and feel free to use them as a source of inspiration and ideas for your own academic work.</p>
			<div class="search-search">
				<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
			</div>
		</div>
		<!-- <div class="search-img">
		</div> -->
  </div>
  <svg id="search-bg--left" class="search-bg search-bg--left" viewBox="0 0 209 500" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="search-bg__item move-right" opacity="0.5" d="M1 448C73.3493 448 132 389.349 132 317C132 244.651 73.3493 186 1 186C-71.3493 186 -130 244.651 -130 317C-130 389.349 -71.3493 448 1 448Z" stroke="#7B7577" stroke-width="3" /><path class="search-bg__item up-right" d="M48.2578 118L163.516 233.258L48.2578 348.517L-67.0006 233.258L48.2578 118Z" fill="#F4BABF" /><path class="search-bg__item up-right" d="M119 106H169V156H119V106Z" fill="#F4ECA8" /><g id="triangle" class="search-bg__item down-right"><path d="M39.2102 281.261L52.4205 295L26 295L39.2102 281.261Z" fill="#757072" /><path d="M90.9915 281.261L104.202 295L77.7812 295L90.9915 281.261Z" fill="#757072" /><path d="M143.835 281.261L157.045 295L130.625 295L143.835 281.261Z" fill="#757072" /><path d="M195.62 281.261L208.831 295L182.41 295L195.62 281.261Z" fill="#757072" /><path d="M65.6282 254.839L78.8384 268.578L52.418 268.578L65.6282 254.839Z" fill="#757072" /><path d="M118.472 254.839L131.682 268.578L105.262 268.578L118.472 254.839Z" fill="#757072" /><path d="M170.253 254.839L183.463 268.578L157.043 268.578L170.253 254.839Z" fill="#757072" /><path d="M92.054 228.422L105.264 242.16L78.8438 242.16L92.054 228.422Z" fill="#757072" /><path d="M143.835 228.422L157.045 242.16L130.625 242.16L143.835 228.422Z" fill="#757072" /><path d="M118.472 202L131.682 215.739L105.262 215.739L118.472 202Z" fill="#757072" /></g></svg>

  <svg id="search-bg--right" class="search-bg search-bg--right" viewBox="0 0 278 500" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="search-bg__item--right up-left" opacity="0.5" d="M233 270C360.578 270 464 166.578 464 39C464 -88.5778 360.578 -192 233 -192C105.422 -192 2 -88.5778 2 39C2 166.578 105.422 270 233 270Z" stroke="#7B7577" stroke-width="3" /><path class="search-bg__item--right down-left" d="M214.5 474C303.142 474 375 402.142 375 313.5C375 224.858 303.142 153 214.5 153C125.858 153 54 224.858 54 313.5C54 402.142 125.858 474 214.5 474Z" fill="#F4ECA8" /><g id="lines" ><path class="search-bg__item--right move-left" d="M281 325L151 325L151 314L281 314L281 325Z" fill="white" /><path class="search-bg__item--right move-left" d="M281 366L151 366L151 355L281 355L281 366Z" fill="white" /><path class="search-bg__item--right move-left" d="M281 407L151 407L151 396L281 396L281 407Z" fill="white" /></g><g id="pencil-right" class="search-bg__item--right up-left"><path d="M138.101 303.7L108.101 280.4L160.801 212.4L190.801 235.7L138.101 303.7Z" fill="#D98C93" /><path d="M180.702 229.3L150.702 206L203.402 138L233.402 161.3L180.702 229.3Z" fill="#F4BABF" /><path d="M94.0031 313.898L98.5031 271.698L133.703 298.998L94.0031 313.898Z" fill="#757072" /><path d="M94.0033 314.5C94.0033 314.5 94.6032 309.3 95.3032 302.5C95.4032 301.7 95.5032 300.8 95.6032 299.9C95.6032 300.1 108.003 309.3 108.003 309.2C109.503 308.4 94.0033 314.5 94.0033 314.5Z" fill="#757072" /></g></svg>
</div>
</div>
</div>

<div class="topics">
	<div class="container">
		<div class="sample-categories">
			<?php echo do_shortcode('[a-z-listing display="terms" taxonomy="category"]'); ?>
		</div>
	</div>
</div>

<div class="category-content">
 <div class="category-content-inner">
	 <h2>Best Research Paper Examples</h2>
<p>When asked to write an essay, a term paper, or a research paper for the first time, many students feel intimated. This feeling is normal for freshmen and final-year students. A good way to overcome this feeling is to use paper or essay samples as your writing guide. We understand the predicaments of many students when required to write papers. Our goal is to make completing academic writing tasks easy.<button type="button" class="read-more">Read More</button></p>
<div><p>We offer free examples of essays and research papers that students can use at all academic levels. Our database comprises of many sample essay papers, term papers, and research paper samples that you can read for free. But, don’t just copy and paste our samples for your own sake. </p>
<h3>Use Free Research Essays and Paper Samples to Complete Your Assignment</h3>
<p>Our sample papers and essays are very important to students that want to complete writing assignments efficiently and timely. Whether you are in high school, college, or university, we have a perfect sample for you. The campus library might have examples of term papers and essays which are work of other professionals and lecturers in your study field. </p>
<p>Some college and university departments keep the work of their previous students which includes term paper, research paper, and essay examples. You can examine them before you start writing your paper or essay for inspiration. However, if there is no library of such work in your university or college, don’t panic. Use our collection of free essay samples and research paper samples as your writing guides. </p>
<p>By reading our samples, you will get ideas on how to choose a topic for your paper or essay, outline your paper and formulate a thesis statement. These samples provide useful ideas for writing the introduction and body of your paper. You also know how to transition from one section of the paper to another. We have an example for you regardless of your study field or academic level. </p>
<h3>Professionally Written Examples of Research Papers and Essays</h3>
<p>The best way to become a professional is to learn from experts. Our essays and papers samples are written by experienced professional writers. These are specialists with bachelor degrees and master degrees in their respective fields. </p>
<p>What’s more, our writers use different, reliable sources to write every sample research paper or essay. That means the information you get from these papers is genuine, authentic, and credible. Feel free to use any of our samples as your source of ideas and inspiration when writing your papers and essays. We believe that no student should struggle to complete any writing task. Use our samples to simplify your academic writing assignments. </p>
<h3>How to Use Any of Our Free Essay or Research Paper Example</h3>
<p>There are many sample papers and essays in different formats, academic levels, and disciplines published on our website. Each research paper example or essay has a title and a list of references. To use any of these samples, simply click on it to read for free. </p>
<p>Our samples are meant to set you apart by helping you write superior papers and essays. However, you should not copy and past or present our samples as your work because that amounts to plagiarism. Plagiarism is a serious academic offense that can lead to your expulsion from college or university. </p>
<p>Therefore, use our samples as sources of inspiration, insights, ideas, or information to write your essays. You can also use them to practice and improve your writing and organizational skills, learn to make and present arguments, as well as, choosing the right vocabularies. </p>
<p>Use the information from the research paper sample to write your paper or essay. It’s that simple, and our website is accessible anytime and from any location. You can also get in touch with us for more information by giving us a toll-free call or initiating an online chat conversation. Go ahead and use our sample papers and essays to improve your academic writing skills! </p></div>
 </div>
</div>

<div class="most-popular">
	<div class="container">
		<div class="block-title h2">Most Popular</div>
		<div class="most-popular-items">
		<?php
		get_template_part( 'template-parts/most-popular');
		?>
	</div>
</div>
</div>

<div class="last-added">
		<div class="block-title h2">Last Added</div>
			<div class="last-added-items">
				<div class="owl-last-added">
					<?php
					$args = array(
					'posts_per_page' => 9,
					'orderby' => ''
					);
					$query = new WP_Query( $args );
					if ( $query-> have_posts() ) :

						while ( $query->have_posts() ) :
							$query->the_post();
							get_template_part( 'template-parts/last-post', get_post_type() );
						endwhile;
					else :
						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
			</div>
		</div>
</div>

<!--
<?php
$recent_posts = wp_get_recent_posts();
foreach( $recent_posts as $recent ){
echo '<div class="last-added-item">' .
 '<a class="h5" href="' . get_permalink($recent["ID"]) . '">'.$recent["post_title"].'</a>'.
 '<p>'.wp_trim_words($recent["post_content"], 20, '...' ).'</p>'.
 '</div>';
}
?>
-->

<?php
get_sidebar();
get_footer();
