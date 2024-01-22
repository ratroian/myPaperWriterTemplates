<?php
/**
 * Template Name: Main Page
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
?>

<div class="main-search">
	<div class="container search-inner">
		<div class="search-content">
			<h1 class="search-title">Best Research Paper Samples That Will Inspire You</h1>
	    <p class="search-subtitle h6">Read research paper, term paper and essay samples written by our professional writers and feel free to use them as a source of inspiration and ideas for your own academic work.</p>
			<div class="search-search">
				<?php get_search_form() ?>
			</div>
		</div>
		<div class="search-img">
		</div>
  </div>
</div>
</div>
</div>

<div class="topics">
	<div class="container">
		<div class="sample-categories">
			<div id="sample-categories-button" class="active block-title h2">View Topics</div>
			<div id="essay-categories-button" class="block-title h2">View Essay Types</div>
		</div>
		<div class="topics-items-wrapper">
			<ul id="sample-categories" class="samples-items topics-items active">
<?php
$args = array(
'orderby' => 'slug',
'parent' => 0,
'title_li' => ''
);
$categories = wp_list_categories( $args );
foreach ( $categories as $category ) {
echo '<a href="' . get_category_link( $category->term_id ) . '" rel="bookmark"><i class="ss-icon" aria-hidden="true">' . $category->name . '</i>' . '' . $category->description . '</a>';
}
?>
</ul>
<ul id="essay-categories" class="essays-items topics-items">
	<?php
	$args = array(
	'orderby' => 'slug',
	'parent' => 0,
	'title_li' => '',
	'include' => '112, 99, 105, 107, 113, 106, 108, 104, 101, 102, 111, 116, 115, 103, 114, 110, 109, 117, 136, 137, 138'
	);
	$categories = wp_list_categories( $args );
	foreach ( $categories as $category ) {
	echo '<a href="' . get_category_link( $category->term_id ) . '" rel="bookmark"><i class="ss-icon" aria-hidden="true">' . $category->name . '</i>' . '' . $category->description . '</a>';
	}
	?>
	</ul>
		</div>
	</div>
</div>

<div class="last-added">
	<div class="container">
		<div class="block-title h2">Last Added</div>
		<div class="last-added-items">

		<?php
		if ( have_posts() ) :

			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/last-post', get_post_type() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</div>
</div>
</div>

<div class="category-content">
 <div class="category-content-inner">
	 <h2>Best Research Paper Examples</h2>
<p>When asked to write an essay, a term paper, or a research paper for the first time, many students feel intimated. This feeling is normal for freshmen and final-year students. A good way to overcome this feeling is to use paper or essay samples as your writing guide. We understand the predicaments of many students when required to write papers. Our goal is to make completing academic writing tasks easy. </p>
<p>We offer free examples of essays and research papers that students can use at all academic levels. Our database comprises of many sample essay papers, term papers, and research paper samples that you can read for free. But, don’t just copy and paste our samples for your own sake. </p>
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
<p>Use the information from the research paper sample to write your paper or essay. It’s that simple, and our website is accessible anytime and from any location. You can also get in touch with us for more information by giving us a toll-free call or initiating an online chat conversation. Go ahead and use our sample papers and essays to improve your academic writing skills! </p>
 </div>
 <button type="button" class="read-full">Read Full</button>
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
