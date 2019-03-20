<?php
/*
Template Name: About Page
 */
get_header(); ?>

<div id="main-content" class="about-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="jumbotron jumbo-about d-flex flex-column justify-content-center align-items-center" style="background-image: url(http://greenchair.loc:8888/wp-content/uploads/2019/03/greenchair-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <h1 class="my-3 display-3"><?php echo get_the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 50px;">
            <div class="row doc-wrap">
                <div class="col-sm-6 col-md-12 col-lg-6">
                    <h3><?php echo get_field('about_heading_two'); ?></h3>
                    <div class="margin-top-md" style="margin-top: 25px;">
                        <div class="videoWrapper">
                            <?php the_field('about_video_section'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <div class="jumbotron jumbo-breakdown sepia d-flex flex-column justify-content-center align-items-center" style="background-image: url(http://greenchair.loc:8888/wp-content/uploads/2019/03/impact.jpg);">
            <div class="container">
                <div class="column">
                    <h1><?php echo get_field('impact_heading'); ?></h1>
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6">
                        <div class="breakdown-block">
                            <h2><?php echo get_field('impact_top_first'); ?></h2>
                            <p><?php echo get_field('impact_bottom_first'); ?></p>
                        </div>
                        <div class="breakdown-block">
                            <h2><?php echo get_field('impact_top_second'); ?></h2>
                            <p><?php echo get_field('impact_bottom_second'); ?></p>
                        </div>
                        <div class="breakdown-block">
                            <h2><?php echo get_field('impact_top_third'); ?></h2>
                            <p><?php echo get_field('impact_bottom_third'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-7 content">
                    <h2><?php echo get_field('story_heading'); ?></h2>
                    <?php the_field('about_story_section'); ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 content">
                    <div class="founder-img" style="background-image: url(http://greenchair.loc:8888/wp-content/uploads/2019/03/25299861758_7ea43c5a40_z.jpg);"></div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 50px;">
                <a href="/get-involved" class="btn btn-primary">Get Involved</a>
                <a href="/donate" class="btn btn-primary" style="margin-left: 10px;">Donate Now</a>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div><!-- #main-content -->

<?php get_footer(); 