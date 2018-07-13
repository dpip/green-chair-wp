<?php
/*
Template Name: Home Page
 */
get_header(); ?>

<div id="main-content" class="home-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $backgroundimage = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
        <div class="jumbotron" style="background-image: url(<?php echo $backgroundimage ?>);">
            <div class="container">
                <h1 class="text-center my-5"><?php the_title(); ?></h1>
                <div class="text-center text-container">
                    <?php the_content(); ?>
                    <a href="" class="btn btn-primary my-3">Give today</a>
                </div>
            </div>
        </div>
        <div id="features">
            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <div class="inner">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/motheranddaughter.jpg" />
                            <h6>Donate Homeware</h6>
                            <p>Quality home furnishings needed</p>
                            <a href="" class="btn btn-primary">Learn more</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/eventimage.jpg" />
                            <h6>Volunteer</h6>
                            <p>Meaningful Volunteer Opportunities</p>
                            <a href="" class="btn btn-primary">Get started</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/ladies.jpg" />
                            <h6>Donate</h6>
                            <p>Your Tax-deductible contributions put to good use</p>
                            <a href="" class="btn btn-primary">Donate Now</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/bluechair.jpg" />
                            <h6>Tag Sale Fundraiser</h6>
                            <p>Pop Up Sale July 20</p>
                            <a href="" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="about">
            <div class="container">
                <div class="row">
                    <div class="col">
                        The Green Chair Project is a non-profit organization that collects donated furnishings for people transitioning from homelessness, crisis or disasters.  

We partner with over 55 agencies, shelters and nonprofits to provide essential furnishings for referred clients to live sustainably in their new homes.
                    </div>
                </div>
            </div>
        </div>
        
    <?php endwhile; ?>
    <?php endif; ?>     
</div><!-- #main-content -->

<?php get_footer(); 