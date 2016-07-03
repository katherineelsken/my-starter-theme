<?php

//* Basic theme supports and setup

if ( ! function_exists( 'kats_starter_theme_setup' ) ) :

	function kats_starter_theme_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );


		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'kats_starter_theme' ),
		) );

		add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'kats_starter_theme_setup' );


//* Widgets

function kats_starter_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'kats_starter_theme' ),
		'id'            => 'sidebar-primary',
		'description'   => esc_html__( 'Add widgets here.', 'kats_starter_theme' ),
		'before_widget' => '<section  class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'kats_starter_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kats_starter_theme_scripts() {
	
	wp_enqueue_style( 'kats_starter_theme-style', get_stylesheet_uri() );

	wp_enqueue_style('main-css',get_template_directory_uri() . '/assets/css/main.css');

	wp_enqueue_script('kats_starter_theme-navigation-js', get_template_directory_uri() . '/assets/responsive-menu.js', true);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kats_starter_theme_scripts' );


//*Template Tags
require get_template_directory() . '/inc/template-tags.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
?>
