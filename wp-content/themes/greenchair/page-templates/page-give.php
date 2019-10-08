<?php
/*
Template Name: Give Page
 */
get_header(); ?>

<div id="main-content" class="give-page">
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
			<div class="col-xs-12 col-sm-12 col-md-12 pt-5">
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
		</div>
	</div>
	<!-- <script type="text/JavaScript" src="//app.etapestry.com/hosted/eTapestry.com/etapEmbedResponsiveResizing.js"></script><iframe id="etapIframe" style="border:none;width:100%;" src="https://app.etapestry.com/onlineforms/TheGreenChairProjectInc/contribute.html"></iframe> -->

	<?php endwhile; ?>
	<?php endif; ?>
</div><!-- #main-content -->
<?php get_footer();
