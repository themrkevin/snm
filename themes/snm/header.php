<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <img class="flag" src="<?php bloginfo('template_url'); ?>/img/nav-center-img.png" />
    <?php if(has_nav_menu('main')): ?>
      <nav class="main-nav">
        <a href="#" class="nav-toggle">Menu</a>
        <div id="main-nav-container" class="main-nav-container">
          <span class="label">Menu</span>
          <?php 
            wp_nav_menu(array(
              'theme_location' => 'main',
              'container' => '',
            ));
          ?>
        </div>
      </nav>
    <?php endif; ?>
    <div class="header-img pinned">
    <img src="<?php bloginfo('template_url'); ?>/img/main.jpg" />
    </div>
    <img class="logo" src="<?php bloginfo('template_url'); ?>/img/sam-mark-married-banner.png" />
  </header>
