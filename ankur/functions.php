<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FSE
 * @since 1.0.0
 */

/**
 * Enqueue the style.css file.
 * 
 * @since 1.0.0
 */
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style(
		'ankur-style',
		get_template_directory_uri() . '/assets/css/theme.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
} );

/**
 * Add block styles support.
 * 
 * @since 1.0.0
 */
add_action( 'after_setup_theme', function() {
	add_theme_support( 'wp-block-styles' );
} );

/**
 * Additional editor styles. 
 * Using `add_editor_style` doesn't allow the styles to be inherited by child themes.
 * 
 * @since 1.0.0
 */
add_action( 'enqueue_block_editor_assets', function() {
	wp_enqueue_style(
		'ankur-editor-style',
		get_template_directory_uri() . '/assets/css/editor.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
} );

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
