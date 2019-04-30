<?php
/*
Template Name: Volunteer Page
 */
get_header(); ?>

<div id="main-content" class="volunteer-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $backgroundimage = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>   
        <div class="jumbotron d-flex flex-column justify-content-center align-items-center" style="background-image: url(<?php echo $backgroundimage ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 py-5">
                        <h1 class="my-3 display-4 text-center pb-3"><?php echo get_the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="volunteer-info" class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 py-5">
                    <?php the_content(); ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 py-5">
                    <div class="news-item">
                        <div class="block-content">
                            <h5 class="font-weight-bold">Required Community Service</h5>
                            <p class="content">To learn more about required community service and our requirements.</p>
                            <a class="continue float-right" href="' . $link . '">Continue reading &raquo; </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>     
</div><!-- #main-content -->

<?php get_footer(); 