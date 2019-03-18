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
        <div class="row doc-wrap">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h3>Working together to provide everyone the comforts of home.</h3>
                <div class="margin-top-md" style="margin-top: 25px;">
                    <div class="greenchair-documentary d-flex justify-content-center align-items-center embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/W814_I2slXg" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 content">
                <p>We reuse donated household furnishings to renew lives of participants referred from area programs who are recovering after homelessness, crisis or disaster serving more than 2,300 families in Wake County since 2010.</p>
                <p>The Green Chair Project is a 501(c)(3) that provides home furnishings donated from our community for families and individuals who have transitioned from experiencing homelessness or disasters and have secured sustainable housing.</p>
                <p>The reusable gifts are cleaned and repaired by volunteers and are presented in a way that promotes dignity and respect. For a small fee, families working with case managers from partnering agencies can select furniture, linens, cookware and accessories to outfit their new homes.</p>
                <p>The Green Chair experience encourages families to prioritize and make choices and empowers them to create their surroundings and rebuild their lives.</p>
            </div>
        </div>
    </div>
    <div class="jumbotron jumbo-breakdown d-flex flex-column justify-content-center align-items-center" style="background-image: url(<?php echo $backgroundimage ?>);">
        <div class="container">
            <div class="column">
                <h1>Impact</h1>
                <div class="d-flex col-xs-12 col-sm-6 col-md-6">
                    <div class="breakdown-block">
                        <h2>9</h2>
                        <p>years</p>
                    </div>
                    <div class="breakdown-block">
                        <h2>55</h2>
                        <p>volunteers</p>
                    </div>
                    <div class="breakdown-block">
                        <h2>2300+</h2>
                        <p>families served</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8 content">
                <p>Both trained in real estate home staging, Jackie Craig and Beth Smoot consistently found that homeowners had too much stuff in their houses  – stuff they didn’t want to go to waste but no longer had a need for.</p>
                <p>After seeing this again and again, the pair founded The Green Chair Project, Inc. in 2010 as a receptacle for those items, as well as a “green” way to reuse good stuff to benefit their neighbors in need.</p>
                <p style="font-style: italic;">Pictured <span class="picture-direction"></span>: Beth Smoot (Left) and Jackie Craig (Right), Co-Founders of The Green Chair Project</p>            
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 content">
                <div class="founder-img" style="background-image: url(https://dummyimage.com/600x400/000/fff);"></div>
            </div>
        </div>
    </div>
</div><!-- #main-content -->

<?php get_footer(); 