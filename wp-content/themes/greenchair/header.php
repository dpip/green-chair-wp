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
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">
        <?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css?" />
    </head>
    <body <?php body_class(); ?>>
        <div id="wrapper">
            <div id="main">
                <nav class="navbar navbar-expand-lg fixed-top  navbar-dark bg-dark">
                    <div class="container">
                        <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/greenchairlogo.svg" /></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <?php wp_nav_menu( array( 'theme_location' => 'main_navigation', 'container' => false, 'menu' => 'main-navigation', 'menu_class'=> 'navbar-nav ml-auto', 'walker' => new wp_bootstrap_navwalker() ) ); ?>
                        </div>
                    </div>
                </nav>
        