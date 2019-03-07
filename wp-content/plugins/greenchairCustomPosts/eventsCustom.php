<?php
//Register Custom Post Type
function events_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Events',
      'supports' => array('title', 'editor', 'thumbnail', 'revisions'), 
      'menu_icon' => 'dashicons-calendar',
      'has_archive' => true
    );
    register_post_type( 'events-item', $args );
}
add_action( 'init', 'events_custom_init' );


//Add Custom Field for Post Type and Save it when updated
add_action("admin_init", "events_admin_init");

function events_admin_init(){
  add_meta_box("events_meta", "Event Details", "events_details_meta", "events-item", "normal", "default");
}

function events_details_meta() {
    $ret = $ret . '<p><label>Start Time: </label><input type="text" name="events_start_time" value="' . get_events_field("events_start_time") . '" /> <em>Format 10:00 am</em></p>';
    $ret = $ret . '<p><label>Start Date: </label><input type="text" name="events_start_date" class="datepicker" value="' . get_events_field("events_start_date") . '" /> <em>Format mm/dd/yy</em></p>';
    $ret = $ret . '<input type="hidden" name="events_start_date_edited" value="' . strtotime(get_events_field("events_start_date")) . '" />';
    $ret = $ret . '<p><label>End Time: </label><input type="text" name="events_end_time" value="' . get_events_field("events_end_time") . '" /> <em>Format 10:00 am</em></p>';
    $ret = $ret . '<input type="hidden" name="events_end_date_edited" value="' . strtotime(get_events_field("events_end_date")) . '" />';
    $ret = $ret . '<p><label>End Date: </label><input type="text" name="events_end_date" class="datepicker" value="' . get_events_field("events_end_date") . '" /> <em>Format mm/dd/yy</em></p>';
     $ret = $ret . '<p><label>Address: </label><br /><textarea rows="10" cols="50" name="events_address" >'. get_events_field("events_address") . '</textarea><br /></p>';

    $ret = $ret . '<script>
                  jQuery(function() {
                    jQuery( ".datepicker" ).datepicker();
                  });
                  </script>';
  
    echo $ret;
}
function get_events_field($events_field) {
    global $post;

    $custom = get_post_custom($post->ID);

    if (isset($custom[$events_field])) {
        return $custom[$events_field][0];
    }
}

add_action('save_post', 'save_events_details');

function save_events_details(){
   global $post;

   if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
      return;

   if ( get_post_type($post) != 'events-item')
      return;

   save_events_field("events_start_time");
   save_events_field("events_start_date");
   save_events_field("events_start_date_edited");
   save_events_field("events_end_time");
   save_events_field("events_end_date_edited");
   save_events_field("events_end_date");
   save_events_field("events_address");
}

function save_events_field($events_field) {
    global $post;

    if(isset($_POST[$events_field])) {
        update_post_meta($post->ID, $events_field, $_POST[$events_field]);
    }
}
