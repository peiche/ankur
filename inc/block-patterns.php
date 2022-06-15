<?php
/**
 * Ankur: Block Patterns
 *
 * @since Ankur 1.0
 */

add_action( 'init', function() {
    $block_pattern_categories = array(
        'author' => array( 'label' => __( 'Ankur/Author', 'ankur' ) ),
        'banner' => array( 'label' => __( 'Ankur/Banner', 'ankur' ) ),
        'card'   => array( 'label' => __( 'Ankur/Card', 'ankur' ) ),
        'hero'   => array( 'label' => __( 'Ankur/Hero', 'ankur' ) ),
    );

    foreach ( $block_pattern_categories as $name => $properties ) {

        if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
            register_block_pattern_category( $name, $properties );
        }
    }
    
}, 9 );