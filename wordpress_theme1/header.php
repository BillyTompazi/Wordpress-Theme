<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <title>
          <?php bloginfo('name'); ?> |
          <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
      </title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>
        <nav class="my-nav navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand" href="http://localhost/Wordpress_theme/">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/cup-of-hot-chocolate.png" class="img-fluid logo"/>
                <span>Coffee</span>
                <span class="green-color">Drop</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="custom-toggler navbar-toggler-icon"></span>
            </button>
                  <?php
                  wp_nav_menu( array(
                        'theme_location'  => 'primary',
                        'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'bs-example-navbar-collapse-1',
                        'menu_class'      => 'navbar-nav justify-content-end my-ul',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                      ) );
                  ?>
        </nav>
