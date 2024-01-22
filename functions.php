<?php
/**
 * mypaperwriter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mypaperwriter
 */


if ( ! function_exists( 'mypaperwriter_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mypaperwriter_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mypaperwriter, use a find and replace
		 * to change 'mypaperwriter' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mypaperwriter', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'mypaperwriter' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'mypaperwriter_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'mypaperwriter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mypaperwriter_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mypaperwriter_content_width', 640 );
}
add_action( 'after_setup_theme', 'mypaperwriter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mypaperwriter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__('Text Under Category'),
		'id'            => 'under-category',
		'description'   => esc_html__( 'Add widgets here.', 'mypaperwriter' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mypaperwriter_widgets_init' );


function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Custom', 'your-theme-domain' ),
            'id' => 'sidebar-clouds',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );

/**
 * Enqueue scripts and styles.
 */
function mypaperwriter_scripts() {
	wp_enqueue_style( 'mypaperwriter-style', get_stylesheet_uri() );

    wp_enqueue_style( 'seo-style', get_template_directory_uri() . '/seo.min.css' );

	wp_enqueue_style( 'jquery-ui-style', get_template_directory_uri() . '/jquery-ui.min.css' );

	wp_enqueue_script( 'mypaperwriter-navigation', get_template_directory_uri() . '/js/navigation.min.js', array(), '20151215', true );

	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), '20151215', true );

	wp_enqueue_script( 'jquery-ui-script', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mypaperwriter_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
  * Change search value
	*/
add_filter('get_search_form', 'my_search_form_text');

function my_search_form_text($text) {
     $text = str_replace('value="Search"', 'value=""', $text); //set as value the text you want
     return $text;
}

/**
  * Delete word "category"
	*/
function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );

/**
  * Breadcrumbs
	*/
function the_breadcrumb()
{
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = ''; // delimiter between crumbs
    $home = 'Samples'; // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<span class="current">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb
    global $post;
    $homeLink = get_bloginfo('url');
    if (is_home() || is_front_page()) {
        if ($showOnHome == 1) {
            echo '<div class="crumbs"><div class="container"><div class="crumbs__inner"><a href="' . $homeLink . '">' . $home . '</a></div></div></div>';
        }
    } else {
        echo '<div class="crumbs"><div class="container"><div class="crumbs__inner"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
        if (is_category()) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                echo get_category_parents($thisCat->parent, true, ' ' . $delimiter . ' ');
            }
            echo $before . '"' . single_cat_title('', false) . '"' . $after;
        } elseif (is_search()) {
            echo $before . '"' . get_search_query() . '"' . $after;
        } elseif (is_day()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
                if ($showCurrent == 1) {
                    echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
                }
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, true, ' ' . $delimiter . ' ');
                if ($showCurrent == 0) {
                    $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                }
                echo $cats;
                if ($showCurrent == 1) {
                    echo $before . get_the_title() . $after;
                }
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif (is_attachment()) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo get_category_parents($cat, true, ' ' . $delimiter . ' ');
            echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_page() && !$post->post_parent) {
            if ($showCurrent == 1) {
                echo $before . get_the_title() . $after;
            }
        } elseif (is_page() && $post->post_parent) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo $breadcrumbs[$i];
                if ($i != count($breadcrumbs)-1) {
                    echo ' ' . $delimiter . ' ';
                }
            }
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_tag()) {
            echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . 'Articles posted by ' . $userdata->display_name . $after;
        } elseif (is_404()) {
            echo $before . 'Error 404' . $after;
        }
        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ' (';
            }
            echo __('Page') . ' ' . get_query_var('paged');
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ')';
            }
        }
        echo '</div></div></div>';
    }
}

/**
  * Add slash to homepage link in breadcrumbs
	*/
function permalink_trailingslashit($link) {return trailingslashit($link);}
add_filter('home_url', 'permalink_trailingslashit');

/**
  * Change search url
	*/
function wpb_change_search_url() {
    if ( is_search() && ! empty( $_GET['s'] ) ) {
        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
        exit();
    }
}
add_action( 'template_redirect', 'wpb_change_search_url' );




/**
  * Banner after specific para
	*/
