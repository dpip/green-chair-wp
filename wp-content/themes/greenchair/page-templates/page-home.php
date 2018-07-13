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
                <h1 class="text-center my-3"><?php the_title(); ?></h1>
                <div class="text-center text-container">
                    <?php the_content(); ?>
                    <a href="" class="btn btn-primary my-3">Give today</a>
                </div>
            </div>
        </div>
        <div id="features">
            <div class="container py-4">
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-12 col-md-3 feature">
                        <div class="inner">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/motheranddaughter.jpg" />
                            <h6>Donate Homeware</h6>
                            <p>Quality home furnishings needed</p>
                            <a href="" class="btn btn-primary">Learn more</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 feature">
                        <div class="inner">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/eventimage.jpg" />
                            <h6>Volunteer</h6>
                            <p>Meaningful Volunteer Opportunities</p>
                            <a href="" class="btn btn-primary">Get started</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 feature">
                        <div class="inner">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/ladies.jpg" />
                            <h6>Donate</h6>
                            <p>Your Tax-deductible contributions put to good use</p>
                            <a href="" class="btn btn-primary">Donate Now</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 feature">
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
                    <div class="col py-5">
                        <p class="text-center">The Green Chair Project is a non-profit organization that collects donated furnishings for people transitioning from homelessness, crisis or disasters.  </p>
                        <p class="text-center">We partner with over 55 agencies, shelters and nonprofits to provide essential furnishings for referred clients to live sustainably in their new homes.</p>
                        <p class="green text-center"> Since our founding in 2010, The Green Chair Project has helped more than 2,300 families begin a new.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="essentials">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 py-5">
                        <h3 class="text-center">Five Essential Items</h3>
                    </div>
                    <div class="essential-item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/couch.svg" />
                        <h6>Couches</h6>
                    </div>
                    <div class="essential-item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/loveseat.svg" />
                        <h6>Love Seats</h6>
                    </div>
                    <div class="essential-item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/tables.svg" />
                        <h6>Tables</h6>
                    </div>
                    <div class="essential-item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/chairs.svg" />
                        <h6>Chairs</h6>
                    </div>
                    <div class="essential-item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/dresser.svg" />
                        <h6>Dressers</h6>
                    </div>
                    <div class="col-sm-12 pt-4">
                        <p>We offer FREE weekly pick-ups in Wake County for the 5 core building blocks of any home. Please fill out our Essentials Pick-Up Donation Form and we’ll be in contact shortly!</p>
                        <p class="pb-3">Please note, free pick up scheduling is first come, first served. Read more here.</p>
                        <a href="" class="btn btn-green">Schedule a Free Pickup</a> 
                    </div>
                </div>
            </div>
        </div>
        <div id="home-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col left">
                    </div>
                    <div class="col right">
                        <h4 class="text-center align-middle">Community support makes new beginnings possible</h4>
                        <div class="text-center">
                            <a href="" class="btn btn-primary my-3">Give today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>     
</div><!-- #main-content -->

<?php get_footer(); 