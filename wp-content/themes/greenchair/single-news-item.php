<?php
get_header(); ?>

<div id="main-content" class="news-single-post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'img-fluid d-block mx-auto'));
                    ?>
                    <h1 class="display-4 mt-5 mb-4"><?php the_title(); ?></h1>
                    <?php
                        $date = get_post_meta(get_the_ID(), 'news_date', true);
                        $source = get_post_meta(get_the_ID(), 'news_source', true);
                        $link = get_post_meta(get_the_ID(), 'news_url', true);
                        if(!empty($date)){
                            echo '<p class="date"><i class="far fa-calendar-alt" aria-hidden="true"></i>  ' . $date. '</p>';
                        }
                        if(!empty($source)){
                            echo '<p class="source"><i class="far fa-newspaper" aria-hidden="true"></i>  ' . $source . '</p>';
                        }
                        
                    ?>
                    <hr />
                     <?php the_content(); ?>
                     <?php 
                     if(!empty($link)){
                        echo '<a href="'. $link . '" target="_blank" class="btn btn-green">Read the article</a>';
                     }  ?>
                <?php endwhile; ?>
                <?php endif; ?>  
            </div><!--offset-column-->
        </div>  
    </div>  
    
</div><!-- #main-content -->

<?php get_footer(); 
    