add_filter( 'the_content', 'wpse_ad_content' );
function wpse_ad_content( $content ) {
        if( !is_single() )
            return $content;
            $paragraphAfter = 1;
            $content = explode ( "</p>", $content );
            $new_content = '';
                for ( $i = 0; $i < count ( $content ); $i ++ ) {
                    if ( $i == $paragraphAfter ) {
                    $new_content .= '<div class="search-banner"><div class="wrap-banner"><div class="inner-title">Your 20% discount here!</div><p>Use your promo and get a custom paper on <br><b>'. get_the_title() .'</b></p><a class="order" href="/manage/signup">Order Now</a></div><div class="promo">Promocode: <span>SAMPLES20</span><svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_441_2646)"> <path d="M9.99998 2.50098H1.5C0.671572 2.50098 0 3.17255 0 4.00098V12.501C0 13.3294 0.671572 14.001 1.5 14.001H9.99998C10.8284 14.001 11.5 13.3294 11.5 12.501V4.00098C11.5 3.17255 10.8284 2.50098 9.99998 2.50098Z" fill="white"/> <path d="M12.5 9.68561e-10H3.5C2.67605 -2.92959e-05 2.00633 0.66457 2 1.48849C2 1.4925 2 1.49599 2 1.5H10C11.38 1.50164 12.4984 2.61996 12.5 3.99999V12C12.504 12 12.5075 12 12.5115 12C13.3354 11.9937 14 11.3239 14 10.5V1.5C14 0.671572 13.3284 9.68561e-10 12.5 9.68561e-10Z" fill="white"/> </g> <defs> <clipPath id="clip0_441_2646"> <rect width="14" height="14" fill="white"/> </clipPath> </defs> </svg></div></div>';
                    }
            $new_content .= $content[$i] . "</p>";
            }
            return $new_content;
    }


add_filter( 'single_template', function( $template ) {
    global $post;
    if ( $post->post_type === 'event' ) {
        $locate_template = locate_template( "single-event-{$post->post_name}.php" );
        if ( ! empty( $locate_template ) ) {
            $template = $locate_template;
        }
    }
    return $template;
} );

/**
  * Words counter
    */
function bac_post_word_count()
{
    global $post;
    //Variable: Additional characters which will be considered as a 'word'
    $char_list = ''; /** MODIFY IF YOU LIKE.  Add characters inside the single quotes. **/
    //$char_list = '0123456789'; /** If you want to count numbers as 'words' **/
    //$char_list = '&@'; /** If you want count certain symbols as 'words' **/
    echo str_word_count(strip_tags($post->post_content), 0, $char_list);
}


/**
  * Words counter
    */
function bac_post_pages_count()
{
    global $post;
    //Variable: Additional characters which will be considered as a 'word'
    $char_list = ''; /** MODIFY IF YOU LIKE.  Add characters inside the single quotes. **/
        $pages = 1;
    //$char_list = '0123456789'; /** If you want to count numbers as 'words' **/
    //$char_list = '&@'; /** If you want count certain symbols as 'words' **/
    $result = str_word_count(strip_tags($post->post_content), 0, $char_list);
        if($result >= 540) {
            $pages = 2;
        }
        if($result >= 0) {
            $pages = 3;
        }
        if($result >= 810) {
            $pages = 4;
        }
        if($result >= 1080) {
            $pages = 5;
        }
        if($result >= 1350) {
            $pages = 6;
        }
        if($result >= 1620) {
            $pages = 7;
        }
        if($result >= 1890) {
            $pages = 8;
        }
        if($result >= 2160) {
            $pages = 9;
        }
        if($result >= 2430) {
            $pages = 10;
        }
        echo $pages;
}


/**
  * Views counter
    */
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}


/**
  * Next and previous categories from current
    */

function prevNextCatsInPost() {
	$category = get_the_category();
	$cat = $category[0];
	echo '<a href="'.get_category_link( $cat->term_id-1 ).'"id="cloud-block" class="cloud">'.get_cat_name( $cat->term_id-1 ).'</a>';
	echo '<a href="'.get_category_link( $cat->term_id-2 ).'"id="cloud-block" class="cloud">'.get_cat_name( $cat->term_id-2 ).'</a>';
	echo '<a href="'.get_category_link( $cat->term_id-3 ).'"id="cloud-block" class="cloud">'.get_cat_name( $cat->term_id-3 ).'</a>';
	echo '<a href="'.get_category_link( $cat->term_id-4 ).'"id="cloud-block" class="cloud">'.get_cat_name( $cat->term_id-4 ).'</a>';
	echo '<a href="'.get_category_link( $cat->term_id-5 ).'"id="cloud-block" class="cloud">'.get_cat_name( $cat->term_id-5 ).'</a>';
	echo '<a href="'.get_category_link( $cat->term_id+1 ).'"id="cloud-block" class="cloud">'.get_cat_name( $cat->term_id+1 ).'</a>';
	echo '<a href="'.get_category_link( $cat->term_id+2 ).'"id="cloud-block" class="cloud">'.get_cat_name( $cat->term_id+2 ).'</a>';
	echo '<a href="'.get_category_link( $cat->term_id+3 ).'"id="cloud-block" class="cloud">'.get_cat_name( $cat->term_id+3 ).'</a>';
	echo '<a href="'.get_category_link( $cat->term_id+4 ).'"id="cloud-block" class="cloud">'.get_cat_name( $cat->term_id+4 ).'</a>';
	echo '<a href="'.get_category_link( $cat->term_id+5 ).'"id="cloud-block" class="cloud">'.get_cat_name( $cat->term_id+5 ).'</a>';
}

