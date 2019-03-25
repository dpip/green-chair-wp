<?php

//Register Custom Post Type for Supporters
function supporter_custom_init()
{
    $args = array(
        'public' => true,
        'label' => 'Supporters',
        'supports' => array(
            'title',
            'thumbnail'
        ),
        'rewrite' => array( 'with_front' => false ),
        'menu_icon' => 'dashicons-star-filled'
    );
    register_post_type('supporters', $args);
}
add_action('init', 'supporter_custom_init');

//Taxonomy for Supporters
add_action( 'init', 'create_supporter_tax' );

function create_supporter_tax() {
    register_taxonomy(
        'supporter_category',
        'supporters',
        array(
            'label' => __( 'Supporter Category' ),
            'rewrite' => array( 'slug' => 'supporter_category' ),
            'hierarchical' => true
        )
    );
}