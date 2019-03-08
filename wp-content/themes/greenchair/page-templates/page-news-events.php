<?php
/*
Template Name: News & Events Page
 */
get_header(); ?>

<div id="main-content" class="news-events">    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2 class="mt-3">News</h2>
                <hr />
                <?php
                    //News
                    $the_query = new WP_Query( 
                        array(
                            'post_type' => 'news-item', 
                            'posts_per_page' => 6
                        ) 
                    );

                    if ( $the_query->have_posts() ) {

                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            $id = get_the_ID();
                            $img = get_the_post_thumbnail($id, 'full', array('class' => 'img-fluid mx-auto'));
                            $title = get_the_title($id);
                            $date = get_post_meta($id, 'news_date', true);
                            $source = get_post_meta($id, 'news_source', true);
                            $link = get_the_permalink($id);
                            $content = wp_trim_words( get_the_content(), 40, '...' );

                            echo '<div class="news-item">';
                                
                                if(!empty($img)){
                                    echo '<a href="' . $link . '">';
                                        echo '<div class="img-wrap">';
                                            echo $img;
                                        echo '</div>';
                                    echo '</a>';
                                }
                                echo '<div class="block-content">';
                                    echo '<h5 class="font-weight-bold">'. $title . '</h5>';
                                    if(!empty($date)){
                                        echo '<p class="date"><i class="far fa-calendar-alt" aria-hidden="true"></i> ' . $date . '</p>';
                                    }
                                    if(!empty($source)){
                                        echo '<p class="source"><i class="far fa-newspaper" aria-hidden="true"></i> ' . $source . ' </p>';
                                    }
                                    echo '<p class="content">'. $content . '</p>';
                                    echo '<a class="continue float-right" href="' . $link . '">Continue reading &raquo; </a>';
                                    echo '<div class="clearfix"></div>';
                                echo '</div>';
                            echo '</div>';

                        }
                        
                        wp_reset_postdata();
                    } else {
                        echo '<p class="text-center">Unfortunately, we have no news.</p>';

                    }
                ?>
                <a href="<?php site_url(); ?>/news" class="btn btn-green see-all">See all news &raquo;</a>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="sidebar">
                    <h2 class="mt-3">Upcoming Events</h2>
                    <hr />
                    
                    <?php
                    $today = time();
                    $args = array( 
                        'post_type'=>'events-item', 
                        'posts_per_page' => 3,  
                        'orderby' => 'meta_value', 
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                                'key'     => 'events_start_date_edited',
                                'value'   => $today,
                                'compare' => '>='
                            ),
                        )
                    );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ) {
                        while ( $loop->have_posts() ) {
                            $loop->the_post();

                            $id = get_the_ID();
                            $title = get_the_title($id);
                            $content = wp_trim_words( get_the_content(), 20, '...' );
                            $link = get_the_permalink($id);
                            $startdate = get_post_meta($id, 'events_start_date', true);
                            $startime = get_post_meta($id, 'events_start_time', true);
                            $enddate = get_post_meta($id, 'events_end_date', true);
                            $formattedend = ' &mdash; ' . date('F j, Y', strtotime($enddate));
                            $link = get_the_permalink($id);
                            $img = get_the_post_thumbnail($id, 'full', array('class' => 'img-fluid mx-auto'));

                            if($startdate == $enddate){
                                $formattedend = '';
                            }else if(empty($enddate)){
                                $formattedend = '';
                            }

                            echo '<div class="event-item row">';
                                echo '<div class="col-xs-12 col-sm-12">';
                                    echo '<h5 class="font-weight-bold"><a href="'. $link . '">'. $title. '</a></h5>';
                                    echo '<p><i class="far fa-clock"></i> '. date('F j, Y', strtotime($startdate)) .  $formattedend . ' | ' . $startime. '</p>';
                                echo '</div>';

                                if(!empty($img)){
                                    echo '<div class="col-xs-12 col-sm-12">';
                                        echo '<a href="'. $link . '">';
                                            echo $img;
                                        echo '</a>';   
                                    echo '</div>';
                                }  
                                    echo '<div class="col-xs-12 col-sm-12">';
                                        echo '<p >'. $content ;
                                        echo ' <a class="continue" href="' . $link . '">Read more &raquo;</a></p>';
                                
                                    echo '</div>';
                            echo '</div>';
                        }
                        wp_reset_postdata();
                    }
                    ?>
                    
                    <a href="<?php site_url(); ?>/events" class="btn btn-green see-all">See all events &raquo;</a>

                    <form id="search-form" class="mt-5" action="<?php echo home_url( '/' ); ?>" method="get" role="form">
                        <input type="text" name="s" id="search" placeholder="Search">
                        <input type="hidden" name="post_type[]" value="news-item" />
                        <input type="hidden" name="post_type[]" value="events" />
                        <button type="submit" class="btn btn-green"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>  
</div><!-- #main-content -->

<?php get_footer(); 
    