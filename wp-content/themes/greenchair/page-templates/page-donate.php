<?php
/*
Template Name: Donate Page
 */
get_header(); ?>

<div id="main-content">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="donate-intro-banner">
            <div class="text-center intro-main">Furnishing Lives With Hope and Dignity</div>
            <div class="rule"></div>
            <div class="text-center intro-sub">Your donations help provide the essentials of home for more than<br /> 500 families each year</div>
          </div>
          <div class="donate-selection-wrap">
            <div class="donate-icon-wrapper">
              <div class="donate-icon-container text-center">
                <div class="icon">1</div>
                <div>Your furnishings provide others<br /> the comforts of home</div>
                <button type="button" class="btn donate-btn">Give Homeware</button>
              </div>
              <div class="donate-icon-container text-center">
                <div class="icon">2</div>
                <div>You make our programs possible<br /> & your support provides hope to others</div>
                <button type="button" class="btn donate-btn">Give Money</button>
              </div>
              <div class="donate-icon-container text-center">
                <div class="icon">3</div>
                <div>It takes many hands and hearts<br /> to make The Green Chair Project work</div>
                <button type="button" class="btn donate-btn">Give Time</button>
              </div>
            </div>
          </div>
          <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div><!-- #main-content -->

<?php get_footer();
