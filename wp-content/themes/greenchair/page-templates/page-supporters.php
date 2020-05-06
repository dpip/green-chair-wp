<?php
/*
Template Name: Supporters page
 */
get_header(); ?>

<div id="main-content" class="about-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php $backgroundimage = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>   
        <div class="jumbotron jumbo-about d-flex flex-column justify-content-center align-items-center" style="background-image: url('<?php echo $backgroundimage ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <h1 class="my-3 display-3" style="color: #000" ><?php echo get_the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-4" style="margin-top: 50px;">
            <div class="row doc-wrap">
                <div class="col-sm-12 col-md-12 col-lg-10">
                    <!-- <?php the_content(); ?> -->
                    <h4 class=""><span style="color: #6bbf4e; font-weight: bold;">Thank you</span> to these companies, organizations, and foundations that support our community through donations to The Green Chair Project! </h4>
                </div>
                
            </div>
        </div>
            <div class="container">
                <div class="row">    
                    <div class="col-sm-12 d-inline-flex">
                        <h1 class="mt-4 mb-3"><?php the_field('workplace_campaigns'); ?><div class="horizontal-rule"></div> </h1>
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

                                echo '<div class="col-lg-3 my-2 d-flex flex-column justify-content-center align-items-center pb-4">';
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

                    <div class="col-sm-12 d-inline-flex">
                        <h1 class="mt-4 mb-3"><?php the_field('faith_partners'); ?><div class="horizontal-rule"></div></h1>
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

                                echo '<div class="col-lg-3 my-2 d-flex flex-column justify-content-center align-items-center pb-4">';
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


                   
                </div>
            </div>
    </div>  
    <?php endwhile; ?>
    <?php endif; ?>
</div><!-- #main-content -->

<?php get_footer(); 

