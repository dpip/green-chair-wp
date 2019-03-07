<?php
/*
Template Name: All News Page
 */
get_header(); ?>

<div id="main-content" class="news-events">
    <?php $backgroundimage = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
    <?php if(!empty($backgroundimage)){ ?>
    <div class="jumbotron jumbo-fixed" style="background-image:url(<?php echo $backgroundimage ?>);">
        <div class="container text-center">
            <h1><?php echo get_the_title(); ?></h1>
        </div>
    </div>
    <?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2>Our News</h2>
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

                        echo '<div class="news-item col-xs-12">';
                            
                            if(!empty($img)){
                                echo '<a href="' . $link . '">';
                                    echo '<div class="img-wrap">';
                                        echo $img;
                                    echo '</div>';
                                echo '</a>';
                            }
                            echo '<h4>'. $title . '</h4>';
                            echo '<p class="date"><i class="fa fa-calendar"></i> ' . $date . '</p>';
                            echo '<p class="source"><i class="fa fa-newspaper-o" aria-hidden="true"></i> ' . $source . ' <span class="line">|</span></p>';
                            echo '<p class="content">'. $content . '</p>';
                            echo '<a class="continue" href="' . $link . '">Continue &raquo; </a>';
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
                <form id="search-form" action="<?php echo home_url( '/' ); ?>" method="get" role="form">
                    <input type="text" name="s" id="search" placeholder="Search">
                    <input type="hidden" name="post_type[]" value="news-item" />
                    <input type="hidden" name="post_type[]" value="events" />
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </form>
                <?php get_sidebar('sidebar-1'); ?>
            </div>
        </div>
    </div>  
</div><!-- #main-content -->

<?php get_footer(); 
    