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
                <div class="col-xs-12 col-sm-12 col-md-12 py-5">
                    <?php the_content(); ?>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 py-5">
                            <div class="card">
                            <img class="box-image" style="height: 225px;" src="<?php the_field('volunteer_box_image_1'); ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title teal"><?php the_field('volunteer_box_title_1'); ?></h5>
                                <p class="card-text"><?php the_field('volunteer_box_content_1'); ?></p>
                                <a href="<?php the_field('volunteer_box_cta_url_1'); ?>" class="btn btn-primary"><?php the_field('volunteer_box_cta_1'); ?></a>
                            </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 py-5">
                            <div class="card">
                            <img class="box-image" src="<?php the_field('volunteer_box_image_2'); ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title teal"><?php the_field('volunteer_box_title_2'); ?></h5>
                                <p class="card-text"><?php the_field('volunteer_box_content_2'); ?></p>
                                <a href="<?php the_field('volunteer_box_cta_url_2'); ?>" class="btn btn-primary"><?php the_field('volunteer_box_cta_2'); ?></a>
                            </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 py-5">
                            <div class="card">
                            <img class="box-image" src="<?php the_field('volunteer_box_image_3'); ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title teal"><?php the_field('volunteer_box_title_3'); ?></h5>
                                <p class="card-text"><?php the_field('volunteer_box_content_3'); ?></p>
                                <a href="<?php the_field('volunteer_box_cta_url_3'); ?>" class="btn btn-primary"><?php the_field('volunteer_box_cta_3'); ?></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xs-12 col-sm-12 col-md-4 py-5">
                    <div class="news-item">
                        <div class="block-content">
                            <a class="continue float-right" href="<?php the_field('sidebar_cta_url_1'); ?>">
                                <img src="<?php the_field('sidebar_image_1'); ?>" class="img-fluid mx-auto mb-3" />
                            </a>
                            <h5 class="font-weight-bold"><?php the_field('sidebar_title_1'); ?></h5>
                            <p class="content"><?php the_field('sidebar_copy_1'); ?></p>
                            <a class="continue float-right" href="<?php the_field('volunteer_box_cta_url_1'); ?>"><?php the_field('sidebar_cta_text_1'); ?> &raquo; </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="block-content">
                            <a class="continue float-right" href="<?php the_field('sidebar_cta_url_2'); ?>">
                                <img src="<?php the_field('sidebar_image_2'); ?>" class="img-fluid mx-auto mb-3" />
                            </a>
                                <h5 class="font-weight-bold"><?php the_field('sidebar_title_2'); ?></h5>
                            <p class="content"><?php the_field('sidebar_copy_2'); ?></p>
                            <a class="continue float-right" href="<?php the_field('sidebar_cta_url_2'); ?>"><?php the_field('sidebar_cta_text_2'); ?> &raquo; </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>     
</div><!-- #main-content -->

<?php get_footer(); 