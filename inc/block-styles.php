<?php
/**
 * Ankur: Block Styles
 *
 * @package Ankur
 * @since Ankur 1.0
 */

/**
 * Register custom block styles.
 */
function ankur_register_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'underline',
			'label' => __( 'Underline', 'ankur' ),
		)
	);

	register_block_style(
		'core/query-pagination',
		array(
			'name'  => 'buttons',
			'label' => __( 'Buttons', 'ankur' ),
		)
	);

	register_block_style(
		'core/post-terms',
		array(
			'name'  => 'buttons',
			'label' => __( 'Buttons', 'ankur' ),
		)
	);

	register_block_style(
		'core/post-terms',
		array(
			'name'  => 'outline',
			'label' => __( 'Outline', 'ankur' ),
		)
	);

	register_block_style(
		'core/quote',
		array(
			'name'  => 'large',
			'label' => __( 'Large', 'ankur' ),
		)
	);

	register_block_style(
		'core/image',
		array(
			'name'  => 'pill',
			'label' => __( 'Pill', 'ankur' ),
		)
	);

	register_block_style(
		'core/embed',
		array(
			'name'  => 'rounded',
			'label' => __( 'Rounded', 'ankur' ),
		)
	);

	register_block_style(
		'core/gallery',
		array(
			'name'  => 'diamond',
			'label' => __( 'Diamond', 'ankur' ),
		)
	);

	register_block_style(
		'core/media-text',
		array(
			'name'  => 'overlap',
			'label' => __( 'Text Overlap', 'ankur' ),
		)
	);

	register_block_style(
		'core/cover',
		array(
			'name'  => 'rounded',
			'label' => __( 'Rounded', 'ankur' ),
		)
	);

	register_block_style(
		'core/video',
		array(
			'name'  => 'rounded',
			'label' => __( 'Rounded', 'ankur' ),
		)
	);
}

add_action( 'init', 'ankur_register_block_styles' );
