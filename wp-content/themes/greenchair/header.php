<?php
/**
* The Header for our theme.
*
* Displays all of the <head> section and everything up till <div id="main">
*
* @package GreenChair2017
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico" type="image/x-icon">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link href="https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">
        <?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css?" />
    </head>
    <body <?php body_class(); ?>>
        <div id="wrapper">
            <div id="main">
                <nav id="nav-cta-wrapper" class="navbar sticky-top navbar-expand-xl navbar-light bg-light">
                    <div class="container-fluid flex-xl-column">
                        <a class="navbar-brand" href="<?php echo site_url(); ?>"><img class="brand-desktop" src="<?php bloginfo('template_directory'); ?>/assets/images/tgcplogo.svg" /></a>
                        
                        <div class="nav-cta-wrap">
                            <a href="/donate" class="btn--xsm green donate">DONATE</a>
                            <a href="/give" class="btn--xsm white">SUPPORT</a>
                            <div class="three">
                                <div class="navbar-toggler collapsed hamburger" id="hamburger-1">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                                </div>
                            </div>
                        </div>
                        <?php wp_nav_menu( array( 'theme_location' => 'main_navigation', 'container' => false, 'menu' => 'main-navigation', 'menu_class'=> 'navbar-nav ml-auto', 'walker' => new wp_bootstrap_navwalker() ) ); ?>
                    </div>
                    <a class="navbar-brand-mobile" href="<?php echo site_url(); ?>"><img  src="<?php bloginfo('template_directory'); ?>/assets/images/chair.svg" /><span class="brand-text"><span>The</span> Green Chair</span></span></a>
                    <?php if( get_field('notification_banner_') ): ?>
                        <section id="notification-banner">
                            <div class="notification-content">
                                <?php if( get_field('notification_text') ): ?>
                                    <span>!</span>
                                    &nbsp;&nbsp; <?php the_field('notification_text'); ?>
                                    <a class="btn--xsm" href="<?php the_field('notification_button_link'); ?>" ><?php the_field('notification_button_text'); ?></a>
                                 <?php endif; ?>
                            </div> 
                            <div class="close-banner">X</div>
                        </section>
                    <?php endif; ?>
                </nav>
        