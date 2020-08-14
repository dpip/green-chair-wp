<?php
/*
Template Name: Our Story aka main about page
 */
get_header(); ?>

<div id="main-content" class="about-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="jumbotron jumbo-about d-flex flex-column justify-content-center align-items-center" style="background-image: url('<?php echo get_field('about_image_top'); ?>');">
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
                <div class="col-sm-12 col-md-12 col-lg-6">
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
        <div class="container" style="margin-top: 50px; padding-bottom: 50px;">
            <div class="col-sm-12 d-inline-flex" style="padding: 0rem 0rem 2rem 0rem;">
                        <h2><?php echo get_field('story_heading'); ?><div class="horizontal-rule"></div> </h2>
                    </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-7 content">
                    <?php the_field('about_story_section'); ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 content">
                    <div class="founder-img" style="background-image: url('<?php echo get_field('about_image_founder'); ?>');"></div>
                </div>
            </div>
        </div>
        <!-- <div class="container" style="margin-top: 50px;">
            <h2 style="padding: 0rem 0rem 2rem 0rem;">Who we serve</h2>
        <div class="row">
        <?php
                //Agency Partner Items

                $the_query = new WP_Query( 
                    array(
                        'post_type' => 'agency-partners-item',
                        'posts_per_page' => -1
                    ) 
                );

                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        $id = get_the_ID();
                        $logo = get_the_post_thumbnail($id, 'full', array('class' => 'img-fluid mx-auto d-block'));
                        $title = get_the_title($id);
                        $partnerName = get_field('partner_name');
                        $link = get_field('partner_link');

                        echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 agency-partners-container">';
                        echo '<a href="'. $link .'"><img alt="" src="'. $logo .'"></img></a>';
                            echo '<p class="careers-available-title">' . $partnerName . '</p>';
                        echo '</div>';

                    }
                    wp_reset_postdata();
                } else {
                    echo '<div class="col-9">';
                        echo '<h4 class="fallback-header">Thank you for your interest in working with The Green Chair Project!</h4>';
                    echo '</div>';
                    echo '<div class="col-9">';
                        echo '<p class="fall-back-content">Currently we do not have any staff openings available, but we always have room for more volunteers!  Take a look at our volunteer page and come get to know us.  We look forward to seeing you soon!</p>';
                        echo '<a href="/get-involved" class="btn btn-green">Get Involved</a>';
                    echo '</div>';
                }
            ?>

        </div>
    </div>   -->
        <!-- <div class="container financials-container">
            <h2 style="padding: 0rem 0rem 2rem 0rem;"><?php echo the_field('about_financials_heading'); ?></h2>
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <p><?php echo the_field('about_financials_lead_text'); ?></p>
                </div>
            </div>
            <div class="row financials-row">
                <div class="col-sm-12 col-md-6 col-lg-4 financials-item">
                    <h6>Letter of Determination<div class="horizontal-rule"></div></h6>
                    <p>The Green Chair Project is a registered 501c(3) organization and was founded in 2010.</p>
                    <a href="https://n17.daknoadmin.com/site_data/thegreenchair/editor_assets/501(c)(3)%20letter.pdf">View our IRS Letter of Determination »</a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 financials-item">
                    <h6>Audited Financials<div class="horizontal-rule"></div></h6>
                    <p>The Green Chair Project performed its first annual independent audit that includes financial position, compliance information and related statements of activities.</p>
                    <a href="https://www.thegreenchair.org/site_data/thegreenchair/editor_assets/The_Green_Chair_Project_Audited_Financial_Statements_2017.pdf">View our most recent Audited Financial Statements »</a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 financials-item">
                    <h6>IRS Form 990<div class="horizontal-rule"></div></h6>
                    <p>The Green Chair Project files this form to provide the IRS with the information required by section 6033.   </p>
                    <a href="https://www.thegreenchair.org/site_data/thegreenchair/editor_assets/2017_990.pdf">View our most recent 990 »</a>
                </div>
            </div>
        </div> -->
    <?php endwhile; ?>
    <?php endif; ?>
</div><!-- #main-content -->

<?php get_footer(); 

