<?php

add_action( 'wp_enqueue_scripts', 'add_theme_styles' );
add_action( 'wp_footer', 'add_theme_scripts' );
add_action('after_setup_theme', 'register_theme_header_menu');
add_action('after_setup_theme', 'register_theme_header_icons_menu');
add_action('after_setup_theme', 'register_theme_header_logo');
add_action('after_setup_theme', 'allowPostThumbnails');
add_action( 'widgets_init', 'register_my_widgets' );


function add_theme_styles() {
    wp_enqueue_style( 'font-awesome', "//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'main', get_template_directory_uri(  ) . '/assets/css/main.css' );
}

function add_theme_scripts() {
    wp_enqueue_script( 'init', get_template_directory_uri(  ) . '/assets/js/init.js' );
}

function register_theme_header_menu() {
    register_nav_menu( 'header-menu', 'Header Menu' );
}

function register_theme_header_logo() {
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => 'mazafaka',
    ) );
}

function register_theme_header_icons_menu() {
    register_nav_menu( 'header-icons-menu', 'Header Icons Menu' );
}


function register_my_widgets(){

	register_sidebar( array(
		'name'          => 'Footer Widgets',
		'id'            => "footer-widgets",
		'description'   => 'this is footer widgets block',
		'class'         => 'footer-widgets-container',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
	) );
}

function allowPostThumbnails() {
    add_theme_support( 'post-thumbnails', array('post') );
}

