<?php

//Register Custom Post Type for Career Postings
function agency_partners_custom_init()
{
    $args = array(
        'public' => true,
        'label' => 'Agency Partners',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'custom-fields'
        ),
        'rewrite' => array( 'with_front' => false ),
        'menu_icon' => 'dashicons-portfolio'
    );
    register_post_type('agency-partners-item', $args);
}
add_action('init', 'agency_partners_custom_init');
