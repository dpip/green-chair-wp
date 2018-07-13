<?php

get_header(); ?>

<div id="main-content">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
           <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>     
    </div>  
</div><!-- #main-content -->

<?php get_footer(); 
    