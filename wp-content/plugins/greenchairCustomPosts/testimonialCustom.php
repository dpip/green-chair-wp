<?php

//Register Custom Post Type for Testimonies
function testimony_custom_init()
{
    $args = array(
        'public' => true,
        'label' => 'Testimonies',
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),
        'rewrite' => array( 'with_front' => false ),
        'menu_icon' => 'dashicons-format-quote'
    );
    register_post_type('testimony-item', $args);
}
add_action('init', 'testimony_custom_init');


// register custom post type taxonomy

add_action( 'init', 'create_testimony_tax' );

function create_testimony_tax() {
	register_taxonomy(
		'testimony_category',
		'testimony-item',
		array(
			'label' => __( 'Testimony Category' ),
			'rewrite' => array( 'slug' => 'testimony_category' ),
			'hierarchical' => true,
		)
	);
}