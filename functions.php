<?php
/**
 * gretong functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gretong
 */

if ( ! function_exists( 'gretong_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gretong_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on gretong, use a find and replace
	 * to change 'gretong' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'gretong', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'gretong' ),
		'menu-cat' => esc_html__( 'category-menu', 'gretong' ),
		'menu-customer' => esc_html__( 'сustom-menu', 'gretong' )
	) );

	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

	function special_nav_class ($classes, $item) {
		if (in_array('current-menu-item', $classes) ){
			$classes[] = 'active ';
		}
		return $classes;
	}

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
	add_theme_support( 'custom-background', apply_filters( 'gretong_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'gretong_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gretong_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gretong_content_width', 640 );
}
add_action( 'after_setup_theme', 'gretong_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gretong_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gretong' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gretong' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gretong_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gretong_scripts() {
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'gretong-grid', get_template_directory_uri() . '/css/grid.css');
	wp_enqueue_style( 'gretong-style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'gretong-woo-style', get_template_directory_uri() . '/css/woocommerce.css');
	wp_enqueue_style( 'gretong-media', get_template_directory_uri() . '/css/media.css');


	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
	wp_register_script( 'jquery1', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js');
	wp_register_style( 'jquery2', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	wp_enqueue_script( 'gretong-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'jquery1' );
	wp_enqueue_script( 'jquery2' );
	wp_enqueue_script( 'gretong-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'gretong-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'loader', get_template_directory_uri() . '/js/loader.js', array(), '20151215', true );
	wp_enqueue_script( 'jquery' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gretong_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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


//// картинки для категории
//add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );
//function woocommerce_category_image() {
//	if ( is_product_category() ){
//		global $wp_query;
//		$cat = $wp_query->get_queried_object();
//		$thumbnail_get_the_category( int $id = false )id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
//		$image = wp_get_attachment_url( $thumbnail_id );
//		if ( $image ) {
//			echo '<img class="category-product-image" src="' . $image . '" alt="'.$cat->name.'" />';
//		}
//	}
//}

add_filter( 'body_class', 'output_product_cat_on_body' );

function output_product_cat_on_body( $classes ) {
	if ( is_singular( 'product' ) ) {
		global $post;

		$terms = get_the_terms( $post->ID, 'product_cat' );

		foreach ( $terms as $term )
			$classes[] = 'category-' . $term->slug;
	}
	return $classes;
}

add_filter( 'body_class', 'output_product_cat_on_body_on_cat' );

function output_product_cat_on_body_on_cat( $classes ) {
	if ( is_product_category() ) {
		global $post;

		$terms = get_the_terms( $post->ID, 'product_cat' );

		foreach ( $terms as $term )
			$classes[] = 'category-boma' . $term->slug;
	}
	return $classes;
}

// archive-page image
//add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );
//
//function woocommerce_category_image() {
//	if ( is_product_category() ){
//		global $wp_query;
//		$cat = $wp_query->get_queried_object();
//		$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
//		$image = wp_get_attachment_url( $thumbnail_id );
//		if ( $image ) {
//			echo '<img src="' . $image . '" alt="' . $cat->name . '" />';
//		}
//	}
//}


/* Custom Shoping Cart in the top */





// ajax cart top
add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment( $fragments )
{
	global $woocommerce;
	ob_start(); ?>

	<a class="cart-contents" >My Cart(<?php echo sprintf ( _n( '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>) : <?php echo WC()->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-contents'] = ob_get_clean();
	return $fragments;
}


// Регистрируем сайдбары
if ( function_exists('register_sidebar') ) {

	register_sidebar(array(
		'name' => 'foo-widget-1',
		'before_widget' => '<article class="article">',
		'before_widget' => '<div class="about-me widget">',
		'before_title' => '<div class="head-title"><h3>',
		'after_title' => '</h3></div>',
		'after_widget' => '</div></article><hr>'
	));
	register_sidebar(array(
		'name' => 'foo-widget-2',
		'before_widget' => '<article class="article">',
		'before_widget' => '<div class="about-me widget">',
		'before_title' => '<div class="head-title"><h3>',
		'after_title' => '</h3></div>',
		'after_widget' => '</div></article><hr>'
	));
	register_sidebar(array(
		'name' => 'foo-widget-3',
		'before_widget' => '<article class="article">',
		'before_widget' => '<div class="about-me widget">',
		'before_title' => '<div class="head-title"><h3>',
		'after_title' => '</h3></div>',
		'after_widget' => '</div></article><hr>'
	));
	register_sidebar(array(
		'name' => 'foo-widget-4',
		'before_widget' => '<article class="article">',
		'before_widget' => '<div class="about-me widget">',
		'before_title' => '<div class="head-title"><h3>',
		'after_title' => '</h3></div>',
		'after_widget' => '</div></article><hr>'
	));

}

// remove "title" in shop-page
function shop_hide_page_title() {
	return false;
}
add_filter( 'woocommerce_show_page_title' , 'shop_hide_page_title' );

