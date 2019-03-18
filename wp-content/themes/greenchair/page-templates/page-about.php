<?php
/*
Template Name: About Page
 */
get_header(); ?>

<div id="main-content" class="about-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="jumbotron d-flex flex-column justify-content-center align-items-center" style="background-image: url(<?php echo $backgroundimage ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 ">
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
        <div class="jumbotron jumbo-breakdown d-flex flex-column justify-content-center align-items-center" style="background-image: url(<?php echo $backgroundimage ?>);">
            <div class="container">
                <div class="column">
                    <h1>Impact</h1>
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6">
                        <div class="breakdown-block">
                            <h2>9</h2>
                            <p>years</p>
                        </div>
                        <div class="breakdown-block">
                            <h2>55</h2>
                            <p>volunteers</p>
                        </div>
                        <div class="breakdown-block">
                            <h2>2300+</h2>
                            <p>families served</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8 content">
                    <p>Both trained in real estate home staging, Jackie Craig and Beth Smoot consistently found that homeowners had too much stuff in their houses  – stuff they didn’t want to go to waste but no longer had a need for.</p>
                    <p>After seeing this again and again, the pair founded The Green Chair Project, Inc. in 2010 as a receptacle for those items, as well as a “green” way to reuse good stuff to benefit their neighbors in need.</p>
                    <p style="font-style: italic;">Pictured <span class="picture-direction"></span>: Beth Smoot (Left) and Jackie Craig (Right), Co-Founders of The Green Chair Project</p>            
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 content">
                    <div class="founder-img" style="background-image: url(https://dummyimage.com/600x400/000/fff);"></div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div><!-- #main-content -->

<?php get_footer(); 