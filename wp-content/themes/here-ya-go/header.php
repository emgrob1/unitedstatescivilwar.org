<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />  
  <title><?php wp_title( '|', true, 'right'); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page">
  
    <header id="masthead" class="site-header">
      <div class="site-header-inner clearfix">
        <div class="container">
          <!--<h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1>-->
      
        </div>
      </div>
    </header><!-- #masthead -->

    <?php

    $options = get_option('hereyago_theme_options');

    if ( $options['front_slider_enabled'] == 1 && is_front_page() ): 
      get_template_part( 'front-slider' );
    endif; ?>
    
    <div id="main" class="clearfix">
      <div class="main-inner">
        <div class="container">