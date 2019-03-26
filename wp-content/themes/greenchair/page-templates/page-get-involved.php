<?php
/*
Template Name: Get Involved Page
 */
get_header(); ?>

<div id="main-content" class="get-involved">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
        <?php $backgroundimage = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>   
        <div class="jumbotron d-flex flex-column justify-content-center align-items-center" style="background-image: url(<?php echo $backgroundimage ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 py-5">
                        <h1 class="my-3 display-4 text-center pb-3"><?php echo get_the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="get-involved-types">
            <div class="container">
                <div class="row">
                    <div class="type col-xs-12 col-lg-3">
                        <div class="inner">
                            <div class="img-wrap">
                                <a href="<?php the_field('get_involved_box_1_cta_url'); ?>">
                                    <img src="<?php the_field('get_involved_box_1_image'); ?>" class="img-fluid d-block mx-auto" />
                                </a>
                            </div>
                            <h3><?php the_field('get_involved_box_1'); ?></h3>
                            <p><?php the_field('get_involved_box_1_paragraph'); ?></p>
                            <a href="<?php the_field('get_involved_box_1_cta_url'); ?>" class="btn btn-primary"><?php the_field('get_involved_box_1_cta_text'); ?></a>
                        </div>
                    </div>
                    <div class="type col-xs-12 col-lg-3">
                        <div class="inner">
                            <div class="img-wrap">
                                <a href="<?php the_field('get_involved_box_2_cta_url'); ?>">
                                    <img src="<?php the_field('get_involved_box_2_image'); ?>" class="img-fluid d-block mx-auto" />
                                </a>
                            </div>
                            <h3><?php the_field('get_involved_box_2'); ?></h3>
                            <p><?php the_field('get_involved_box_2_paragraph'); ?></p>
                            <a href="<?php the_field('get_involved_box_2_cta_url'); ?>" class="btn btn-primary"><?php the_field('get_involved_box_2_cta_text'); ?></a>
                        </div>
                    </div>
                    <div class="type col-xs-12 col-lg-3">
                        <div class="inner">
                            <div class="img-wrap">
                                <a href="<?php the_field('get_involved_box_3_cta_url'); ?>">
                                    <img src="<?php the_field('get_involved_box_3_image'); ?>" class="img-fluid d-block mx-auto" />
                                </a>
                            </div>
                            <h3><?php the_field('get_involved_box_3'); ?></h3>
                            <p><?php the_field('get_involved_box_3_paragraph'); ?></p>
                            <a href="<?php the_field('get_involved_box_3_cta_url'); ?>" class="btn btn-primary"><?php the_field('get_involved_box_3_cta_text'); ?></a>
                        </div>
                    </div>
                    <div class="type col-xs-12 col-lg-3">
                        <div class="inner">
                            <div class="img-wrap">
                                <a href="<?php the_field('get_involved_box_4_cta_url'); ?>">
                                    <img src="<?php the_field('get_involved_box_4_image'); ?>" class="img-fluid d-block mx-auto" />
                                </a>
                            </div>
                            <h3><?php the_field('get_involved_box_4'); ?></h3>
                            <p><?php the_field('get_involved_box_4_paragraph'); ?></p>
                            <a href="<?php the_field('get_involved_box_4_cta_url'); ?>" class="btn btn-primary"><?php the_field('get_involved_box_4_cta_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="get-involved-text" class="my-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 pt-3">
                        <h3 class="py-5 text-center"><?php the_field('second_heading'); ?></h3>
                    </div>
                    <div class="col-lg-4">
                        <h6><?php the_field('other_ways_box_1'); ?></h6>
                        <p><?php the_field('other_ways_box_1_paragraph'); ?> <a href="<?php the_field('other_ways_box_1_url'); ?>">Learn more &raquo; </a></p>
                    </div>
                    <div class="col-lg-4">
                        <h6><?php the_field('other_ways_box_2'); ?></h6>
                        <p><?php the_field('other_ways_box_2_paragraph'); ?> <a href="<?php the_field('other_ways_box_2_url'); ?>">Learn more &raquo; </a></p>
                    </div>
                    <div class="col-lg-4">
                        <h6><?php the_field('other_ways_box_3'); ?></h6>
                        <p><?php the_field('other_ways_box_3_paragraph'); ?> <a href="<?php the_field('other_ways_box_3_url'); ?>">Learn more &raquo; </a></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="supporters" class="mt-5 py-3 woodbackground">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 pt-3 text-center py-2">
                        <h4 class="py-2"><?php the_field('supporters_heading'); ?></h4>
                        <p><?php the_field('supporters_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="supporters-list">
            <div class="container">
                <div class="row">    
                    <div class="col-sm-12">
                        <h3 class="text-center mt-4 mb-3 underline">$10,000+</h3>
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
                            '<p>Unfortunately, we have no supporters at this level.</p>';
                        }
                            
                    ?>

                    <div class="col-sm-12">
                        <h3 class="text-center mt-4 mb-3 underline">Government Support</h3>
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
                        } else {
                            '<p>Unfortunately, we have no supporters at this level.</p>';
                        }
                            
                    ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>    
</div><!-- #main-content -->

<?php get_footer(); 
