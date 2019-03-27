<?php
/*
Template Name: Careers Page
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
    <div class="container">
    <h4 class="careers-rule">Our mission <div class="horizontal-rule"></div></h4>
        <div class="row">
            <div class="col-xs-12 col-md-12 careers-intro">
                <?php the_content(); ?>
                <h3>Working together to provide everyone the comforts of home</h3>
                <p>It’s an audacious, incredibly rewarding mission that our increasingly diverse team is dedicated to achieving. Interested applicants please email cover letter and resume to Suzi Bevacqua at suzi@thegreenchair.org.</p>
            </div>
        </div>
    </div>  
    <div class="container">
        <h4 class="careers-rule careers-available-title">Available roles <div class="horizontal-rule"></div></h4>
        <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6 careers-intro career-container">
        <h2>Director of Program Services</h2>
        <p>Contribute insights and expertise to the operations, direction, and goals of The Green Chair Project</p>
        <a href="">View Details »</a>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6 careers-intro career-container">
        <h2>Volunteer Services</h2>
        <p>Contribute insights and expertise to the operations, direction, and goals of The Green Chair Project</p>
        <a href="">View Details »</a>
        </div>
       
    </div>  
    
    <?php endwhile; ?>
    <?php endif; ?>
</div><!-- #main-content -->

<?php get_footer(); 