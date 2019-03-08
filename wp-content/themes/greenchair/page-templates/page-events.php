<?php
/*
Template Name: All Events Page
 */
get_header(); ?>

<div id="main-content" class="news-events events-only">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h1 class="display-5 mt-5"><?php echo get_the_title(); ?></h1>
                <hr />
                <?php
                    //Events
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                    $the_query = new WP_Query( 
                        array(
                            'post_type' => 'events-item', 
                            'posts_per_page' => 6,
                            'paged' => $paged
                        ) 
                    );

                    if ( $the_query->have_posts() ) {

                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            $id = get_the_ID();
                            $img = get_the_post_thumbnail($id, 'full', array('class' => 'img-fluid mx-auto'));
                            $title = get_the_title($id);
                            $link = get_the_permalink($id);
                            $content = wp_trim_words( get_the_content(), 40, '...' );
                            $startdate = get_post_meta($id, 'events_start_date', true);
                            $startime = get_post_meta($id, 'events_start_time', true);
                            $enddate = get_post_meta($id, 'events_end_date', true);
                            $formattedend = ' &mdash; ' . date('F j, Y', strtotime($enddate));

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
                                    echo '<div class="col-xs-12 col-sm-4">';
                                        echo '<a href="'. $link . '">';
                                            echo $img;
                                        echo '</a>';   
                                    echo '</div>';
                                    echo '<div class="col-xs-12 col-sm-8">';
                                        echo '<p >'. $content . '</p>';
                                
                                    echo '</div>';
                                }else{
                                    echo '<div class="col-xs-12 col-sm-12">';
                                        echo '<p >'. $content .'</p>';
                                        
                                    echo '</div>';
                                }  
                                echo '<div class="col-sm-12"> <a class="continue" href="' . $link . '">Read more &raquo;</a></div>';   
                            echo '</div><hr />';

                        }
                        echo '<div class="clearfix"></div>';
                        echo '<nav class="pagination center-block">';
                            $big = 999999999; // need an unlikely integer
                            echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'type' => 'list',
                            'total' => $the_query->max_num_pages
                            ) );
                        echo '</nav>';

                        wp_reset_postdata();
                    } else {
                        echo '<p class="text-center">Unfortunately, we have no news.</p>';

                    }
                ?>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="sidebar">
                    <form id="search-form" action="<?php echo home_url( '/' ); ?>" method="get" role="form">
                        <input type="text" name="s" id="search" placeholder="Search">
                        <input type="hidden" name="post_type[]" value="news-item" />
                        <input type="hidden" name="post_type[]" value="events" />
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </form>
                    <?php //get_sidebar('sidebar-1'); ?>
                </div>
            </div>
        </div>
    </div>  
</div><!-- #main-content -->

<?php get_footer(); 
    