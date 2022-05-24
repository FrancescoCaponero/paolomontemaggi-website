<?php
/**
 * paolomontemaggi-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package paolomontemaggi-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function paolomontemaggi_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on paolomontemaggi-theme, use a find and replace
		* to change 'paolomontemaggi-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'paolomontemaggi-theme', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'paolomontemaggi-theme' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'paolomontemaggi_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'paolomontemaggi_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function paolomontemaggi_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'paolomontemaggi_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'paolomontemaggi_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function paolomontemaggi_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'paolomontemaggi-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'paolomontemaggi-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'paolomontemaggi_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */



function paolomontemaggi_theme_scripts() {
	wp_enqueue_script('owl-carousel', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), '1', true);
	wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri() . '/js/assets/owl.theme.default.min.css' );
	wp_enqueue_style( 'owl-carousel-min', get_template_directory_uri() . '/js/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'paolomontemaggi-theme-style', get_stylesheet_uri(), array(), time() );	
	wp_enqueue_script( 'paolomontemaggi-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), time(), true );
	wp_register_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js');
	wp_register_script('ScrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js');

	wp_enqueue_script( 'paolomontemaggi-theme-script', get_template_directory_uri() . '/js/script.js', array('jquery', 'gsap', 'ScrollTrigger'), time(), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'paolomontemaggi_theme_scripts' );

//require blocks

$dir = __DIR__ . '/blocks';

foreach (glob("$dir/*") as $path) {
	if (preg_match('/\.php$/', $path)) {
		require_once $path;
	}
}




