<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package auaha
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/owl/owl.theme.default.min.css">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" sizes="192x192">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header-full">
        <div class="menu-header">
            <div class="container">
                <div class="row menu__menu">
                
                    <div class="menu__logo">
                        <h1><a class="logo_img_desk" href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg"></a></h1>
                    </div>

                    <div class="social-menu">
                        <?php wp_nav_menu(array('menu' => 'menu', 'container' => 'nav', 'container_class' => 'nav_menu', 'menu_class' => 'menu')); ?>
                        <div class="social">
                        </div>
                    </div>

                    <div class="search--menu">
                            <form role="search" method="get" id="searchform" autocomplete="off">
                                <div class="itens--form"><label for="s"></label>
                                <input type="text" value="" name="s" id="s" placeholder="Pesquise o que desejar..." />
                                <input type="submit" id="searchsubmit" value="" />
                                </div>
                            </form>
                    </div>
                    <div class="menu-resp">
                                
                        <a href="#" class="slide-menu-open"><img src="<?php bloginfo('template_directory'); ?>/img/menu-resp.png" width="30" height="30"></a>
                        <div class="side-menu-overlay" style="width: 0px; opacity: 0;"></div>
                        <div class="side-menu-wrapper">
                            <a href="#" class="menu-close">&times;</a>
                            <a class="logo_img" href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg"></a>
                            <ul>
                            <div class="social-menu">
                                <?php wp_nav_menu(array('menu' => 'menu', 'container' => 'nav', 'container_class' => 'nav_menu', 'menu_class' => 'menu')); ?>

                                <div class="social">
                                </div>

                            </div>
                            </ul>
                        </div>
                        
                    </div>
                           
                    </div>

                </div>
            </div>
        </div>
    </header>
