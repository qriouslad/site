<?php

/**
 * Setup theme
 */
function wpid_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'wpid_setup' );

/**
 * Enqueue scripts and styles.
 */
function wpid_enqueue_assets() {
	wp_enqueue_style( 'yo', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wpid_enqueue_assets' );

