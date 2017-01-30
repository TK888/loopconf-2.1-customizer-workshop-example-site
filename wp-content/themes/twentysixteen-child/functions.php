<?php

/**
 * Only show hero on front page
 *
 * @param $show_options
 *
 * @return bool
 */
function twentysixteen_child_customize_hero_active_callback( $show_options ) {
	return is_front_page();
}

add_filter( 'customize_hero_single_options_active_callback', 'twentysixteen_child_customize_hero_active_callback' );

/**
 * Enqueue scripts and styles
 */
function twentysixteen_child_scripts_styles() {
	$js_deps = array( 'jquery' );

	$css_deps = array( 'twentysixteen-style' );

	wp_dequeue_style( 'twentysixteen-style' );
	wp_enqueue_style( 'twentysixteen-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'twentysixteen-child', get_stylesheet_directory_uri() . '/assets/css/twentysixteen-child.css' );

	wp_enqueue_script( 'twentysixteen-child', get_stylesheet_directory_uri() . '/assets/js/twentysixteen-child.js', $js_deps, false, true );


}

add_action( 'wp_enqueue_scripts', 'twentysixteen_child_scripts_styles' );