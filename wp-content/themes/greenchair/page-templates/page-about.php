<?php
/*
Template Name: About Page
 */
get_header(); ?>

<div id="main-content" class="about-page">
    <div class="jumbotron d-flex flex-column justify-content-center align-items-center" style="background-image: url(<?php echo $backgroundimage ?>);">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 ">
                    <h1 class="my-3 display-3"><?php echo get_the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <h3 class="col-sm-6 col-md-6 col-lg-6">Working together to provide everyone the comforts of home.</h3>
            <p class="col-sm-6 col-md-6 col-lg-5">We reuse donated household furnishings to renew lives of participants referred from area programs who are recovering after homelessness, crisis or disaster serving more than 2,300 families in Wake County since 2010.</p>
        </div>
    </div>
    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="img-placeholder col-sm-6 col-md-4">
                <img class="img-placeholder col-sm-6 col-md-4" alt="" src="http://placehold.it/400x400" style="max-width: 320px; max-height: 320px;"/>
            </div>
            <div class="img-placeholder col-sm-6 col-md-4">
                <img class="img-placeholder col-sm-6 col-md-4" alt="" src="http://placehold.it/400x400" style="max-width: 320px; max-height: 320px;"/>
            </div>
            <div class="img-placeholder col-sm-6 col-md-4">
                <img class="img-placeholder col-sm-6 col-md-4" alt="" src="http://placehold.it/400x400" style="max-width: 320px; max-height: 320px;"/>
            </div>
        </div>
    </div>
    <div class="jumbotron d-flex flex-column justify-content-center align-items-center" style="background-image: url(); margin-top: 50px; padding-top: 100px; padding-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 ">
                    <h2>Sweeter Dreams ~</h2>
                    <h2>A bed for every child</h2>
                </div>
            </div>
        </div>
    </div>
</div><!-- #main-content -->

<?php get_footer(); 