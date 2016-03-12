<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
    <!-- Nav Bars -->
    <div id="threeLines">
      <div id="line"></div>
    </div>
    <!--  -->
<nav>
  <?php wp_nav_menu( array(
    'container' => 'ul',
    'theme_location' => 'primary'
  )); ?>
</nav>
</header>



