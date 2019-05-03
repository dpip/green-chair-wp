<?php
/*
Template Name: Impact Page
 */
get_header(); ?>

<div id="main-content" class="impact-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="jumbotron jumbo-impact sepia d-flex flex-column justify-content-center align-items-center" style="background-image: url(http://greenchair.loc:8888/wp-content/uploads/2019/03/impact.jpg);">
            <div class="container">
                <div class="column">
                    <h1 class="my-3 display-3"><?php echo get_the_title(); ?></h1>
                    <div class="container">
                    <div class="d-flex row">
                        <!-- <div class="col breakdown-block block-one">
                            <h2><?php echo get_field('impact_column_one_top'); ?></h2>
                            <p><?php echo get_field('impact_column_one_bottom'); ?></p>
                        </div>
                        <div class="col breakdown-block block-two">
                            <h2><?php echo get_field('impact_column_two_top'); ?></h2>
                            <p><?php echo get_field('impact_column_two_bottom'); ?></p>
                        </div>
                        <div class="col breakdown-block block-three">
                            <h2><?php echo get_field('impact_column_three_top'); ?></h2>
                            <p><?php echo get_field('impact_column_three_bottom'); ?></p>
                        </div> -->
                        <div class="col breakdown-block block-three">
                            <h2>2,847+</h2>
                            <p>families served</p>
                        </div>
                        <div class="col breakdown-block block-three">
                            <h2>11,632+</h2>
                            <p>furniture donors</p>
                        </div>
                        <div class="col breakdown-block block-three">
                            <h2>82,941+</h2>
                            <p>volunteer hours</p>
                        </div>
                    </div>
                 </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-flex row impact-duo justify-content-center align-items-center">
            <div class="col d-flex flex-column justify-content-center align-items-center">
            <!-- <i class="fas fa-chair"></i> -->
            <span>
                <h1 style="border-bottom: 4px solid #8cc441; padding-bottom: 10px; font-weight: bold;">Why It Matters</h1>
                <h4 style="font-size: 1.75rem;">Home is where the heart is &ndash; ponderum praesent scripserit sit ad, mundi tritani eos te dolor sit amet dolor sit.</h4>
            </span>
            </div>
            <div class="col d-flex justify-content-center align-items-center duo-icon-top">
            <!-- <i class="fas fa-chair"></i> -->
            <!-- <div>
                <i class="fas fa-couch"></i>
            </div> -->
            <div class="impact-chart">
            <svg viewBox="0 0 64 64" class="pie">
                <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 75.3 100">
                </circle>
                <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 15.9 100; stroke: #8cc441; stroke-dashoffset: -85.3; animation-delay: 0.25s">
                </circle>
                <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 19.3 100; stroke: inherit; stroke-dashoffset: -95.2; animation-delay: 0.5s">
                </circle>
                <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 1.4 100; stroke: inherit; stroke-dashoffset: -97.5; animation-delay: 0.75s">
                </circle>
                <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 1.1 100; stroke: inherit; stroke-dashoffset: -98.9; animation-delay: 1s">
                </circle>
            </svg>
            <div class="chart-house chart-house-one" style="top: 80px; left: 220px; color: #18a79d; !important">
                <i class="fas fa-home" style="font-size: 40px; color: white;"></i>
            </div>
            <div class="chart-house chart-house-two" style="top: 50px; left: 120px;">
                <i class="fas fa-home"></i>
            </div>
            <div class="chart-house chart-house-three" style="top: 110px; left: 60px;">
                <i class="fas fa-home"></i>
            </div>
            <div class="chart-house chart-house-four" style="top: 155px; left: 40px;">
                <i class="fas fa-home"></i>
            </div>
            <div class="chart-house chart-house-five" style="top: 205px; left: 90px;">
                <i class="fas fa-home"></i>
            </div>
            <div class="chart-house chart-house-six" style="top: 210px; left: 200px;">
                <i class="fas fa-home"></i>
            </div>
            </div>

            </div>
            <div class="col impact-duo-content">
                <h1 class="green">1 <span>in</span> 6 families</h1>    
                <h4 class="">lorem ipsum dolor sit amet per malis  graeco.</h4>
            </div>
        </div>
        </div>
        <div class="jumbotron stat-banner">
            <div class="container">
                    <h1 style="border-bottom: 4px solid white; display: inline-block;"><div style="margin: 0 auto;"><strong>Since 2009</strong></div></h1>
                    <h4>The Green Chair</h4>
            </div>
        </div>
        <div style="background-color: #F8FAFC">
        <div class="container stat-container">
            <div class="row impact-one">
                <div class="col impact-graphic">
                <i class="fas fa-couch"></i>
                </div>
                <div class="col">
                <h3>Furnished 2000+ homes</h3>
                <p>Essent docendi vulputate duo in, ad ius regione lucilius. No est quaeque disputationi. Tollit saperet eum ad. Et brute nominati nam. Te dolorem civibus volumus mei, no vix dolores forensibus. Omittam appareat te est.</p>
                </div>
            </div>
            <div class="row impact-two">
                <div class="col">
                <h3>Gave 1000+ beds</h3>
                <p>Essent docendi vulputate duo in, ad ius regione lucilius. No est quaeque disputationi. Tollit saperet eum ad. Et brute nominati nam. Te dolorem civibus volumus mei, no vix dolores forensibus. Omittam appareat te est.</p>
                </div>
                <div class="col impact-graphic">
                </div>
            </div>
            <div class="row impact-three">
                <div class="col impact-graphic">
                    <i class="fas fa-hand-holding-heart"></i>
                </div>
                <div class="col">
                <h3>Has partnered with</h3>
                <p>Essent docendi vulputate duo in, ad ius regione lucilius. No est quaeque disputationi. Tollit saperet eum ad. Et brute nominati nam. Te dolorem civibus volumus mei, no vix dolores forensibus. Omittam appareat te est.</p>
                </div>
            </div>
        </div>
        </div>
        <div class="testimony-banner wood-background">
            <div class="container">
                <h4 style="font-style: italic;">"My kids and I love our new home. The experience at The Green Chair Project was so great and the kids absolutely loved it. They enjoyed picking out furniture for our home. Everyone at Green Chair made us feel so important." - Antoinette</h4>
            </div>
        </div>
        <div class="container" style="padding-top: 40px;">
        <h1>Testimonials</h1>
            <div class="row" style="margin-top: 40px;">
            <div class="col">
                <h3>- Shatina</h3>    
                <p class="testimony-quote">"They are awesome!!! Thank you guys again!!!!! My experience couldn't be any better!!!!! Staff/Volunteers couldn't have been any more friendly!!!!"</p>
            </div>
            <div class="col">
                <h3>- Marie</h3>    
                <p class="testimony-quote">"I was blessed today by the Green chair project and im so greatful for everything that were able to bless me with in my new home thank you very much."</p>
            </div>
            <div class="col">
                <h3>- Alizabeth</h3>    
                <p class="testimony-quote">"The green chair project has helped me and my family tremendously and we are so grateful. The staff there are so polite and helpful. Thank you all so much!!!"</p>
            </div>
        </div>
        </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div><!-- #main-content -->

<?php get_footer(); 
