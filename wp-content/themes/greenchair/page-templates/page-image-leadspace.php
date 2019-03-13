<?php
/*
Template Name: Image Leadspace Page
 */
get_header(); ?>

<div id="main-content" class="image-leadspace">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $backgroundimage = get_the_post_thumbnail_url(get_the_ID(), 'full', true); ?>
    <div class="jumbotron" style="background-image:url(<?php echo $backgroundimage ?>);">
        <div class="container">
            <div class="row py-5">
                <div class="col-xs-12 col-sm-12 col-md-8 offset-md-2">
                    <h1 class="text-center display-4 my-5"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <div class="container py-4">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
             <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>     
    </div>  
</div><!-- #main-content -->

<?php get_footer(); 