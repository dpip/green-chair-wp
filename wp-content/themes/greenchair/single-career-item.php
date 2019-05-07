<?php
get_header(); ?>

<div id="main-content" class="single-post-info">
	<?php $backgroundimage = get_the_post_thumbnail_url(get_the_ID(), 'full', true); ?>
	<?php if(!empty($backgroundimage)){ ?>
	<div class="jumbotron py-0">
        <img src="<?php echo $backgroundimage ?>" class="img-fluid mx-auto d-block" />
        
    </div>
    <?php } ?>
	<div class="container py-4">
		<div class="row">
			<div class="col-sm-12 col-md-12 offset-lg-2 col-lg-8">
		        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		            <h1><?php the_title(); ?></h1>
		            <p class="date"><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></p>
		            <ul class="categories">
		            	<?php
						$post_categories = wp_get_post_categories( get_the_ID());
						     
						foreach($post_categories as $c){
							$cat = get_category( $c );
							echo '<li><a href="'. get_category_link( $cat->term_id ). '"><i class="far fa-folder-open"></i> ' . $cat->name . '</a></li>';
						    
						    
						} ?>
		            </ul>
		            <hr />
                     <?php the_content(); ?>
                     <div style="margin-top: 40px;">
                     <a href="" class="btn btn-green">Apply Now</a>
                     </div>
		    	<?php endwhile; ?>
		    	<?php endif; ?>  
		    </div><!--offset-column-->
    	</div>	
	</div>	
	
</div><!-- #main-content -->

<?php get_footer(); 
	