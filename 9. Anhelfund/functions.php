<?php
/**
 * Anhelfund functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Anhelfund
 */

 //ACF Setting
 if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Footer');	
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}
//Register_menu
add_action( 'after_setup_theme', 'headerMenu');
function headerMenu(){
register_nav_menu( 'headerMenu', 'Главное меню' );
}

add_action( 'after_setup_theme', 'headerSubMenu');
function headerSubMenu(){
register_nav_menu( 'headerSubMenu', 'Главное подменю' );
}

add_action( 'after_setup_theme', 'headerSubMenuMob');
function headerSubMenuMob(){
register_nav_menu( 'headerSubMenuMob', 'Главное подменю-мобильное' );
}

add_action( 'after_setup_theme', 'footerMenu1');
function footerMenu1(){
register_nav_menu( 'footerMenu1', 'Футер 1 колонка' );
}
add_action( 'after_setup_theme', 'footerMenu2');
function footerMenu2(){
register_nav_menu( 'footerMenu2', 'Футер 2 колонка' );
}
add_action( 'after_setup_theme', 'footerMenu3');
function footerMenu3(){
register_nav_menu( 'footerMenu3', 'Футер 3 колонка' );
}

/* Отключаем добавление тегов <p></p> к записям при выводе */ 
remove_filter( 'the_content', 'wpautop' );

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/* WooCommerce Password Strength */
add_filter( 'woocommerce_min_password_strength', 'example_woocommerce_min_password_strength' );
function example_woocommerce_min_password_strength( $strength ) {
    return 3;
}
/* Add to cart */
add_filter( 'woocommerce_product_single_add_to_cart_text', 'tb_woo_custom_cart_button_text' );
add_filter( 'woocommerce_product_add_to_cart_text', 'tb_woo_custom_cart_button_text' );   
function tb_woo_custom_cart_button_text() {
        return __( 'Купить подписку', 'woocommerce' );
}

add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('book', array(
		'labels'             => array(
			'name'               => 'Книги', // Основное название типа записи
			'singular_name'      => 'Книга', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую книгу',
			'edit_item'          => 'Редактировать книгу',
			'new_item'           => 'Новая книга',
			'view_item'          => 'Посмотреть книгу',
			'search_items'       => 'Найти книгу',
			'not_found'          => 'Книг не найдено',
			'not_found_in_trash' => 'В корзине книг не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Книги'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
	) );
}

if ( ! function_exists( 'anhelfund_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function anhelfund_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Anhelfund, use a find and replace
		 * to change 'anhelfund' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'anhelfund', get_template_directory() . '/languages' );

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
				'anhelfund_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'anhelfund_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function anhelfund_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'anhelfund_content_width', 640 );
}
add_action( 'after_setup_theme', 'anhelfund_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function anhelfund_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'anhelfund' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'anhelfund' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'anhelfund_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function anhelfund_scripts() {
	wp_enqueue_style( 'anhelfund-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'anhelfund-style', 'rtl', 'replace' );

	wp_enqueue_script( 'anhelfund-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'anhelfund_scripts' );

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

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
