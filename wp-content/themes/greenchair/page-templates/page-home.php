<?php
/*
Template Name: Home Page
 */
get_header(); ?>

<div id="main-content" class="home-page">
    <div id="fb-root"></div>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $backgroundimage = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
        <div class="jumbotron d-flex flex-column justify-content-center align-items-center" style="background-image: url(<?php echo $backgroundimage ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 ">
                        <h1 class="my-3 display-3"><?php echo get_the_title(); ?></h1>
                        <?php the_content(); ?>
                        <a href="<?php the_field('home_cta_url'); ?>" class="btn btn-white"><?php the_field('home_cta_text'); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="features">
            <div class="container py-4">
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-12 col-md-3 feature">
                        <div class="inner">
                            <div class="img-container">
                                <img src="<?php the_field('home_block_1_image'); ?>" alt="<?php the_field('home_block_1_text'); ?> image" />
                            </div>
                            <h6><?php the_field('home_block_1_text'); ?></h6>
                            <p><?php the_field('home_block_1_description'); ?></p>
                            <a href="<?php the_field('home_block_1_cta_url'); ?>" class="btn btn-primary"><?php the_field('home_block_1_cta_text'); ?></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 feature">
                        <div class="inner">
                            <div class="img-container">
                                <img src="<?php the_field('home_block_2_image'); ?>" alt="<?php the_field('home_block_2_text'); ?> image" />
                            </div>
                            <h6><?php the_field('home_block_2_text'); ?></h6>
                            <p><?php the_field('home_block_2_description'); ?></p>
                            <a href="<?php the_field('home_block_2_cta_url'); ?>" class="btn btn-primary"><?php the_field('home_block_2_cta_text'); ?></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 feature">
                        <div class="inner">
                            <div class="img-container">
                                <img src="<?php the_field('home_block_3_image'); ?>" alt="<?php the_field('home_block_3_text'); ?> image" />
                            </div>
                            <h6><?php the_field('home_block_3_text'); ?></h6>
                            <p><?php the_field('home_block_3_description'); ?></p>
                            <a href="<?php the_field('home_block_3_cta_url'); ?>" class="btn btn-primary"><?php the_field('home_block_3_cta_text'); ?></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 feature">
                        <div class="inner">
                            <div class="img-container">
                                <img src="<?php the_field('home_block_4_image'); ?>" alt="<?php the_field('home_block_4_text'); ?> image" />
                            </div>
                            <h6><?php the_field('home_block_4_text'); ?></h6>
                            <p><?php the_field('home_block_4_description'); ?></p>
                            <a href="<?php the_field('home_block_4_cta_url'); ?>" class="btn btn-primary"><?php the_field('home_block_4_cta_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 py-5">
                        <div class="inner">
                            <?php the_field('middle_section_text'); ?>
                            <a href="<?php the_field('middle_section_cta_url'); ?>" class="btn btn-primary"><?php the_field('middle_section_cta'); ?></a>
                        </div>
                    </div>
                    <div class="col-md-7 py-5">
                        <div class="videoWrapper">
                            <?php the_field('middle_section_video'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="news-events">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2>News</h2>
                        <div class="row">
                            <?php
                                //News Items
                                $the_query = new WP_Query( 
                                    array(
                                        'post_type' => 'news-item', 
                                        'posts_per_page' => 4
                                    ) 
                                );

                                if ( $the_query->have_posts() ) {
                                    while ( $the_query->have_posts() ) {
                                        $the_query->the_post();
                                        $id = get_the_ID();
                                        $img = get_the_post_thumbnail($id, 'full', array('class' => 'img-fluid center-block'));
                                        $title = get_the_title($id);
                                        $link = get_the_permalink($id);
                                        $content = wp_trim_words(get_the_content(), 30, '...');

                                        echo '<div class="news-item col-xs-12 col-sm-12 col-md-6">';
                                            echo '<div class="inner">';
                                                echo '<a href="' . $link .'">';
                                                    echo '<div class="img-wrap">';
                                                        echo $img;
                                                    echo '</div>';
                                                echo '</a>';
                                                echo '<div class="content-block">';
                                                    echo '<h5>'. $title . '</h5>';
                                                    echo '<p>' . $content . '</p>';
                                                    echo '<a href="' . $link .'" class="learn-more">Continue reading &raquo; </a>';
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</div>';
                                    }
                                    
                                    wp_reset_postdata();
                                } else {
                                    '<p>Unfortunately, we have no news at this time.</p>';
                                }
                            ?>
                            <div class="col-sm-12">
                                <a href="/news" class="btn btn-primary see-all">See all news</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h2>Upcoming Events</h2>
                        <div class="row">
                            <?php
                                //Event Items
                                $today = time();
                                $the_query = new WP_Query( 
                                    array(
                                        'post_type'=>'events-item', 
                                        'posts_per_page' => 3,  
                                        'orderby' => 'meta_value', 
                                        'order' => 'ASC',
                                        'meta_query' => array(
                                            array(
                                                'key'     => 'events_end_date_edited',
                                                'value'   => $today,
                                                'compare' => '>='
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
                                        $link = get_the_permalink($id);
                                        $content = wp_trim_words(get_the_content(), 30, '...');
                                        $date = get_post_meta($id, 'events_start_date', true);;

                                        echo '<div class="event-item col-xs-12 col-sm-12 col-md-12">';
                                                echo '<a href="' . $link .'">';
                                                    echo '<div class="img-wrap">';
                                                        echo $img;
                                                    echo '</div>';
                                                echo '</a>';
                                                echo '<h5>'. $title . '</h5>';
                                                echo '<p class="date"><i class="far fa-clock"></i> ' . $date . '</p>';
                                                echo '<p>' . $content . '</p>';
                                                echo '<a href="' . $link .'" class="learn-more">Learn more &raquo; </a>';
                                        echo '</div>';
                                    }
                                    
                                    wp_reset_postdata();
                                } else {
                                    '<p>Unfortunately, we have no news at this time.</p>';
                                }
                            ?>
                            <div class="col-sm-12">
                                <a href="/events" class="btn btn-primary see-all">See all events</a>
                            </div>
                        </div>
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
        <div class="fb-page" data-href="https://www.facebook.com/thegreenchairproject/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thegreenchairproject/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thegreenchairproject/">The Green Chair Project</a></blockquote></div>
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