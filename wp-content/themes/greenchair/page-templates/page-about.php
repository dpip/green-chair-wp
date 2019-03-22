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
        <div class="jumbotron jumbo-staff d-flex flex-column justify-content-center align-items-center" style="background-image: url(http://greenchair.loc:8888/wp-content/uploads/2019/03/Staff_Photo_101018.jpg);">
            <div class="container">
                <div class="column">
                <h1 class="my-3 display-3">Our Staff</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row staff-wrap">
            <?php
                                //Staff Items
                                $the_query = new WP_Query( 
                                    array(
                                        'post_type' => 'team-item',
                                        'posts_per_page=50'
                                    ) 
                                );

                                if ( $the_query->have_posts() ) {
                                    while ( $the_query->have_posts() ) {
                                        $the_query->the_post();
                                        $id = get_the_ID();
                                        $img = get_the_post_thumbnail($id, 'full', array('class' => 'img-fluid center-block'));
                                        $title = get_the_title($id);
                                        $position = get_field('position_title');
                                        $company = get_field('company');
                                        $phone = get_field('phone_number');
                                        $linkedin = get_field('email');
                                        $linkedin = get_field('linkedin_url');
                                        $category = get_field('team_category');

                                        echo '<div class="staff-item col-xs-12 col-sm-12 col-md-6 col-lg-4">';
                                                    echo '<div class="img-wrap">';
                                                        echo $img;
                                                    echo '</div>';
                                                echo '</a>';
                                                echo '<div class="content-block">';
                                                    echo '<div class="title-container">';
                                                        echo '<h5>'. $title . '</h5>';
                                                        echo '<p>'. $position . '</p>';
                                                    echo '</div>';
                                                    echo '<p>'. $company . '</p>';
                                                    echo '<p>Phone:' . $phone . '</p>';
                                                    echo '<p>Email:' . $email . '</p>';
                                                    echo '<p>' . $linkedin . '</p>';
                                                echo '</div>';
                                        echo '</div>';
                                    }
                                    
                                    wp_reset_postdata();
                                } else {
                                    '<p>Unfortunately, we have no news at this time.</p>';
                                }
                            ?>
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