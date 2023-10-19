<?php
/**
 * Ankur: Block Patterns
 *
 * @package Ankur
 * @since Ankur 1.0
 */

add_action(
	'init',
	function () {
		$block_pattern_categories = array(
			'author' => array( 'label' => __( 'Author', 'ankur' ) ),
			'banner' => array( 'label' => __( 'Banner', 'ankur' ) ),
			'card'   => array( 'label' => __( 'Card', 'ankur' ) ),
			'header' => array( 'label' => __( 'Header', 'ankur' ) ),
			'hero'   => array( 'label' => __( 'Hero', 'ankur' ) ),
			'quote'  => array( 'label' => __( 'Quote', 'ankur' ) ),
		);

		foreach ( $block_pattern_categories as $name => $properties ) {

			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}
	},
	9
);
