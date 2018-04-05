<?php

/**
 * Enqueue theme scripts and styles.
 */
function polestar_child_scripts() {

	//wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css')

	// Child theme stylesheet.
	wp_enqueue_style( 'polestar-child', get_stylesheet_directory_uri() . '/style.css'); //, array($parent_style), wp_get_theme()->get('version') 

}
add_action( 'wp_enqueue_scripts', 'polestar_child_scripts');
?>