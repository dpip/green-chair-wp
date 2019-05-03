<?php
/*
Template Name: Donate Page
 */
get_header(); ?>

<div id="main-content" class="donate-page">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php $backgroundimage = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>   
	<div class="jumbotron" style="background-image: url(<?php echo $backgroundimage ?>);">
		<div class="container ">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 py-5">
					<div class="content-container d-flex flex-column justify-content-center align-items-center">
						<div class="content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 ">
					<div class="inner-band d-flex flex-column justify-content-center align-items-center">
						<h2><?php the_field('green_bar_heading'); ?></h2>
						<p><?php the_field('green_bar_subhead'); ?></p>
						<a class="btn btn-white" href="<?php the_field('green_bar_cta_url'); ?>"><?php the_field('green_bar_cta_text'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8  pt-5">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-3">
								<h2><?php the_field('stat_1_dollar_amount'); ?></h2>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-9">
								<p><?php the_field('stat_1_text'); ?></p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-3">
								<h2><?php the_field('stat_2_dollar_amount'); ?></h2>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-9">
								<p><?php the_field('stat_2_text'); ?></p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-3">
								<h2><?php the_field('stat_3_dollar_amount'); ?></h2>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-9">
								<p><?php the_field('stat_3_text'); ?></p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-3">
								<h2><?php the_field('stat_4_dollar_amount'); ?></h2>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-9">
								<p><?php the_field('stat_4_text'); ?></p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-3">
								<h2><?php the_field('stat_5_dollar_amount'); ?></h2>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-9">
								<p><?php the_field('stat_5_text'); ?></p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-3">
								<h2><?php the_field('stat_6_dollar_amount'); ?></h2>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-9">
								<p><?php the_field('stat_6_text'); ?></p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="mt-5">
							<?php the_field('donate_form_copy'); ?>
						</div>
						<?php the_field('donation_form_code'); ?>
						
						<div class="mt-5">
							<?php the_field('donate_text_beneath_form'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="sidebar-donate col-xs-12 col-sm-12 col-md-4">
				<div class="inner pt-5">
					<h2><?php the_field('sidebar_heading'); ?></h2>
					<div class="my-5">
						<a href="<?php the_field('sidebar_item_1_url'); ?>">
						<img src="<?php the_field('sidebar_item_1_image'); ?>" class="img-fluid d-block" />
						<h6 class="mt-3"><?php the_field('sidebar_item_1_heading'); ?></h6>
						</a>
					</div>
					<div class="my-5">
						<a href="<?php the_field('sidebar_item_2_url'); ?>">
						<img src="<?php the_field('sidebar_item_2_image'); ?>" class="img-fluid d-block" />
						<h6 class="mt-3"><?php the_field('sidebar_item_2_heading'); ?></h6>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div><!-- #main-content -->

<?php get_footer();