function pnCats(){
$this_category = get_queried_object();
$categories = get_categories();

foreach( $categories as $position => $cat ) :
    if( $this_category->term_id == $cat->term_id ) :
        $next1_cat = $position + 1;
        $next2_cat = $position + 2;
        $next3_cat = $position + 3;
        $next4_cat = $position + 4;
        $next5_cat = $position + 5;
        $next6_cat = $position + 6;
        $next7_cat = $position + 7;
        $next8_cat = $position + 8;
        $next9_cat = $position + 9;
        $next10_cat = $position + 10;
        $prev1_cat = $position - 1;
        $prev2_cat = $position - 2;
        $prev3_cat = $position - 3;
        $prev4_cat = $position - 4;
        $prev5_cat = $position - 5;
        $prev6_cat = $position - 6;
        $prev7_cat = $position - 7;
        $prev8_cat = $position - 8;
        $prev9_cat = $position - 9;
        $prev10_cat = $position - 10;
        break;
    endif;
endforeach;

$next1_cat = $next1_cat == count($categories) ? 0 : $next1_cat;
$next2_cat = $next2_cat == count($categories) ? +1 : $next2_cat;
$next3_cat = $next3_cat == count($categories) ? +2 : $next3_cat;
$next4_cat = $next4_cat == count($categories) ? +3 : $next4_cat;
$next5_cat = $next5_cat == count($categories) ? +4 : $next5_cat;
$next6_cat = $next6_cat == count($categories) ?+5 : $next6_cat;
$next7_cat = $next7_cat == count($categories) ? +6 : $next7_cat;
$next8_cat = $next8_cat == count($categories) ? +7 : $next8_cat;
$next9_cat = $next9_cat == count($categories) ? +8 : $next9_cat;
$next10_cat = $next10_cat == count($categories) ? +9 : $next10_cat;
$prev1_cat = $prev1_cat < 0 ? count($categories) - 1 : $prev1_cat;
$prev2_cat = $prev2_cat < 0 ? count($categories) - 2 : $prev2_cat;
$prev3_cat = $prev3_cat < 0 ? count($categories) - 3 : $prev3_cat;
$prev4_cat = $prev4_cat < 0 ? count($categories) - 4 : $prev4_cat;
$prev5_cat = $prev5_cat < 0 ? count($categories) - 5 : $prev5_cat;
$prev6_cat = $prev6_cat < 0 ? count($categories) - 6 : $prev6_cat;
$prev7_cat = $prev7_cat < 0 ? count($categories) - 7 : $prev7_cat;
$prev8_cat = $prev8_cat < 0 ? count($categories) - 8 : $prev8_cat;
$prev9_cat = $prev9_cat < 0 ? count($categories) - 9 : $prev9_cat;
$prev10_cat = $prev10_cat < 0 ? count($categories) - 10 : $prev10_cat;

if($prev1_cat < $next1_cat) {
	echo '<a href="'.get_term_link( $categories[$prev1_cat] ).'" class="cloud">'.esc_html($categories[$prev1_cat]->name).'</a>';
} else {
	echo "";
}
if($prev2_cat < $prev1_cat) {
	echo '<a href="'.get_term_link( $categories[$prev2_cat] ).'" class="cloud">'.esc_html($categories[$prev2_cat]->name).'</a>';
} else {
	echo "";
}
if($prev3_cat < $prev2_cat) {
	echo '<a href="'.get_term_link( $categories[$prev3_cat] ).'" class="cloud">'.esc_html($categories[$prev3_cat]->name).'</a>';
} else {
	echo "";
}
if($prev4_cat < $prev3_cat) {
	echo '<a href="'.get_term_link( $categories[$prev4_cat] ).'" class="cloud">'.esc_html($categories[$prev4_cat]->name).'</a>';
} else {
	echo "";
}
if($prev5_cat < $prev4_cat) {
	echo '<a href="'.get_term_link( $categories[$prev5_cat] ).'" class="cloud">'.esc_html($categories[$prev5_cat]->name).'</a>';
} else {
	echo "";
}
if($prev6_cat < $prev5_cat) {
	echo '<a href="'.get_term_link( $categories[$prev6_cat] ).'" class="cloud">'.esc_html($categories[$prev6_cat]->name).'</a>';
} else {
	echo "";
}
if($prev7_cat < $prev6_cat) {
	echo '<a href="'.get_term_link( $categories[$prev7_cat] ).'" class="cloud">'.esc_html($categories[$prev7_cat]->name).'</a>';
} else {
	echo "";
}
if($prev8_cat < $prev7_cat) {
	echo '<a href="'.get_term_link( $categories[$prev8_cat] ).'" class="cloud">'.esc_html($categories[$prev8_cat]->name).'</a>';
} else {
	echo "";
}
if($prev9_cat < $prev8_cat) {
	echo '<a href="'.get_term_link( $categories[$prev9_cat] ).'" class="cloud">'.esc_html($categories[$prev9_cat]->name).'</a>';
} else {
	echo "";
}
if($prev10_cat <= $prev9_cat) {
	echo '<a href="'.get_term_link( $categories[$prev10_cat] ).'" class="cloud">'.esc_html($categories[$prev10_cat]->name).'</a>';
} else {
	echo "";
}
if($next1_cat >= 0) {
	echo '<a href="'.get_term_link( $categories[$next1_cat] ).'" class="cloud">'.esc_html($categories[$next1_cat]->name).'</a>';
} else {
	echo "";
}
if($next2_cat <= 1) {
	echo '<a href="'.get_term_link( $categories[$next2_cat] ).'" class="cloud">'.esc_html($categories[$next2_cat]->name).'</a>';
} else {
	echo "";
}
if($next3_cat <= 2) {
	echo '<a href="'.get_term_link( $categories[$next3_cat] ).'" class="cloud">'.esc_html($categories[$next3_cat]->name).'</a>';
} else {
	echo "";
}
if($next4_cat <= 3) {
	echo '<a href="'.get_term_link( $categories[$next4_cat] ).'" class="cloud">'.esc_html($categories[$next4_cat]->name).'</a>';
} else {
	echo "";
}
if($next5_cat <= 4) {
	echo '<a href="'.get_term_link( $categories[$next5_cat] ).'" class="cloud">'.esc_html($categories[$next5_cat]->name).'</a>';
} else {
	echo "";
}
if($next6_cat <= 5) {
	echo '<a href="'.get_term_link( $categories[$next6_cat] ).'" class="cloud">'.esc_html($categories[$next6_cat]->name).'</a>';
} else {
	echo "";
}
if($next7_cat <= 6) {
	echo '<a href="'.get_term_link( $categories[$next7_cat] ).'" class="cloud">'.esc_html($categories[$next7_cat]->name).'</a>';
} else {
	echo "";
}
if($next8_cat <= 7) {
	echo '<a href="'.get_term_link( $categories[$next8_cat] ).'" class="cloud">'.esc_html($categories[$next8_cat]->name).'</a>';
} else {
	echo "";
}
if($next9_cat <= 8) {
	echo '<a href="'.get_term_link( $categories[$next9_cat] ).'" class="cloud">'.esc_html($categories[$next9_cat]->name).'</a>';
} else {
	echo "";
}
if($next10_cat <= 9) {
	echo '<a href="'.get_term_link( $categories[$next10_cat] ).'" class="cloud">'.esc_html($categories[$next10_cat]->name).'</a>';
} else {
	echo "";
}

}


