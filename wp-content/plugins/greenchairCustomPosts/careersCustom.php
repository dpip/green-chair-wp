<?php

//Register Custom Post Type for Career Postings
function careers_custom_init()
{
    $args = array(
        'public' => true,
        'label' => 'Careers',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'custom-fields'
        ),
        'rewrite' => array( 'with_front' => false ),
        'menu_icon' => 'dashicons-portfolio'
    );
    register_post_type('career-item', $args);
}
add_action('init', 'careers_custom_init');

