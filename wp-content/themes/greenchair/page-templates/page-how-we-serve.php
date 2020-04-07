<?php
/*
Template Name: How We Serve Page
 */
get_header(); ?>

<div id="main-content" class="impact-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="jumbotron jumbo-impact sepia d-flex flex-column justify-content-center align-items-center" style="background-image: url(<?php echo get_field('impact_image_top'); ?>);">
            <div class="container">
                <div class="column">
                    <h1 class="my-3 display-3"><?php echo get_the_title(); ?></h1>
                    <div class="container">
                    <div class="d-flex row">
                        <div class="col breakdown-block block-three">
                            <div class="d-flex"><h2 data-impactnum="<?php echo get_field('impact_column_one_top'); ?>" class="timerOne"></h2><h2 class="green impact-plus">+</h2></div>
                            <div>
                                <p><?php echo get_field('impact_column_one_bottom'); ?></p>
                                <p class="impact-accent"><span class="accentOne"></span></p>
                             </div>
                        </div>
                        <div class="col breakdown-block block-three">
                        <div class="d-flex"><h2 data-impactnum="<?php echo get_field('impact_column_two_top'); ?>" class="timerTwo"></h2><h2 class="green impact-plus">+</h2></div>
                            <div>
                                <p><?php echo get_field('impact_column_two_bottom'); ?></p>
                                <p class="impact-accent"><span class="accentTwo"></span></p>
                            </div>      
                        </div>
                        <div class="col breakdown-block block-three">
                        <div class="d-flex"><h2 data-impactnum="<?php echo get_field('impact_column_three_top'); ?>" class="timerThree"></h2><h2 class="green impact-plus">+</h2></div>
                            <div>
                                <p><?php echo get_field('impact_column_three_bottom'); ?></p>
                                <p class="impact-accent"><span class="accentThree"></span></p>
                            </div>
                        </div>
                    </div>
                 </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-flex row impact-duo justify-content-center align-items-center">
            <div class="col d-flex flex-column justify-content-center align-items-center">
            <!-- <i class="fas fa-chair"></i> -->
            <span>
                <h1 style="border-bottom: 4px solid #8cc441; padding-bottom: 10px; font-weight: bold;"><?php echo the_field('impact_section_two_lead_one'); ?></h1>
                <h4 style="font-size: 1.75rem;"><?php echo the_field('impact_section_two_content_one'); ?></h4>
            </span>
            </div>
            <div class="col d-flex justify-content-center align-items-center duo-icon-top">
            <!-- <i class="fas fa-chair"></i> -->
            <!-- <div>
                <i class="fas fa-couch"></i>
            </div> -->
            <div class="impact-chart">
            <svg viewBox="0 0 64 64" class="pie">
                <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 75.3 100">
                </circle>
                <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 15.9 100; stroke: #8cc441; stroke-dashoffset: -85.3; animation-delay: 0.25s">
                </circle>
                <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 19.3 100; stroke: inherit; stroke-dashoffset: -95.2; animation-delay: 0.5s">
                </circle>
                <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 1.4 100; stroke: inherit; stroke-dashoffset: -97.5; animation-delay: 0.75s">
                </circle>
                <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 1.1 100; stroke: inherit; stroke-dashoffset: -98.9; animation-delay: 1s">
                </circle>
            </svg>
            <div class="chart-house chart-house-one" style="top: 80px; left: 220px; color: #18a79d; !important">
                <i class="fas fa-home" style="font-size: 40px; color: white;"></i>
            </div>
            <div class="chart-house chart-house-two" style="top: 50px; left: 120px;">
                <i class="fas fa-home"></i>
            </div>
            <div class="chart-house chart-house-three" style="top: 110px; left: 60px;">
                <i class="fas fa-home"></i>
            </div>
            <div class="chart-house chart-house-four" style="top: 155px; left: 40px;">
                <i class="fas fa-home"></i>
            </div>
            <div class="chart-house chart-house-five" style="top: 205px; left: 90px;">
                <i class="fas fa-home"></i>
            </div>
            <div class="chart-house chart-house-six" style="top: 210px; left: 200px;">
                <i class="fas fa-home"></i>
            </div>
            </div>
            </div>
            <div class="col impact-duo-content">
                <h1 class="green"><?php echo the_field('impact_section_two_lead_two'); ?></h1>    
                <h4 class=""><?php echo the_field('impact_section_two_content_two'); ?></h4>
            </div>
        </div>
        </div>
        <!-- <div class="jumbotron stat-banner" style="background-image: url(<?php echo get_field('impact_section_three_banner'); ?>);">
            <div class="container">
                    <h1 style="border-bottom: 4px solid white; display: inline-block; font-size: 3.5rem;"><div style="margin: 0 auto;"><strong><?php echo the_field('impact_section_three_banner_title_top'); ?></strong></div></h1>
                    <h4><?php echo the_field('impact_section_three_banner_title_bottom'); ?></h4>
            </div>
        </div> -->
        <div class="testimony-banner" style="margin-top: 60px;">
            <div class="container d-flex">
                <div class="col testimony-banner-img-wrap">
                    <div class="testimony-banner-img d-flex" style="background-image: url(<?php echo get_field('impact_testimony_banner_image'); ?>);">
                        <p><?php echo get_field('impact_testimony_banner_image_caption'); ?></p>
                    </div>
                </div>
                <div class="col quote d-flex ">
                    <h4 style="font-style: italic;"><?php echo the_field('impact_section_four_banner_title'); ?></h4>
                </div>
            </div>
        </div>
        <div style="background-color: #F8FAFC">
        <div class="container stat-container">
            <div class="row impact-one">
                <div class="col impact-graphic">
                <i class="fas fa-couch"></i>
                </div>
                <div class="col impact-breakdown">
                <h1><?php echo the_field('impact_section_three_row_one_title'); ?></h1>
                <h4 class="teal"><?php echo the_field('impact_section_three_row_one_content'); ?></h4>
                </div>
            </div>
            <div class="row impact-two">
                <div class="col impact-breakdown">
                <h1><?php echo the_field('impact_section_three_row_two_title'); ?></h1>
                <h4 class="teal"><?php echo the_field('impact_section_three_row_two_content'); ?></h4>
                </div>
                <div class="col impact-graphic">
                </div>
            </div>
            <div class="row impact-three">
                <div class="col impact-graphic">
                    <!-- <div class="graphic" style="background-image: url(<?php echo get_field('impact_section_three_row_three_graphic'); ?>);"></div> -->
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player
    src="https://assets5.lottiefiles.com/packages/lf20_KqyKvM.json"  background="transparent"  speed="0.1"  style="width: 300px; height: 300px;"  loop  autoplay >