function wpflask_first_category_of_post() {

    // Categories of post.
    $category = get_the_category();
    if( $category[0] ) :
    ?>

    <span class="first-category">
        <a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>">
            <?php echo esc_html( $category[0]->cat_name ); ?>
        </a>
    </span>

    <?php
    endif;
}

/**
  * Highlight search results
    */
function highlight_results($text){
    if(is_search()){
        $keys = implode('|', explode(' ', get_search_query()));
        $text = preg_replace('/(' . $keys .')/iu', '<span class="search-highlight">\0</span>', $text);
    }
    return $text;
}


function highlight_results_css() {
    ?>
    <style>
    .search-highlight {
        background-color: #fae432;
        font-weight: bold;
        color: #000; }
    </style>
    <?php
}
add_action('wp_head','highlight_results_css');


/**
  * Remove standart jquery
    */
add_filter( 'wp_enqueue_scripts', 'change_default_jquery', PHP_INT_MAX );

function change_default_jquery( ){
    wp_dequeue_script( 'jquery');
    wp_deregister_script( 'jquery');   
}

add_filter( 'rank_math/frontend/canonical', function( $canonical ) {
	if ( is_paged() ) {
			$link = $_SERVER['REQUEST_URI'];
			$arr = explode('/p/', $link,);
			$canonical = home_url($arr[0]. '/');
		}
		return $canonical;
});


/* remove wlwmanifest */
remove_action('wp_head', 'wlwmanifest_link');
/* remove xmlrpc */
add_filter('xmlrpc_enabled', '__return_false');