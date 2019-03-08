<?php
/*
Template Name: All News Page
 */
get_header(); ?>

<div id="main-content" class="news-events news-only">    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h1 class="display-5 mt-5"><?php echo get_the_title(); ?></h1>
                <hr />
                <?php
                    //News
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                    $the_query = new WP_Query( 
                        array(
                            'post_type' => 'news-item', 
                            'posts_per_page' => 6,
                            'paged' => $paged
                        ) 
                    );

                    if ( $the_query->have_posts() ) {

                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            $id = get_the_ID();
                            $img = get_the_post_thumbnail($id, 'full', array('class' => 'img-fluid center-block'));
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
            <div class="hidden-xs col-sm-4">
                <div class="sidebar">
                    <form id="search-form" action="<?php echo home_url( '/' ); ?>" method="get" role="form">
                        <input type="text" name="s" id="search" placeholder="Search">
                        <input type="hidden" name="post_type[]" value="news-item" />
                        <input type="hidden" name="post_type[]" value="events" />
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </form>
                    <?php //get_sidebar('sidebar-1'); ?>
                </div>
            </div>
        </div>
    </div>  
</div><!-- #main-content -->

<?php get_footer(); 
    