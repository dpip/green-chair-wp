<?php
/*
Template Name: Donate Page
 */
get_header(); ?>

<div id="main-content">
    <div class="container">
      kahsldfhasdkjf
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1 class="text-center"><?php the_title(); ?></h1>
             <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div><!-- #main-content -->

<?php get_footer();
