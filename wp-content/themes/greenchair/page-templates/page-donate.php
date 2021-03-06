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
				<div class="col-xs-12 col-sm-12 col-md-8 py-5">
					<div class="content-container d-flex flex-column justify-content-center align-items-left">
						<div class="content">
							<h1><?php echo get_the_title(); ?></h1>
							<h5><?php the_field('main_banner_text'); ?></h5>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 ">
					<div class="inner-band d-flex flex-column justify-content-center align-items-center">
						<h2><?php the_field('donate_green_bar_heading'); ?></h2>
						<p><?php the_field('donate_green_bar_subhead'); ?></p>
						<a id="donate-btn" class="btn btn-white" href="<?php the_field('donate_green_bar_cta_url'); ?>"><?php the_field('donate_green_bar_cta_text'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="news-events">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 pt-5">
					<?php the_content(); ?>
				</div>
			<div class="row" >
					<div class="news-item col-xs-12 col-sm-12 col-md-6 col-lg-4">
						<div class="inner">
							<a class="continue float-right img-wrap" href="<?php the_field('donate_sidebar_url_1'); ?>">
								<img src="<?php the_field('donate_sidebar_image_1'); ?>" class="img-fluid mx-auto mb-3" />
							</a>
							<div class="content-block">
								<h5 class="font-weight-bold"><?php the_field('donate_sidebar_heading_1'); ?></h5>
							<p class="content"><?php the_field('donate_sidebar_copy_text_1'); ?></p>
							<a class="btn btn-green" style="margin-top: 30px;" href="<?php the_field('donate_sidebar_url_1'); ?>"><?php the_field('donate_sidebar_cta_text_1'); ?></a>
							<div class="clearfix"></div>
							</div>
							
						</div>
					</div>
					<div class="news-item col-xs-12 col-sm-12 col-md-6 col-lg-4">
						<div class="inner">
							<a class="continue float-right img-wrap" href="<?php the_field('donate_sidebar_url_2'); ?>">
								<img src="<?php the_field('donate_sidebar_image_2'); ?>" class="img-fluid mx-auto mb-3" />
							</a>
							<div class="content-block">
								<h5 class="font-weight-bold"><?php the_field('donate_sidebar_heading_2'); ?></h5>
							<p class="content"><?php the_field('donate_sidebar_copy_text_2'); ?></p>
							<a class="btn btn-green" style="margin-top: 30px;" href="<?php the_field('donate_sidebar_url_2'); ?>"><?php the_field('donate_sidebar_cta_text_2'); ?></a>
							<div class="clearfix"></div>
							</div>
							
						</div>
					</div>
					<div class="news-item col-xs-12 col-sm-12 col-md-6 col-lg-4">
						<div class="inner">
							<a class="continue float-right img-wrap" href="<?php the_field('donate_sidebar_url_3'); ?>">
								<img src="<?php the_field('donate_sidebar_image_3'); ?>" class="img-fluid mx-auto mb-3" />
							</a>
							<div class="content-block">
								<h5 class="font-weight-bold"><?php the_field('donate_sidebar_heading_3'); ?></h5>
							<p class="content"><?php the_field('donate_sidebar_copy_text_3'); ?></p>
							<a class="btn btn-green" style="margin-top: 30px;" href="<?php the_field('donate_sidebar_url_3'); ?>"><?php the_field('donate_sidebar_cta_text_3'); ?></a>
							<div class="clearfix"></div>
							</div>
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pt-5" style="padding: 30px 0px 30px 0px;">
					<?php the_field('donation_disclaimer'); ?>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div><!-- #main-content -->

<?php get_footer();
