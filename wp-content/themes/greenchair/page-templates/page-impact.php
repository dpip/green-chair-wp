<?php
/*
Template Name: Impact Page
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
        <div class="jumbotron stat-banner" style="background-image: url(<?php echo get_field('impact_section_three_banner'); ?>);">
            <div class="container">
                    <h1 style="border-bottom: 4px solid white; display: inline-block; font-size: 3.5rem;"><div style="margin: 0 auto;"><strong><?php echo the_field('impact_section_three_banner_title_top'); ?></strong></div></h1>
                    <h4><?php echo the_field('impact_section_three_banner_title_bottom'); ?></h4>
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
                    <div class="graphic" style="background-image: url(<?php echo get_field('impact_section_three_row_three_graphic'); ?>);"></div>
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
                    <i class="fas fa-hand-holding-heart"></i>
                </div>
            </div>
            <div class="row impact-five">
                <div class="col impact-graphic">
                <i class="fas fa-hands-helping"></i>
                </div>
                <div class="col impact-breakdown">
                <h1><?php echo the_field('impact_section_three_row_five_title'); ?></h1>
                <h4 class="teal"><?php echo the_field('impact_section_three_row_five_content'); ?></h4>
                </div>
            </div>
        </div>
        </div>
        <!-- <div class="village-banner" style="background-image: url(<?php echo get_field('impact_village_banner'); ?>);"></div> -->
        <div class="testimony-banner">
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
        <div class="container" style="padding-top: 40px;">
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


                        echo '<div class="col col-4 col-md-4 col-sm-6">';
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
         </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div><!-- #main-content -->

<?php get_footer(); 
