<?php
/*
Template Name: Full Width Page
 */
get_header(); ?>

<div id="main-content" class="py-4">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1 class="my-4 pb-2"><?php the_title(); ?></h1>
             <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>     
    </div>  
</div><!-- #main-content -->

<?php get_footer(); 