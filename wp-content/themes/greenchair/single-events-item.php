<?php
get_header(); ?>

<div id="main-content" class="events-single-post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'img-fluid intro-image d-block mx-auto'));
                    ?>
                    <h1 class="text-center display-3 mt-5"><?php the_title(); ?></h1>
                    <div class="details">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <h5 class="font-weight-bold">Details:</h5>
                                <p class="mb-0"><i class="far fa-calendar-alt" aria-hidden="true"></i> &nbsp;
                                <?php   
                                    $id = get_the_ID();
                                    $startdate = strtotime(get_post_meta($id, 'events_start_date', true));
                                    $enddate = strtotime(get_post_meta($id, 'events_end_date', true));
                                    echo date('F j, Y', $startdate);
                                    if(!empty($enddate) && ($enddate != $startdate) ){
                                        echo ' &mdash; ' . date('F j, Y', $enddate);
                                    }
                                ?></p>
                                
                                <?php 
                                    $startime = get_post_meta($id, 'events_start_time', true); 
                                    if(!empty($startime)){
                                        echo '<p><i class="far fa-clock"></i>&nbsp; ' . $startime;
                                    }
                                    $endtime = get_post_meta($id, 'events_end_time', true); 
                                    if(!empty($endtime)){
                                        echo ' &mdash; ' . $endtime;
                                    }
                                ?>
                                </p>

                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <h5 class="font-weight-bold">Venue:</h5>
                                <p>
                                <?php 
                                    $address = get_post_meta($id, 'events_address', true);
                                    if(!empty($address)){
                                        echo $address;
                                    }
                                ?>
                                </p>
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
    