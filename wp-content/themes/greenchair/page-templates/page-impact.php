<?php
/*
Template Name: Impact Page
 */
get_header(); ?>

<div id="main-content" class="impact-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="jumbotron jumbo-impact sepia d-flex flex-column justify-content-center align-items-center" style="background-image: url(http://greenchair.loc:8888/wp-content/uploads/2019/03/impact.jpg);">
            <div class="container">
                <div class="column">
                <h1 class="my-3 display-3"><?php echo get_the_title(); ?></h1>
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6">
                        <div class="breakdown-block">
                            <h2><?php echo get_field('impact_column_one_top'); ?></h2>
                            <p><?php echo get_field('impact_column_one_bottom'); ?></p>
                        </div>
                        <div class="breakdown-block">
                            <h2><?php echo get_field('impact_column_two_top'); ?></h2>
                            <p><?php echo get_field('impact_column_two_bottom'); ?></p>
                        </div>
                        <div class="breakdown-block">
                            <h2><?php echo get_field('impact_column_three_top'); ?></h2>
                            <p><?php echo get_field('impact_column_three_bottom'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div><!-- #main-content -->

<?php get_footer(); 
