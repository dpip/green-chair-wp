<?php
get_header(); ?>

<div id="main-content" class="events-single-post">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'img-fluid intro-image center-block'));
                    ?>
                    <h1 class="text-center"><?php the_title(); ?></h1>
                    <div class="details">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <h4>Details:</h4>
                                <h6><i class="fa fa-calendar"></i>
                                <?php   
                                    $id = get_the_ID();
                                    $startdate = strtotime(get_post_meta($id, 'events_start_date', true));
                                    $enddate = strtotime(get_post_meta($id, 'events_end_date', true));
                                    echo date('F j, Y', $startdate);
                                    if(!empty($enddate) && ($enddate != $startdate) ){
                                        echo ' &mdash; ' . date('F j, Y', $enddate);
                                    }
                                ?></h6>
                                
                                <?php 
                                    $startime = get_post_meta($id, 'events_start_time', true); 
                                    if(!empty($startime)){
                                        echo '<h6><i class="fa fa-clock-o"></i> ' . $startime;
                                    }
                                    $endtime = get_post_meta($id, 'events_end_time', true); 
                                    if(!empty($endtime)){
                                        echo ' &mdash; ' . $endtime;
                                    }
                                ?>
                                </h6>

                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <h4>Venue:</h4>
                                <h6>
                                <?php 
                                    $address = get_post_meta($id, 'events_address', true);
                                    if(!empty($address)){
                                        echo $address;
                                    }
                                ?>
                                </h6>
                            </div>
                        </div>
                        <hr />
                    </div><!--details-->
                    <?php the_content(); ?>    
                <?php endwhile; ?>
                <?php endif; ?>  
            </div><!--offset-column-->
        </div>  
    </div>  
    
</div><!-- #main-content -->

<?php get_footer(); 
    