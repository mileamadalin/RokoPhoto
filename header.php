<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Basic Page Needs
================================================== -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Preloader
    ================================================== -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>

    <!-- Navigation
    ================================================== -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only"><?php _e( 'Toggle Navigation', 'rokophotolite' ); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>              
          </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php $logourl = get_theme_mod('rokophotolite_logo_image'); if(!empty($logourl)) { echo $logourl; } else { echo get_template_directory_uri().'/img/logo.png';} ?>" alt="logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
                wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu' => 'Primary Menu',
                'container' => false,
                'fallback_cb' => 'rokophotolite_new_setup',
                'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>'
                ));
            ?> 
        </div><!-- End navbar-collapse -->
      </div><!-- End container -->
    </nav>

    <!-- Blog
    ================================================== -->
    <section id="blog" style="background-image: url('<?php header_image(); ?>');">
      <div class="dark-overlay vision">
        <div class="centered vision-border wow bounceIn">
          <h4>Welcome to</h4>
          <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h2>
          <?php get_template_part( 'loop-meta' ); //Loads the loop-meta.php template. ?>
        </div>
      </div>
    </section>