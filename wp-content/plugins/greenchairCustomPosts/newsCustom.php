<?php
//Register Custom Post Type for news
function news_custom_init()
{
    $args = array(
        'public' => true,
        'label' => 'News',
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),
        'rewrite' => array( 'with_front' => false ),
        'menu_icon' => 'dashicons-megaphone'
    );
    register_post_type('news-item', $args);
}
add_action('init', 'news_custom_init');


//Add Custom Field for Post Type and Save it when updated
add_action("admin_init", "newsdetails_admin_init");

function newsdetails_admin_init()
{
    add_meta_box("news_details_meta", "Details", "news_details_meta", "news-item", "normal", "default");
}

function news_details_meta()
{
    $ret = $ret . '<p><label>URL: </label><input type="text" name="news_url" value="' . get_newsdetails_field("news_url") . '" /> </p>';
    $ret = $ret . '<p><label>Source: </label><input type="text" name="news_source" value="' . get_newsdetails_field("news_source") . '" /></p>';
    $ret = $ret . '<p><label>Date: </label><input type="text" name="news_date" value="' . get_newsdetails_field("news_date") . '" /></p>';
    echo $ret;
}
function get_newsdetails_field($newsdetails_field)
{
    global $post;
    
    $custom = get_post_custom($post->ID);
    
    if (isset($custom[$newsdetails_field])) {
        return $custom[$newsdetails_field][0];
    }
}

add_action('save_post', 'save_news_details');

function save_news_details()
{
    global $post;
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;
    
    if (get_post_type($post) != 'news-item')
        return;
    
    save_newsdetails_field("news_url");
    save_newsdetails_field("news_source");
    save_newsdetails_field("news_date");
    
}

function save_newsdetails_field($newsdetails_field)
{
    global $post;
    
    if (isset($_POST[$newsdetails_field])) {
        update_post_meta($post->ID, $newsdetails_field, $_POST[$newsdetails_field]);
    }
}
