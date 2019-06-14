<?php
/*
Template Name: Who We Serve Page
 */
get_header(); ?>

<div id="main-content" class="image-leadspace contact">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php $backgroundimage = get_the_post_thumbnail_url(get_the_ID(), 'full', true); ?>
    <div class="jumbotron" style="background-image:url(<?php echo $backgroundimage ?>); background-position: center bottom;">
        <div class="container">
            <div class="row py-5">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h1 class="display-4 my-5"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
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
                    echo '<div class="col-6 careers-volunteer careers-container">';
                            echo '<h2 class="green">Nothing Jumping Out?</h2>';
                            echo '<p style="padding-bottom: 20px;">If the current positions do not seem like the best fit you are more than welcome to Join Team Green Chair as a volunteer!</p>';
                            echo '<a href="/get-involved" class="btn btn-green">Get Involved</a>';
                    echo '</div>';
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
    </div>  
    <?php endwhile; ?>
    <?php endif; ?>
</div><!-- #main-content -->

<?php get_footer(); 