<?php
/*
Template Name: Blog Page
 */
get_header(); ?>

<div id="main-content" class="blog-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $backgroundimage = get_the_post_thumbnail_url(get_the_ID(), 'full', true); ?>
    <div class="jumbotron" style="background-image:url(<?php echo $backgroundimage ?>);">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 offset-md-2">
                    <h1 class="text-center display-4"><?php the_title(); ?></h1>
                    <hr class="my-4">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <div class="container">
        <div class="row py-3">
            <div class="col-xs-12 col-sm-12 col-md-8">
                <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $the_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 7, 'paged' => $paged));
                    if ( $the_query->have_posts() ) {
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                                $id = get_the_ID();
                                $title = get_the_title();
                                $link = get_the_permalink();
                                $date = get_the_date();
                                $content = get_the_content();
                                $excerpt = get_the_excerpt($id);
                                $post_categories = wp_get_post_categories( get_the_ID());
                                $trimmedcontent = wp_trim_words($content, 50, '...');
                                $image = get_the_post_thumbnail($id, 'full', array('class' => 'img-responsive'));

                                echo '<div class="blog-post mb-5">';
                                    echo '<div class="inner">';
                                        echo '<a href="'. $link . '">';
                                                if(!empty($image)){
                                                    echo '<div class="img-wrap">'. $image . '</div>';
                                                }
                                        echo '</a>'; 
                                            echo '<div class="post-content">';
                                                echo '<h4><a href="'. $link . '">' . $title . '</a></h4>'; 
                                                echo '<p><i class="far fa-calendar-alt"></i> '. $date; 
                                                    foreach($post_categories as $c){
                                                        $cat = get_category( $c );
                                                        echo '&nbsp;&nbsp; <a href="'. get_category_link( $cat->term_id ). '"><i class="far fa-folder-open"></i> ' . $cat->name . '</a> ';
                                                    }
                                                echo '</p>'; 
                                                echo '<p>'. $trimmedcontent . ' <a class="continue" href="' . $link . '">Read more &raquo;</a></p>';
                                            echo '</div>';
                                           
                                        
                                    echo '</div>';
                                echo '</div>';
                            }
                            
                        echo' <div class="blog-navigation">';
                            echo '<div class="container">';
                                echo '<div class="float-left">';
                                    next_posts_link( '&laquo; Older', $the_query->max_num_pages );
                                echo '</div>';
                                echo '<div class="float-right">';
                                    previous_posts_link( 'Newer &raquo;' );
                                echo '</div>';
                                echo '<div class="clearfix"></div>';
                            echo '</div>';
                        echo '</div>';
                        
                    }
                    wp_reset_postdata();
                ?>  
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <form id="search-form" action="<?php echo home_url( '/' ); ?>" method="get" role="form">
                    <input type="text" name="s" id="search" placeholder="Search">
                    <input type="hidden" name="post_type[]" value="post" />
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </form>
                <?php get_sidebar(); ?>
            </div>    
        </div>
    </div>
</div><!-- #main-content -->

<?php get_footer(); 