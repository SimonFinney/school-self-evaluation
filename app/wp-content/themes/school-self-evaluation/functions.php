<?php
/**
 * School Self-Evaluation functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package School_Self-Evaluation
 */

if ( ! function_exists( 'school_self_evaluation_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function school_self_evaluation_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on School Self-Evaluation, use a find and replace
	 * to change 'school-self-evaluation' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'school-self-evaluation', get_template_directory() . '/languages' );

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
	register_nav_menus(
    array(
		    'navigation' => esc_html__('Navigation'),
        'language' => esc_html__('Language')
	  )
  );

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

}
endif;
add_action( 'after_setup_theme', 'school_self_evaluation_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function school_self_evaluation_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'school_self_evaluation_content_width', 640 );
}
add_action( 'after_setup_theme', 'school_self_evaluation_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function school_self_evaluation_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'school-self-evaluation' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'school-self-evaluation' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'school_self_evaluation_widgets_init' );


function school_self_evaluation_posts_link_attributes() {
  return 'class="search-results__nav__link--next"';
}


function school_self_evaluation_search_excerpt_highlight() {
  $the_excerpt = get_the_excerpt();
  $search_query = implode('|', explode(' ', get_search_query()));
  $the_excerpt = preg_replace('/(' . $search_query . ')/iu', '<strong>\0</strong>', $the_excerpt);

  echo $the_excerpt;
}


/**
 * Enqueue scripts and styles.
 */
function school_self_evaluation_scripts() {
	wp_enqueue_style( 'school-self-evaluation-style', get_stylesheet_uri() );

  wp_enqueue_script( 'school-self-evaluation-main', get_template_directory_uri() . '/dist/js/bundle.js', array(), '20151215', true );

  wp_enqueue_script( 'school-self-evaluation-twitter-widget', 'https://platform.twitter.com/widgets.js', array(), '20151215', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

  wp_deregister_script('jquery');
}


function school_self_evaluation_insert_formats($init_array) {
	$style_formats = array(
		array(
			'title' => 'Section',
			'block' => 'section',
			'classes' => 'section',
      'wrapper' => true,
		),
	);

	$init_array['style_formats'] = json_encode($style_formats);
	return $init_array;
}

add_filter( 'tiny_mce_before_init', 'school_self_evaluation_insert_formats' );


function school_self_evaluation_mce_buttons($buttons) {
  array_unshift($buttons, 'styleselect');
  return $buttons;
}


add_filter('mce_buttons_2', 'school_self_evaluation_mce_buttons');

add_action( 'wp_enqueue_scripts', 'school_self_evaluation_scripts' );

add_filter('next_posts_link_attributes', 'school_self_evaluation_posts_link_attributes');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
