<?php

/**
 * Never worry about cache again!
 */

 add_theme_support( 'post-thumbnails' );

function softunit_assets( $hook ) {
	// create my own version codes
	// $my_js_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'js/custom.js' ));
	// $my_css_ver = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'style.css' ));

    $args = array( 
        'in_footer' => true,
        'strategy'  => 'defer',
    );
	
	wp_enqueue_script( 'bootstrap-min-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', $args );
	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/assets/js/jquery-1.12.3.min.js', array(), '1.0.0', $args );
    wp_enqueue_script( 'jquery.magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0.0', $args );
    wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', $args );
    wp_enqueue_script( 'script-js', get_template_directory_uri() . '/assets/js/owl.script.js', array(), '1.0.0', $args );
	
    wp_enqueue_style( 'bootstrap.min-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '1.0.0' );
    wp_enqueue_style( 'ionicons.css', get_template_directory_uri() . '/assets/css/ionicons.css', false, '1.0.0' );
    wp_enqueue_style( 'magnific-popup.css', get_template_directory_uri() . '/assets/css/magnific-popup.css', false, '1.0.0' );
    wp_enqueue_style( 'main.css', get_template_directory_uri() . '/assets/css/main.css', false, '1.0.2' );
    wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri() . '/assets/css/owl.carousel.css', false, '1.0.0' );
    wp_enqueue_style( 'owl.carousel.theme.min.css', get_template_directory_uri() . '/assets/css/owl.carousel.theme.min.css', false, '1.0.0' );

}
add_action( 'wp_enqueue_scripts', 'softunit_assets' );

function my_project_register_nav_menu() {
    register_nav_menus( array(
        'primary_menu'     => __( 'Primary menu', 'softuni' ),
        'popular_services' => __( 'Popular Services', 'softuni' ),
        'important_links'  => __( 'Important Links', 'softuni' ),
        'lates_services'   => __( 'Latest_Services', 'softuni' ),
    ) );
}

add_action('after_setup_theme', 'my_project_register_nav_menu');


function softuni_register_sidebar() {
    register_sidebar( array(
		'id'            => 'footer-1',
		'name'          => __('Footer 01'),
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s" style="list-style: none">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'id'            => 'footer-2',
		'name'          => __('Footer 02'),
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'id'            => 'footer-3',
		'name'          => __('Footer 03'),
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'softuni_register_sidebar' );