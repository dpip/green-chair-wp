<?php
/*
Template Name: How We Serve Page
 */
get_header(); ?>

<div id="main-content" class="impact-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="jumbotron jumbo-impact d-flex flex-column justify-content-center align-items-center" style="background-image: url(<?php echo get_field('impact_image_top'); ?>);">
            <div class="container">
                <div class="column">
                    <h1 class="my-3 display-3"><?php echo get_the_title(); ?></h1>
                </div>
            </div>
        </div>
    <div class="container pt-4 pb-4">
    <div class="col-sm-12 pt-4 pb-4" style="padding-left: 0px; position: relative; align-items: center;">
        <div class="hws__draw-top">
            <h1 style="padding-top: 0px; font-weight: bold;">Furnishing lives since 2009</h1>
            <div class="lines">
                <div class="line one">
                    <div class="hws__fill"></div>
                </div>
                <div class="line two">
                    <div id="heart-animation">
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_tfaePY.json"  background="transparent" speed="1" delay="2" style="width: 150px; height: 150px;" autoplay></lottie-player>
                    </div>
                </div>
                <div class="line three">
                    <div class="hws__fill"></div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="d-flex row breakdown-wrap">
                <div class="col col-sm-12 col-md-4 breakdown-block block-three b1">
                    <div class="inner">
                        <div class="graphic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="90.911" height="89.514" viewBox="0 0 90.911 89.514">
                        <g id="Group_21" data-name="Group 21" transform="translate(-250.659 35.179)">
                            <path id="Path_7" data-name="Path 7" d="M341.216,10.63l-45.1-45.1-45.1,45.1" fill="none" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            <path id="Path_8" data-name="Path 8" d="M330.823,0V53.835h-69.18V0" transform="translate(0 0)" fill="none" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            <line id="Line_2" data-name="Line 2" y2="13.719" transform="translate(267.64 -19.716)" fill="none" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            <g id="Group_22" data-name="Group 22" transform="translate(231.954 -35.352)">
                            <path id="Path_11" data-name="Path 11" d="M64.309,75.341S47.259,61.66,44.821,53.882c-2.087-5.559,0-13.991,7.6-14.915s11.883,5.819,11.883,5.819,4.278-6.744,11.883-5.819,9.692,9.356,7.6,14.915C81.359,61.66,64.309,75.341,64.309,75.341Z" fill="none" stroke="#a3a3a3" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            </g>
                        </g>
                        </svg>

                        </div>
                        <p class="teal">We have served</p>
                        <div class="d-flex"><h2 class="impact-counter timerOne" data-impactnum="<?php echo get_field('impact_column_one_top'); ?>"></h2></div>
                        <div>
                            <h3><?php echo get_field('impact_column_one_bottom'); ?></h3>
                            <!-- <p class="impact-accent"><span class="accentOne"></span></p> -->
                        </div>
                    </div>
                </div>
                <div class="col col-sm-12 col-md-4 breakdown-block block-three b2">
                    <div class="inner">
                        <div class="graphic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="129.856" height="88.612" viewBox="0 0 129.856 88.612">
                        <g id="Group_26" data-name="Group 26" transform="translate(-1.5 -1.458)">
                            <g id="Chair" transform="translate(72.452 1.997)">
                            <g id="White_Backing" data-name="White Backing" transform="translate(6.425 23.705)">
                                <rect id="Rectangle_9" data-name="Rectangle 9" width="45.551" height="19.878" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            </g>
                            <path id="LeftArm" d="M376.412,88.47h8.3a2.272,2.272,0,0,1,2.272,2.272v32.422H376.412a2.272,2.272,0,0,1-2.272-2.272V90.742A2.272,2.272,0,0,1,376.412,88.47Z" transform="translate(-374.14 -72.099)" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            <path id="RightArm" d="M617.022,88.47h8.309a2.272,2.272,0,0,1,2.272,2.272v30.151a2.272,2.272,0,0,1-2.272,2.272H614.75V90.742A2.272,2.272,0,0,1,617.022,88.47Z" transform="translate(-569.199 -72.099)" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            <rect id="Base" width="32.678" height="11.929" stroke-width="1" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" transform="translate(12.853 39.136)"/>
                            <rect id="Leftleg" width="3.277" height="3.949" stroke-width="1" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" transform="translate(11.213 51.065)"/>
                            <rect id="Rightleg" width="3.277" height="3.949" stroke-width="1" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" transform="translate(43.891 51.065)"/>
                            <path id="Cushion" d="M470.565,3.779h0a42.7,42.7,0,0,0-24.412,0h0a5.785,5.785,0,0,0-4.133,5.545V32.817h.153c.464-.666,1.959-1.215,3.976-1.418h0a124.921,124.921,0,0,1,24.412,0h0c2.022.2,4.133.695,4.133,1.418h0V9.326A5.786,5.786,0,0,0,470.565,3.779Z" transform="translate(-429.169 -1.997)" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            </g>
                            <g id="Dresser" transform="translate(43.934 26.639)">
                            <rect id="Dresser-2" width="50.108" height="40.319" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            <rect id="BottomDrawer" width="44.832" height="18.483" stroke-width="1" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" transform="translate(2.639 15.836)"/>
                            <rect id="LeftDrawer" width="21.453" height="10.14" stroke-width="1" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" transform="translate(2.639 3.854)"/>
                            <rect id="Right_Drawer" data-name="Right Drawer" width="21.453" height="10.14" transform="translate(26.016 3.854)" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            <path id="MidHandle" d="M331.1,262.02h8.485a.492.492,0,0,1,.492.492h0a.492.492,0,0,1-.492.492H331.1a.492.492,0,0,1-.492-.492h0A.492.492,0,0,1,331.1,262.02Z" transform="translate(-310.332 -237.435)" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            <path id="LeftHandle" d="M269.362,176.69h8.485a.492.492,0,0,1,.492.492h0a.492.492,0,0,1-.492.492h-8.485a.492.492,0,0,1-.492-.492h0A.492.492,0,0,1,269.362,176.69Z" transform="translate(-260.281 -168.26)" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            <path id="RightHandle" d="M392.842,176.69h8.485a.492.492,0,0,1,.492.492h0a.492.492,0,0,1-.492.492h-8.485a.492.492,0,0,1-.492-.492h0A.492.492,0,0,1,392.842,176.69Z" transform="translate(-360.384 -168.26)" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            <rect id="LeftLeg-2" width="3.813" height="5.348" stroke-width="1" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" transform="translate(2.639 40.319)"/>
                            <rect id="RightLeg-2" width="3.813" height="5.348" stroke-width="1" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" transform="translate(43.656 40.319)"/>
                            </g>
                            <g id="Dining_Table" data-name="Dining Table" transform="translate(2 48.399)">
                            <path id="LeftLeg-3" d="M134.86,407.26h-2.942a4.047,4.047,0,0,0-3.775,2.582l-1.388,3.572a3.061,3.061,0,0,1-2.853,1.954h0a1.872,1.872,0,0,0-1.872,1.872h0v.869h6.562s-.148-2.391,3.283-2.524c1.638-.062,2.412-2.391,2.762-3.684a6.448,6.448,0,0,0,.223-1.689h0Z" transform="translate(-99.306 -376.939)" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            <path id="RightLeg-3" d="M206.8,407.26h2.944a4.046,4.046,0,0,1,3.773,2.582l1.388,3.572a3.065,3.065,0,0,0,2.855,1.954h0a1.87,1.87,0,0,1,1.87,1.87v.871h-6.562s.147-2.391-3.283-2.524c-1.638-.062-2.41-2.391-2.762-3.684a6.522,6.522,0,0,1-.223-1.689h0Z" transform="translate(-168.028 -376.939)" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            <path id="BottomBase" d="M189.8,407.26V411c.553.011,1.054-.013,1.6-.013s.8.017,1.6,0v-3.73Z" transform="translate(-154.246 -376.939)" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            <path id="Pole" d="M193.066,326.678V307.86c-.521.025-1.056.038-1.6.038s-1.081-.013-1.6-.038v18.818Z" transform="translate(-154.294 -296.357)" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            <path id="TopBase" d="M165.38,284.71H148.531c-.784.435-1.231.937-1.231,1.473,0,1.666,4.326,3.018,9.655,3.018s9.655-1.352,9.655-3.018C166.618,285.641,166.169,285.14,165.38,284.71Z" transform="translate(-119.792 -277.59)" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            <rect id="BottomTable" width="64.358" height="2.351" stroke-width="1" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" transform="translate(4.918 4.703)"/>
                            <rect id="TopTable" width="73.981" height="4.705" rx="2.352" fill="#fff" stroke="#a3a3a3" stroke-miterlimit="10" stroke-width="1"/>
                            </g>
                        </g>
                        </svg>

                        </div>
                        <p class="teal">We have distributed</p>
                        <div class="d-flex"><h2 class="impact-counter timerTwo" data-impactnum="<?php echo get_field('impact_column_two_top'); ?>"></h2></div>
                        <div>
                            <h3><?php echo get_field('impact_column_two_bottom'); ?></h3>
                            <!-- <p class="impact-accent"><span class="accentTwo"></span></p> -->
                        </div>   
                    </div>             
                </div>
                <div class="col col-sm-12 col-md-4 breakdown-block block-three b3">
                    <div class="inner">
                        <div class="graphic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="95.949" height="89.173" viewBox="0 0 95.949 89.173">
                        <g id="Group_23" data-name="Group 23" transform="translate(-406.339 -243.528)">
                            <g id="Group_23-2" data-name="Group 23" transform="translate(406.839 282.698)">
                            <path id="Path_12" data-name="Path 12" d="M406.839,273.268c.318-2.376,6.5-2.851,7.289,0s1.268,18.38,2.06,19.332,8.239,8.08,11.408,7.13,3.486-1.917,3.011-2.623-10.142-5.617-10.617-7.994-1.292-6.567.159-6.814,23.608,15.7,24.4,17.517,3.8,16.391,3.169,17.5-17.9,4.436-18.222,3.328-.475-9.033-1.425-9.667-18.7-12.532-19.332-13.872S406.839,273.268,406.839,273.268Z" transform="translate(-406.839 -271.304)" fill="none" stroke="#a3a3a3" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Path_13" data-name="Path 13" d="M412.3,275.418c-.217-1.835,4.306-2.595,4.781-1.17a53.331,53.331,0,0,1,.792,7.13" transform="translate(-404.561 -270.383)" fill="none" stroke="#a3a3a3" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            </g>
                            <g id="Group_24" data-name="Group 24" transform="translate(460.821 282.698)">
                            <path id="Path_14" data-name="Path 14" d="M485.88,273.268c-.318-2.376-6.5-2.851-7.289,0s-1.268,18.38-2.06,19.332-8.239,8.08-11.408,7.13-3.486-1.917-3.011-2.623,10.142-5.617,10.617-7.994,1.292-6.567-.159-6.814-23.608,15.7-24.4,17.517-3.8,16.391-3.169,17.5,17.9,4.436,18.222,3.328.475-9.033,1.426-9.667,18.7-12.532,19.33-13.872S485.88,273.268,485.88,273.268Z" transform="translate(-444.914 -271.304)" fill="none" stroke="#a3a3a3" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Path_15" data-name="Path 15" d="M469.995,275.418c.216-1.835-4.307-2.595-4.782-1.17a53.333,53.333,0,0,0-.793,7.13" transform="translate(-436.764 -270.383)" fill="none" stroke="#a3a3a3" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            </g>
                            <g id="Group_25" data-name="Group 25" transform="translate(424.005 244.032)">
                            <path id="Path_16" data-name="Path 16" d="M447.658,295.727s-24.174-19.4-27.63-30.423c-2.959-7.883,0-19.836,10.782-21.148s16.848,8.25,16.848,8.25,6.065-9.56,16.848-8.25,13.741,13.265,10.782,21.148C471.831,276.331,447.658,295.727,447.658,295.727Z" transform="translate(-418.946 -244.032)" fill="none" stroke="#a3a3a3" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            </g>
                        </g>
                        </svg>

                        </div>
                        <p class="teal">We have given</p>
                        <div class="d-flex"><h2 class="impact-counter timerThree" data-impactnum="<?php echo get_field('impact_column_three_top'); ?>"></h2></div>
                        <div>
                            <h3><?php echo get_field('impact_column_three_bottom'); ?></h3>
                            <!-- <p class="impact-accent"><span class="accentThree"></span></p> -->
                        </div>
                    </div>
                </div>
            </div>
        <div class="d-flex row impact-duo justify-content-center align-items-center">
                
        </div>

        </div>
        <div class="d-flex row justify-content-center align-items-center here pt-4 pb-4">
            <div class="container">
                <div class="col col-sm-12 col-md-4 col-chart">
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 286.244 286.236">
                <g id="Group_2" data-name="Group 2" transform="translate(370.877 -185.198)">
                    <path id="Path_5" data-name="Path 5" d="M-143.636,212.532l-16.079,22.13a115.6,115.6,0,0,1,47.739,93.655A115.782,115.782,0,0,1-227.757,444.1,115.781,115.781,0,0,1-343.535,328.317,115.781,115.781,0,0,1-227.757,212.535V185.2c-47.421,0-87.9,20.628-115.778,58.994a143.113,143.113,0,0,0,31.66,199.9,143.113,143.113,0,0,0,199.9-31.66A143.113,143.113,0,0,0-143.636,212.532Z" transform="translate(0 0)" fill="#dfdfdf"/>
                    <path id="Path_6" data-name="Path 6" d="M-243.878,212.532C-269.457,193.95-296.384,185.2-328,185.2v27.337a115.235,115.235,0,0,1,68.043,22.127Z" transform="translate(100.243 0)" fill="#6bbf4e"/>
                </g>
                </svg>

                </div>
                <div class="col col-sm-12 col-md-8 chart-supporting">
                    <h3>Why it matters</h3>
                    <p>With more than 10% of Wake County households living below the federal poverty line, 1 out of 10 cannot afford the cost of basic household furnishings.</p>
                </div>
            </div>
        </div>

        <!-- <div class="jumbotron stat-banner" style="background-image: url(<?php echo get_field('impact_section_three_banner'); ?>);">
            <div class="container">
                    <h1 style="border-bottom: 4px solid white; display: inline-block; font-size: 3.5rem;"><div style="margin: 0 auto;"><strong><?php echo the_field('impact_section_three_banner_title_top'); ?></strong></div></h1>
                    <h4><?php echo the_field('impact_section_three_banner_title_bottom'); ?></h4>
            </div>
        </div> -->
        <div class="testimony-banner">
            <div class="container d-flex">
                <div class="col testimony-banner-img-wrap">
                    <div class="testimony-banner-img d-flex" style="background-image: url(<?php echo get_field('impact_testimony_banner_image'); ?>);">
                        <p><?php echo get_field('impact_testimony_banner_image_caption'); ?></p>
                    </div>
                </div>
                <div class="col quote d-flex ">
                    <h4 style="font-style: italic;"><?php echo the_field('impact_section_four_banner_title'); ?></h4>
                </div>
            </div>
        </div>

               
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div><!-- #main-content -->
<!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player
    src="https://assets1.lottiefiles.com/datafiles/HlIGYbSpHNmLYD5/data.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" autoplay >
</lottie-player> -->

<?php get_footer(); 
