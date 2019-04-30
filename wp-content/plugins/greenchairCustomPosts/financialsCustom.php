<?php

//Register Custom Post Type for financials
function financials_custom_init()
{
    $args = array(
        'public' => true,
        'label' => 'Financial Information',
        'supports' => array(
            'title',
            'editor'
        ),
        'rewrite' => array( 'with_front' => false ),
        'menu_icon' => 'dashicons-groups'
    );
    register_post_type('financials-item', $args);
}
add_action('init', 'financials_custom_init');


// register custom post type taxonomy

add_action( 'init', 'create_financials_tax' );

function create_financials_tax() {
	register_taxonomy(
		'financials_category',
		'financials-item',
		array(
			'label' => __( 'Financial Category' ),
			'rewrite' => array( 'slug' => 'financials_category' ),
            'hierarchical' => true
		)
	);
}