</lottie-player>
                </div>
                <div class="col impact-breakdown">
                <h1><?php echo the_field('impact_section_three_row_three_title'); ?></h1>
                <h4 class="teal"><?php echo the_field('impact_section_three_row_three_content'); ?></h4>
                </div>
            </div>
            <div class="row impact-four">
                <div class="col impact-breakdown">
                <h1><?php echo the_field('impact_section_three_row_four_title'); ?></h1>
                <h4 class="teal"><?php echo the_field('impact_section_three_row_four_content'); ?></h4>
                </div>
                <div class="col impact-graphic">
                    <!-- <i class="fas fa-hand-holding-heart"></i> -->
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player
    src="https://assets7.lottiefiles.com/packages/lf20_kUtZZs.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop controls autoplay >
</lottie-player>
                </div>
            </div>
            <div class="row impact-five">
                <div class="col impact-graphic">
                <!-- <i class="fas fa-hands-helping"></i> -->
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player
                        src="https://assets6.lottiefiles.com/packages/lf20_HjyVnF.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay >
                    </lottie-player>
                </div>
                <div class="col impact-breakdown">
                <h1><?php echo the_field('impact_section_three_row_five_title'); ?></h1>
                <h4 class="teal"><?php echo the_field('impact_section_three_row_five_content'); ?></h4>
                </div>
            </div>
             <div class="row impact-six">
                <div class="col impact-breakdown">
                <h1>$10,000+ RAISED</h1>
                <h4 class="teal">by companies and organizations who help support The Green Chair!</h4>
                </div>
                <div class="col impact-graphic">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player
    src="https://assets2.lottiefiles.com/temp/lf20_5zyRML.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay >
