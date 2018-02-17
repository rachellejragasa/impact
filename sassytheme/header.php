<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<title>Impact Dance</title>

<!-- CSS -->
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">  
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>

<body>

<nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo get_home_url(); ?>" class="brand-logo">
        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/02/resize.jpg">
      </a>
      <ul class="right hide-on-med-and-down">
      <?php
wp_nav_menu(array('menu' => 'primary', 'items_wrap' => '<ul><li id="item-id"></li>%3$s</ul>'));
?>
      </ul>

      <ul id="nav-mobile" class="side-nav">
      <?php
wp_nav_menu(array('menu' => 'primary', 'items_wrap' => '<ul><li id="item-id"></li>%3$s</ul>'));
?>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

<div id="main">
<div class="banner-container">
  <div class="section no-pad-bot">
    <?php if (is_page(6)) {?> <!-- home = '6' -->
      <div class="container">
        <h3 class="header center">
          <span><?php the_field('homepage-header-text'); ?></span>
        </h3>
      </div>
    <? } else if (is_page(14)) {?> <!-- escape = '14' -->
      <div class="boxpage-escape">
        <div class="container">
          <?php the_field('escape-header-text'); ?>
        </div>  
      </div>  
    <? } ?>
  </div>
  <div class="banner"> <!-- impact youth = '8' && performance = '10' -->
    <?php if (is_page(8) || is_page(10)) { ?>
      <img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" style="transform: translateY(-10vw);" />
    <? }?>
    
    <?php if (is_page(12)) { ?> <!-- livevibe = '12' -->
      <img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" style="transform: translateY(-2vw);" />
    <? }?>

    <?php if (is_page(6) || is_page(14) || is_page(16)) { ?> <!-- classes = '16'-->
      <img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""/>
    <? }?>

    </div>
</div>