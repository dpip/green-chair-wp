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
                <div class="icon">
                  <div class="icon-shade icon-shade-donate">Donate gently used<br /> houseware and furnishings</div>
                </div>
                <div>Your furnishings provide others<br />warmth and the comforts of home</div>
                <button type="button" class="btn donate-btn">Donate</button>
              </div>
              <div class="donate-icon-container text-center">
                <div class="icon">
                  <div class="icon-shade icon-shade-fund"><span>Fund our vision<br /> of hope and<br /> community</span></div>
                </div>
                <div>You make our programs possible<br /> & your support provides hope to others</div>
                <button type="button" class="btn donate-btn">Fund</button>
              </div>
              <div class="donate-icon-container text-center">
                <div class="icon">
                  <div class="icon-shade icon-shade-volunteer"><span>Join our amazing<br /> team of volunteers</span></div>
                </div>
                <div>It takes many hands and hearts<br /> to make The Green Chair Project work</div>
                <button type="button" class="btn donate-btn">Volunteer</button>
              </div>
            </div>
          </div>
          <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div><!-- #main-content -->

<?php get_footer();
