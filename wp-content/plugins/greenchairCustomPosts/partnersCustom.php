<?php

//Register Custom Post Type for Partners
function supporter_custom_init()
{
    $args = array(
        'public' => true,
        'label' => 'Partners',
        'supports' => array(
            'title',
            'thumbnail'
        ),
        'rewrite' => array( 'with_front' => false ),
        'menu_icon' => 'dashicons-star-filled'
    );
    register_post_type('partners', $args);
}
add_action('init', 'partner_custom_init');

//Taxonomy for Supporters
add_action( 'init', 'create_partner_tax' );

function create_supporter_tax() {
    register_taxonomy(
        'partner_category',
        'partners',
        array(
            'label' => __( 'Partner Category' ),
            'rewrite' => array( 'slug' => 'partner_category' ),
            'hierarchical' => true
        )
    );
}