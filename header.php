<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.1/flickity.min.css">
  <link href='https://fonts.googleapis.com/css?family=Alex+Brush|Raleway|Lato|Montserrat' rel='stylesheet' type='text/css'>
  
  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/animate.css">

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <div id="fullpage">
        <div class="section">
          <header>
              <div class="headerContainer nav">
                  <div class="navWrapper">
                      <div class="navItem">
                          <?php wp_nav_menu( array(
                            'container' => false,
                            'theme_location' => 'primary'
                          )); ?>
                      </div>
                  </div>
              </div> 

          </header><!--/.header-->

