<!-- An area to lay functional code that may be of use later to temporary rest -->

<!-- Staff -->

<div class="jumbotron jumbo-staff d-flex flex-column justify-content-center align-items-center" style="background-image: url(<?php echo get_field('about_image_staff_main'); ?>);">
            <div class="container">
                <div class="column">
                <h1 class="my-3 display-3"><?php echo the_field('about_team_heading'); ?></h1>
                </div>
            </div>
        </div>
        <div class="container staff-container">
            <h2 style="padding: 2rem 0rem 2rem 0rem;"><?php echo the_field('about_staff_heading'); ?></h2>
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
                                        $img = get_the_post_thumbnail($id, 'full', array('class' => 'img-fluid mx-auto d-block'));
                                        $title = get_the_title($id);
                                        $firstname = explode(' ',trim($title));
                                        $position = get_field('position_title');
                                        $company = get_field('company');
                                        $phone = get_field('phone_number');
                                        $email = get_field('email');
                                        $linkedin = get_field('linkedin_url');
                                        $category = get_field('team_category');
                                        $link = get_the_permalink($id);            

                                        echo '<a href="'. $link .'" class="staff-item col-xs-12 col-sm-3 col-md-4 col-lg-3">';
                                                    echo '<div class="img-wrap">';
                                                        if (has_post_thumbnail()) {
                                                            echo $img; 
                                                        } else {
                                                            echo '<div class="staff-placeholder"><h4 class="title-staff">' . $title . '</h4></div>';
                                                        }
                                                    echo '</div>';
                                                
                                                echo '<div class="content-block d-flex">';
                                                    echo '<div class="title-container">';
                                                        if (has_post_thumbnail()) {
                                                            echo '<h6 class="title-staff">'. $title . '<div class="horizontal-rule"></div></h6>';
                                                        } else {
                                                            echo '<h6 class="placeholder">'. $title . '</h6>';
                                                        }
                                                        echo '<p class="staff-position"><strong>'. $position . '</strong></p>';
                                                    echo '</div>';
                                                echo '</div>';
                                        echo '</a>';
                                    }                                   
                                    wp_reset_postdata();
                                } else {
                                    echo '<p>For Staff information you can contact The Green Chair directly</p>';
                                }
                            ?>
            </div>
        </div>

<!-- END Staff -->

<!-- Board -->

<div class="container board-container">
            <h2 style="padding: 0rem 0rem 2rem 0rem;"><?php echo the_field('about_board_heading'); ?></h2>
            <div class="row staff-wrap">
            <?php
                //Board Items
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
                        $img = get_the_post_thumbnail($id, 'full', array('class' => 'img-fluid mx-auto d-block'));
                        $title = get_the_title($id);
                        $position = get_field('position_title');
                        $company = get_field('company');
                        $phone = get_field('phone_number');
                        $linkedin = get_field('email');
                        $category = get_field('team_category');
                        $link = get_the_permalink($id);

                        echo '<a href="'. $link .'" class="staff-item col-xs-12 col-sm-3 col-md-4 col-lg-3">';
                                    echo '<div class="img-wrap">';
                                        if (has_post_thumbnail()) {
                                            echo $img; 
                                        } else {
                                            echo '<div class="staff-placeholder title-board"><h4 class="title-board" style="padding: 4px;">' . $title . '</h4></div>';
                                        }
                                    echo '</div>';
                                echo '<div class="content-block d-flex">';
                                    echo '<div class="title-container">';
                                        if (has_post_thumbnail()) {
                                            echo '<h6 class="title-board" >'. $title . '<div class="horizontal-rule"></div></h6>';
                                        } 
                                        if (!empty($company)) {
                                            echo '<p><strong>'. $position . '</strong>, <span class="board-company">'. $company . '</span></p>';
                                        } else {
                                            echo '<p><strong>'. $position . '</strong></p>';
                                        }
                                    echo '</div>';
                                echo '</div>';
                        echo '</a>';
                    }
                    wp_reset_postdata();
                } else {
                    echo '<p>Unfortunately, we have no board of directors at this time.</p>';
                }
            ?>
            </div>
        </div>

<!-- END Board -->


<!-- "What's going on at green chair?" social media feed -->

<!-- <div class="container" style="padding-top: 40px;">
            <h1>What others are saying about The Green Chair</h1>
           
            <div class="row">            
                <?php
                //Board Items
                $the_query = new WP_Query( 
                    array(
                        'post_type' => 'testimony-item',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'testimony_category',
                                'field'    => 'slug',
                                'terms'    => 'impact-testimony',
                            ),
                        )
                    ) 
                );

                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        $id = get_the_ID();
                        $img = get_the_post_thumbnail($id, 'full', array('class' => 'img-fluid mx-auto d-block'));
                        $title = get_the_title($id);
                        $quote = get_the_content($id);
                        $category = get_field('team_category');

                        echo '<div class="col col-md-4 col-sm-12 col-xs-12">';
                            echo '<div class="testimony-card">';
                                echo '<div class="testimony-card-top">';
                                echo '<p class="testimony-quote"><span>"</span>' . $quote . '<span>"</span></p>';
                                echo '</div>';
                                echo '<div class="testimony-card-bottom woodbackground">';
                                    echo '<div class="testimony-avatar">' . $img . '</div>';
                                    echo '<p class="testimony-name"><span class="">&ndash;</span> ' . $title . '</p>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                    wp_reset_postdata();
                } else {
                    echo '<p>Check out our Facebook page!</p>';
                }
            ?>
            </div>
         </div> -->

         <!-- End social feed -->




         <!-- Financials -->
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
        <!-- End financials -->