<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ReadandFeed2017
 */

get_header(); ?>
<div id="main-content" class="archive-page py-5">
    <div class="container">
        <?php if (is_category()) { ?>
        <h1 class="text-center mb-5">
        <?php single_cat_title(); ?>
        </h1>
        <?php } elseif (is_tag()) { ?> 
        <h1 class="text-center mb-5">
        Tag: <?php single_tag_title(); ?>
        </h1>
        <?php } elseif (is_author()) { ?>
        <h1 class="text-center mb-5">
        Posts by: <?php echo get_the_author_meta('display_name'); ?>
        </h1>
        <?php } elseif (is_day()) { ?>
        <h1 class="text-center mb-5">
        <?php the_time('l, F j, Y'); ?>
        </h1>
        <?php } elseif (is_month()) { ?>
        <h1 class="text-center mb-5">
        <?php the_time('F Y'); ?>
        </h1>
        <?php } elseif (is_year()) { ?>
        <h1 class="text-center mb-5">
        <?php the_time('Y'); ?>
        </h1>
        <?php } ?>
    </div> 
    <?php               
    if (have_posts()){  
        echo '<div class="container"><hr class="mb-4 pb-4" />';
        while (have_posts()) {
            the_post();
    ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('blog-item mb-5'); ?>>
                <div class="blog-image">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'img-fluid mx-auto d-block')); ?>
                    </a>
                </div>
                <h3 class="mt-3"><?php the_title(); ?> | <?php the_date(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="continue">Continue reading &raquo;</a>
            </div> <!-- end blog-item -->
        <?php
        }
        echo '</div>';
        ?>
        <div class="clearfix"></div>
        <nav class="wp-prev-next">
            <ul class="nav clearfix">
                <li class="prev-link pull-right"><?php next_posts_link() ?></li>
                <li class="next-link pull-left"><?php previous_posts_link() ?></li>
            </ul>
        </nav>
    <?php 
    }else{ ?>
            <article id="post-not-found">
                <h1><?php _e("No Posts Yet"); ?></h1>
                <section class="post_content">
                    <p><?php _e("Sorry, What you were looking for is not here."); ?></p>
                </section>
            </article>
    <?php } ?>      
    
</div> <!-- end #content -->

<?php get_footer(); ?>