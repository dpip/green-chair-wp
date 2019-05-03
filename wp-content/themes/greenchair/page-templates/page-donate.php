<?php
/*
Template Name: Donate Page
 */
get_header(); ?>

<div id="main-content" class="donate-page">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php $backgroundimage = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>   
	<div class="jumbotron d-flex flex-column justify-content-center align-items-center" style="background-image: url(<?php echo $backgroundimage ?>);">
		<div class="container ">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 py-5">
					<div class="content">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 ">
					<div class="inner-band">
						<h2>Support Our Work</h2>
						<h5>Bring Hope & Relief to People in Need</h5>
						<a class="btn btn-white" href="/donate-furnishings">Donate Furnishings</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
			
				
				
			
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div><!-- #main-content -->

<?php get_footer();
