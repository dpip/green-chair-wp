<?php
get_header(); ?>

<div id="main-content" class="single-post-info">
	<?php $backgroundimage = get_the_post_thumbnail_url(get_the_ID(), 'full', true); ?>
	<?php if(!empty($backgroundimage)){ ?>
    <?php } ?>
	<div class="container py-4">
		<div class="row">
			<div class="col-sm-12 col-md-12 offset-lg-2 col-lg-8" style="padding: 0px !important;">
		        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		            <!-- <h1><?php the_title(); ?></h1> -->
					<!-- <p class="date"><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></p> -->
					<div class="container bio-top d-flex" style="padding: 0px !important;">
						<div class="col-lg-6" style="padding: 0px !important;">
							<img src="<?php echo $backgroundimage ?>" class="img-fluid mx-auto d-block" />
						</div>
						<div class="col-sm-12 col-md-12 col-lg-6">
							<h1 id="team-bio-title"><span><?php echo the_field('teammate_name_first'); ?></span> <?php echo the_field('teammate_name_last'); ?></h1>
							<p class="team-bio-position"><?php echo the_field('position_title'); ?><span>, <?php echo the_field('company'); ?></span></p>
							<a href="<?php echo the_field('linkedin_url'); ?>" class="fab fa-linkedin-in"></a>
						</div>
					</div>
		            <ul class="categories">
		            	<?php
						$post_categories = wp_get_post_categories( get_the_ID());

						foreach($post_categories as $c){
							$cat = get_category( $c );
							echo '<li><a href="'. get_category_link( $cat->term_id ). '"><i class="far fa-folder-open"></i> ' . $cat->name . '</a></li>';


						} ?>
		            </ul>
					<hr />
					<h1 class="teammate-bio-intro"><?php echo the_field('teammate_bio_intro'); ?></h1>
					<br>
                     <?php the_content(); ?>
                     <div style="margin-top: 40px;">
                     </div>
		    	<?php endwhile; ?>
		    	<?php endif; ?>
		    </div><!--offset-column-->
    	</div>
	</div>

</div><!-- #main-content -->

<?php get_footer();
