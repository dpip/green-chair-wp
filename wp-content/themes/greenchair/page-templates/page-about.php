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
        <div class="container staff-container">
            <div class="row staff-wrap">
            <?php
                                //Staff Items
                                $the_query = new WP_Query( 
                                    array(
                                        'post_type' => 'team-item',
                                        'posts_per_page' => -1,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'team_category',
                                                'field'    => 'slug',
                                                'terms'    => 'staff',
                                            ),
                                        )
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
                                        $email = get_field('email');
                                        $linkedin = get_field('linkedin_url');
                                        $category = get_field('team_category');
                    

                                        echo '<div class="staff-item col-xs-12 col-sm-12 col-md-6 col-lg-4">';
                                                    echo '<div class="img-wrap">';
                                                        if (has_post_thumbnail()) {
                                                            echo $img; 
                                                        } else {
                                                            echo '<div class="staff-placeholder"><h4>' . $title . '</h4></div>';
                                                        }
                                                    echo '</div>';
                                                echo '</a>';
                                                echo '<div class="content-block">';
                                                    echo '<div class="title-container">';
                                                        if (has_post_thumbnail()) {
                                                            echo '<h6>'. $title . '</h6>';
                                                        } else {
                                                            echo '<h6 class="placeholder">'. $title . '</h6>';
                                                        }
                                                        echo '<p>'. $position . '</p>';
                                                    echo '</div>';
                                                    echo '<p>Phone: ' . $phone . '</p>';
                                                    echo '<p>Email: ' . $email . '</p>';
                                                    echo '<p><a class="fab fa-linkedin" href ="'. $linkedin .'"></a></p>';
                                                    echo '<p><a class="" href ="">More about ' . $title . ' »</a></p>';
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
        <div class="container board-container">
            <h2>Board of Directors</h2>
            <div class="row staff-wrap">
            <?php
                                //Staff Items
                                $the_query = new WP_Query( 
                                    array(
                                        'post_type' => 'team-item',
                                        'posts_per_page' => -1,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'team_category',
                                                'field'    => 'slug',
                                                'terms'    => 'board',
                                            ),
                                        )
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

                                        echo '<div class="board-item col-xs-12 col-sm-12 col-md-6 col-lg-4">';
                                                echo '</a>';
                                                echo '<div class="content-block">';
                                                    echo '<div class="title-container">';
                                                        echo '<h6>'. $title . '</h6>';
                                                        if (!empty($company)) {
                                                            echo '<p>'. $position . ', <span class="board-company">'. $company . '</span></p>';
                                                        } else {
                                                            echo '<p>'. $position . '</p>';
                                                        }
                                                    echo '</div>';
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
        <div class="container financials-container">
            <h2>Financials</h2>
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <p>The Green Chair Project is committed to helping our neighbors in need, in socially and fiscally responsible ways. Learn more about our finances by viewing the reports below.</p>
                </div>
            </div>
            <div class="row financials-row">
                <div class="col-sm-12 col-md-6 col-lg-4 financials-item">
                    <h6>Letter of Determination</h6>
                    <p>The Green Chair Project is a registered 501c(3) organization and was founded in 2010.</p>
                    <a href="https://n17.daknoadmin.com/site_data/thegreenchair/editor_assets/501(c)(3)%20letter.pdf">View our IRS Letter of Determination »</a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 financials-item">
                    <h6>Audited Financials</h6>
                    <p>The Green Chair Project performed its first annual independent audit that includes financial position, compliance information, and related statements of activities.</p>
                    <a href="https://www.thegreenchair.org/site_data/thegreenchair/editor_assets/The_Green_Chair_Project_Audited_Financial_Statements_2017.pdf">View our most recent Audited Financial Statements »</a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 financials-item">
                    <h6>IRS Form 990</h6>
                    <p>The Green Chair Project files this form to provide the IRS with the information required by section 6033.   </p>
                    <a href="https://www.thegreenchair.org/site_data/thegreenchair/editor_assets/2017_990.pdf">View our most recent 990 »</a>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 75px;">
                <a href="/get-involved" class="btn btn-primary">Get Involved</a>
                <a href="/donate" class="btn btn-primary" style="margin-left: 10px;">Donate Now</a>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div><!-- #main-content -->

<?php get_footer(); 