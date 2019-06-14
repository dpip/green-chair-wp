<?php
/*
Template Name: Donate Furnishings Page
 */
get_header(); ?>

<div id="main-content" class="furniture-page">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php $backgroundimage = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>   
	<div class="jumbotron" style="background-image: url(<?php echo $backgroundimage ?>);">
		<div class="container ">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 py-5">
					<div class="content-container d-flex flex-column justify-content-center align-items-center">
						<div class="content">
							<h1 class="py-5"><?php echo get_the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 pt-5">
				<?php the_content(); ?>
			</div>
            <div class="col-xs-12 col-sm-12 col-md-4 pt-5">
				
			</div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div><!-- #main-content -->

<?php get_footer();