</lottie-player>
                </div>
            </div>
        </div>
        </div>

        <!-- get involved start -->

        <!-- <div id="supporters-list">
            <div class="container">
                <div class="row">    
                    <div class="col-sm-12 d-inline-flex">
                        <h1 class="mt-4 mb-3">Our Partners<div class="horizontal-rule"></div> </h1>
                    </div>                
                    <?php
                        $the_query = new WP_Query( 
                            array(
                                'post_type' => 'supporters', 
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'supporter_category',
                                        'field'    => 'slug',
                                        'terms'    => 'tenthousand-plus',
                                    ),
                                ),
                            ) 
                        );

                        if ( $the_query->have_posts() ) {
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                                $id = get_the_ID();
                                $img = get_the_post_thumbnail($id, 'full', array('class' => 'img-fluid mx-auto d-block'));
                                $title = get_the_title($id);
                                $link = get_field('company_website');

                                echo '<div class="col-lg-3 my-2 d-flex flex-column justify-content-center align-items-center">';
                                    if(!empty($img)){
                                        if(!empty($link)){
                                            echo '<a href="' . $link . '" target="_blank">';
                                                echo $img;
                                            echo '</a>';
                                        }else{
                                            echo $img;
                                        }
                                    }else{
                                        echo '<p>'. $title . '</p>';
                                    }
                                echo '</div>';
                            }
                            
                            wp_reset_postdata();
                        } else {
                           echo '<p>Unfortunately, we have no supporters at this level.</p>';
                        }
                            
                    ?>

                    <div class="col-sm-12 d-inline-flex pt-4">
                        <h1 class="mt-4 mb-3">Government Support<div class="horizontal-rule"></div></h1>
                    </div>                
                    <?php
                        $the_query = new WP_Query( 
                            array(
                                'post_type' => 'supporters', 
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'supporter_category',
                                        'field'    => 'slug',
                                        'terms'    => 'government-support',
                                    ),
                                ),
                            ) 
                        );

                        if ( $the_query->have_posts() ) {
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                                $id = get_the_ID();
                                $img = get_the_post_thumbnail($id, 'full', array('class' => 'img-fluid mx-auto d-block'));
                                $title = get_the_title($id);
                                $link = get_field('company_website');
                                $content = get_field('disclaimer_text');

                                echo '<div class="col-lg-3 my-2 d-flex flex-column justify-content-center align-items-center">';
                                    if(!empty($img)){
                                        if(!empty($link)){
                                            echo '<a href="' . $link . '" target="_blank">';
                                                echo $img;
                                            echo '</a>';
                                        }else{
                                            echo $img;
                                        }
                                    }else{
                                        echo '<p>'. $title . '</p>';
                                    }

                                    if(!empty($content)){
                                        echo '<p>'. $content . '</p>';
                                    }
                                echo '</div>';
                            }
                            
                            wp_reset_postdata();
                        }    
                    ?>

                    <div class="col-sm-12 d-inline-flex">
                        <h1 class="mt-4 mb-3">Foundation and Community Grants<div class="horizontal-rule"></div></h1>
                    </div>                
                    <?php
                        $the_query = new WP_Query( 
                            array(
                                'post_type' => 'supporters', 
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'supporter_category',
                                        'field'    => 'slug',
                                        'terms'    => 'foundation-and-community-grants',
                                    ),
                                ),
                            ) 
                        );

                        if ( $the_query->have_posts() ) {
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                                $id = get_the_ID();
                                $img = get_the_post_thumbnail($id, 'full', array('class' => 'img-fluid mx-auto d-block'));
                                $title = get_the_title($id);
                                $link = get_field('company_website');
                                $content = get_field('disclaimer_text');

                                echo '<div class="col-lg-3 my-2 d-flex flex-column justify-content-center align-items-center">';
                                    if(!empty($img)){
                                        if(!empty($link)){
                                            echo '<a href="' . $link . '" target="_blank">';
                                                echo $img;
                                            echo '</a>';
                                        }else{
                                            echo $img;
                                        }
                                    }else{
                                        echo '<p>'. $title . '</p>';
                                    }

                                    if(!empty($content)){
                                        echo '<p>'. $content . '</p>';
                                    }
                                echo '</div>';
                            }
                            
                            wp_reset_postdata();
                        } 
                            
                    ?>


                    <div class="col-sm-12 d-inline-flex pt-4 pb-2">
                        <h1 class="mt-4 mb-3">Workplace Campaigns<div class="horizontal-rule"></div></h1>
                    </div>                
                    <?php
                        $the_query = new WP_Query( 
                            array(
                                'post_type' => 'supporters', 
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'supporter_category',
                                        'field'    => 'slug',
                                        'terms'    => 'workplace-campaigns',
                                    ),
                                ),
                            ) 
                        );

                        if ( $the_query->have_posts() ) {
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                                $id = get_the_ID();
                                $title = get_the_title($id);
                                
                                echo '<div class="col-lg-3">';
                                        echo '<p><strong>'. $title . '</strong></p>';
                                echo '</div>';
                            }
                            
                            wp_reset_postdata();
                        } 
                            
                    ?>


                    <div class="col-sm-12 d-inline-flex pt-3">
                        <h1 class="mt-4 mb-3">Faith Partners<div class="horizontal-rule"></div></h1>
                    </div>                
                    <?php
                        $the_query = new WP_Query( 
                            array(
                                'post_type' => 'supporters', 
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'supporter_category',
                                        'field'    => 'slug',
                                        'terms'    => 'faith-partners',
                                    ),
                                ),
                            ) 
                        );

                        if ( $the_query->have_posts() ) {
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                                $id = get_the_ID();
                                $title = get_the_title($id);
                                
                                echo '<div class="col-lg-3 my-2">';
                                        echo '<p><strong>'. $title . '</strong></p>';
                                echo '</div>';
                            }
                            
                            wp_reset_postdata();
                        } 
                            
                    ?>
                </div>
            </div>
        </div> -->

        
        <div class="container" style="margin-bottom: 60px;">
            <h1 style="margin-top: 60px; margin-bottom: 60px;">Organizations we support</h1>
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
    </div>  

        <!-- get involved end -->


        <!-- <div class="village-banner" style="background-image: url(<?php echo get_field('impact_village_banner'); ?>);"></div> -->
        
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div><!-- #main-content -->
<!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player
    src="https://assets1.lottiefiles.com/datafiles/HlIGYbSpHNmLYD5/data.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" autoplay >
</lottie-player> -->

<?php get_footer(); 
