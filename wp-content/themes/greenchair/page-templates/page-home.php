<?php
/*
Template Name: Home Page
 */
get_header(); ?>

<div id="main-content" class="home-page">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $backgroundimage = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
        <div class="jumbotron d-flex flex-column justify-content-center align-items-center" style="background-image: url(<?php echo $backgroundimage ?>);">
            <div class="container">
                <div class="row">
                    <div class="left-mobile col-xs-12 col-sm-12 col-md-8 col-lg-6">
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
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 feature">
                        <div class="inner">
                            <div class="img-container">
                                <img src="<?php the_field('home_block_1_image'); ?>" alt="<?php the_field('home_block_1_text'); ?> image" />
                            </div>
                            <h6 class="home-block-title"><?php the_field('home_block_1_text'); ?></h6>
                            <p class="home-block-sub"><?php the_field('home_block_1_description'); ?></p>
                            <a href="<?php the_field('home_block_1_cta_url'); ?>" class="btn btn-green"><?php the_field('home_block_1_cta_text'); ?></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 feature">
                        <div class="inner">
                            <div class="img-container">
                                <img src="<?php the_field('home_block_2_image'); ?>" alt="<?php the_field('home_block_2_text'); ?> image" />
                            </div>
                            <h6 class="home-block-title"><?php the_field('home_block_2_text'); ?></h6>
                            <p class="home-block-sub"><?php the_field('home_block_2_description'); ?></p>
                            <a href="<?php the_field('home_block_2_cta_url'); ?>" class="btn btn-green"><?php the_field('home_block_2_cta_text'); ?></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 feature">
                        <div class="inner">
                            <div class="img-container">
                                <img src="<?php the_field('home_block_3_image'); ?>" alt="<?php the_field('home_block_3_text'); ?> image" />
                            </div>
                            <h6 class="home-block-title"><?php the_field('home_block_3_text'); ?></h6>
                            <p class="home-block-sub"><?php the_field('home_block_3_description'); ?></p>
                            <a href="<?php the_field('home_block_3_cta_url'); ?>" class="btn btn-green"><?php the_field('home_block_3_cta_text'); ?></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 feature">
                        <div class="inner">
                            <div class="img-container">
                                <img src="<?php the_field('home_block_4_image'); ?>" alt="<?php the_field('home_block_4_text'); ?> image" />
                            </div>
                            <h6 class="home-block-title"><?php the_field('home_block_4_text'); ?></h6>
                            <p class="home-block-sub"><?php the_field('home_block_4_description'); ?></p>
                            <a href="<?php the_field('home_block_4_cta_url'); ?>" class="btn btn-green"><?php the_field('home_block_4_cta_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="about" class="hexbackground">
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
                    <div class="col-md-12">
                        <h2>What's happening at Greenchair</h2>
                        <div class="row">
                            <?php
                                //News Items
                                $the_query = new WP_Query( 
                                    array(
                                        'post_type' => 'post', 
                                        'posts_per_page' => 3
                                    ) 
                                );

                                if ( $the_query->have_posts() ) {
                                    while ( $the_query->have_posts() ) {
                                        $the_query->the_post();
                                        $id = get_the_ID();
                                        $img = get_the_post_thumbnail($id, 'full', array('class' => 'img-fluid mx-auto d-block'));
                                        $title = get_the_title($id);
                                        $link = get_the_permalink($id);
                                        $content = wp_trim_words(get_the_content(), 30, '...');

                                        echo '<div class="news-item col-xs-12 col-sm-12 col-md-6 col-lg-4">';
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
                                    echo '<p>Unfortunately, we have no blogs at this time.</p>';
                                }
                            ?>
                            <div class="col-sm-12">
                                <a href="/blog" class="btn btn-primary see-all">See more</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div id="home-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="hide col left" style="background-image:url('<?php the_field('bottom_section_image'); ?>');">
                    </div>
                    <div class="col right woodbackground">
                        <div class="text-center align-middle">
                            <h4><?php echo get_field('bottom_section_text') ?></h4>
                            <a href="<?php the_field('bottom_section_cta_url'); ?>" class="btn btn-primary my-3"><?php the_field('bottom_section_cta_text') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>     
</div><!-- #main-content -->

<?php get_footer(); 