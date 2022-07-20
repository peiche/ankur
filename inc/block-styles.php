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

    register_block_style( 'core/query-pagination', [
        'name' => 'buttons',
        'label' => __( 'Buttons', 'ankur' ),
        'attributes' => [
            'className' => 'is-style-buttons',
        ],
    ] );

    register_block_style( 'core/post-terms', [
        'name' => 'buttons',
        'label' => __( 'Buttons', 'ankur' ),
        'attributes' => [
            'className' => 'is-style-buttons',
        ],
    ] );

    register_block_style( 'core/post-terms', [
        'name' => 'outline',
        'label' => __( 'Outline', 'ankur' ),
        'attributes' => [
            'className' => 'is-style-outline',
        ],
    ] );

    register_block_style( 'core/quote', [
        'name' => 'large',
        'label' => __( 'Large', 'ankur' ),
        'attributes' => [
            'className' => 'is-style-large',
        ],
    ] );

    register_block_style( 'core/image', [
        'name' => 'pill',
        'label' => __( 'Pill', 'ankur' ),
        'attributes' => [
            'className' => 'is-style-pill',
        ],
    ] );

    register_block_style( 'core/embed', [
        'name' => 'rounded',
        'label' => __( 'Rounded', 'ankur' ),
        'attributes' => [
            'className' => 'is-style-rounded',
        ],
    ] );
} );
