<?php
/*
Template Name: Get Involved Page
 */
get_header(); ?>

<div id="main-content" class="get-involved">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
        <?php $backgroundimage = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>   
        <div class="jumbotron d-flex flex-column justify-content-center align-items-center" style="background-image: url(<?php echo $backgroundimage ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 py-5">
                        <h1 class="my-3 display-4 text-center pb-3"><?php echo get_the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="get-involved-types">
            <div class="container">
                <div class="row">
                    <div class="type col-xs-12 col-sm-3">
                        <div class="inner">
                            <div class="img-wrap">
                                <a href="">
                                    <img src="/wp-content/uploads/2019/03/volunteerhands.jpg" class="img-fluid d-block mx-auto" />
                                </a>
                            </div>
                            <h3>Volunteer</h3>
                            <p>The Green Chair is a volunteer-driven operation, so we rely on volunteers in all areas. Check out our volunteer page for opportunities.</p>
                            <a href="/volunteer" class="btn btn-primary">Join Our Team</a>
                        </div>
                    </div>
                    <div class="type col-xs-12 col-sm-3">
                        <div class="inner">
                            <div class="img-wrap">
                                <a href="">
                                    <img src="/wp-content/uploads/2019/03/kelly-miller-392332-unsplash.jpg" class="img-fluid d-block mx-auto" />
                                </a>
                            </div>
                            <h3>Donate Furnishings</h3>
                            <p>We need and accept gently-used household furnishings donations. Click here to see our donation hours and a list of what we accept.</p>
                            <a href="/donate-furnishings" class="btn btn-primary">Learn more</a>
                        </div>
                    </div>
                    <div class="type col-xs-12 col-sm-3">
                        <div class="inner">
                            <div class="img-wrap">
                                <a href="">
                                    <img src="/wp-content/uploads/2019/03/donate.jpg" class="img-fluid d-block mx-auto" />
                                </a>
                            </div>
                            <h3>Financial Contribution</h3>
                            <p>Whether you make a one time contribution or you can help as a monthly sustainer, your financial support is critical! </p>
                            <a href="/donate" class="btn btn-primary">Give today</a>
                        </div>
                    </div>
                    <div class="type col-xs-12 col-sm-3">
                        <div class="inner">
                            <div class="img-wrap">
                                <a href="">
                                    <img src="/wp-content/uploads/2019/03/corporatesponsorship.jpg" class="img-fluid d-block mx-auto" />
                                </a>
                            </div>
                            <h3>Corporate Sponsorship</h3>
                            <p>The Green Chair Project welcomes corporate sponsors which share its mission of encouraging reuse and renewal.</p>
                            <a href="/corporate-sponsorship" class="btn btn-primary">Sustain Our Work</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="get-involved-text" class="my-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 pt-3">
                        <h3 class="py-5 text-center">Other ways to help</h3>
                    </div>
                    <div class="col-sm-4">
                        <h6>Fundraiser/Furniture Sales</h6>
                        <p>Visit our booths at these stores to purchase high-end Green Chair items. <a href="/fundraiser-sales">Learn more &raquo; </a></p>
                    </div>
                    <div class="col-sm-4">
                        <h6>Shop our Online Store</h6>
                        <p>Browse our high-end and vintage items in our online store. <a href="https://www.chairish.com/shop/thegreenchairproject">Learn more &raquo;</a></p>
                    </div>
                    <div class="col-sm-4">
                        <h6>Charity Event</h6>
                        <p>Attend our Charity Event Gala this April to support Green Chair. <a href="/events-item/charity-2019/">Learn more &raquo; </a></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="supporters" class="mt-5 py-3 woodbackground">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 pt-3 text-center py-2">
                        <h4 class="py-2">Our Supporters</h4>
                        <p>A BIG thank you those companies and organizations who help support the community through donations to the Green Chair Project!</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="supporters-list">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="text-center mt-4 mb-3 underline">$10,000+</h3>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>    
</div><!-- #main-content -->

<?php get_footer(); 
