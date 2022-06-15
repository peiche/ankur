<?php
/**
 * Ankur: Block Styles
 *
 * @since Ankur 1.0
 */

add_action( 'init', function() {
    register_block_style( 'core/button', [
        'name' => 'underline',
        'label' => __( 'Underline', 'ankur' ),
        'attributes' => [
            'className' => 'is-style-underline',
        ],
    ] );
} );
