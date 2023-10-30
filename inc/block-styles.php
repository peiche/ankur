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
			'name'       => 'underline',
			'label'      => __( 'Underline', 'ankur' ),
			'attributes' => array(
				'className' => 'is-style-underline',
			),
		)
	);

	register_block_style(
		'core/query-pagination',
		array(
			'name'       => 'buttons',
			'label'      => __( 'Buttons', 'ankur' ),
			'attributes' => array(
				'className' => 'is-style-buttons',
			),
		)
	);

	register_block_style(
		'core/post-terms',
		array(
			'name'       => 'buttons',
			'label'      => __( 'Buttons', 'ankur' ),
			'attributes' => array(
				'className' => 'is-style-buttons',
			),
		)
	);

	register_block_style(
		'core/post-terms',
		array(
			'name'       => 'outline',
			'label'      => __( 'Outline', 'ankur' ),
			'attributes' => array(
				'className' => 'is-style-outline',
			),
		)
	);

	register_block_style(
		'core/quote',
		array(
			'name'       => 'large',
			'label'      => __( 'Large', 'ankur' ),
			'attributes' => array(
				'className' => 'is-style-large',
			),
		)
	);

	register_block_style(
		'core/image',
		array(
			'name'       => 'pill',
			'label'      => __( 'Pill', 'ankur' ),
			'attributes' => array(
				'className' => 'is-style-pill',
			),
		)
	);

	register_block_style(
		'core/embed',
		array(
			'name'       => 'rounded',
			'label'      => __( 'Rounded', 'ankur' ),
			'attributes' => array(
				'className' => 'is-style-rounded',
			),
		)
	);

	register_block_style(
		'core/gallery',
		array(
			'name'       => 'diamond',
			'label'      => __( 'Diamond', 'ankur' ),
			'attributes' => array(
				'className' => 'is-style-diamond',
			),
		)
	);

	register_block_style(
		'core/media-text',
		array(
			'name'       => 'overlap',
			'label'      => __( 'Text Overlap', 'ankur' ),
			'attributes' => array(
				'className' => 'is-style-overlap',
			),
		)
	);

	register_block_style(
		'core/cover',
		array(
			'name'       => 'rounded',
			'label'      => __( 'Rounded', 'ankur' ),
			'attributes' => array(
				'className' => 'is-style-rounded',
			),
		)
	);

	register_block_style(
		'core/video',
		array(
			'name'       => 'rounded',
			'label'      => __( 'Rounded', 'ankur' ),
			'attributes' => array(
				'className' => 'is-style-rounded',
			),
		)
	);
}

add_action( 'init', 'ankur_register_block_styles' );
