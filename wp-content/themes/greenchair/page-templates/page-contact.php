<?php
/*
Template Name: Contact Page
 */
get_header(); ?>

<div id="main-content" class="image-leadspace contact">
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
    <div class="container py-4">
        <div class="row">
            <div class="col-xs-12- col-md-8">
                <?php the_content(); ?>
            </div>
            <div class="col-xs-12 col-md-4">
               <?php the_field('contact_information'); ?>
            </div>
        </div>
    </div>  
    <div id="location" class="woodbackground">
        <div class="container">
            <?php the_field('location_sidebar'); ?>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div><!-- #main-content -->

<?php get_footer(); 