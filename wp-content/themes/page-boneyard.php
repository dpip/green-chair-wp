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
