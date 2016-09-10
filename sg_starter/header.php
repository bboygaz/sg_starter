<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

        <header id="site-header">
            <div class="container">

                <p class="h1" id="site-name"><?php bloginfo('name'); ?></p>
                <p id="site-description"><?php bloginfo('description'); ?></p>

            </div>
        </header>

        <nav class="sm-grid11" id="header-nav">
            <div class="container">

                <div id="burger">
                    <span class="icon ion-navicon-round"></span>
                </div>
                <?php wp_nav_menu(array('theme_location' => 'Menu-principal')); ?>

            </div>
        </nav>
