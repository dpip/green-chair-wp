<?php

//Register Custom Post Type for team
function team_custom_init()
{
    $args = array(
        'public' => true,
        'label' => 'Team Greenchair',
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),
        'rewrite' => array( 'with_front' => false ),
        'menu_icon' => 'dashicons-groups'
    );
    register_post_type('team-item', $args);
}
add_action('init', 'team_custom_init');


// register custom post type taxonomy

add_action( 'init', 'create_team_tax' );

function create_team_tax() {
	register_taxonomy(
		'team_category',
		'team-item',
		array(
			'label' => __( 'Team Category' ),
			'rewrite' => array( 'slug' => 'team_category' ),
			'hierarchical' => true
		)
	);
}