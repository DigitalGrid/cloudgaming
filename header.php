<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php wp_title("|", true, "right"); ?>
    <?php bloginfo("name"); ?>
  </title>
  
  <?php wp_head(); ?>
</head>
<body <?php body_class ?>>



  



<header id="site-header" class="site-header" style="background-image: linear-gradient(rgba(103, 121, 196, 0.9), rgba(103, 121, 196, 0.9)), url('<?php header_image(); ?>'); min-height: <?php echo get_custom_header()->height . "px"; ?>"> 
  <div id="bubble-header" class="bubble-header">
    <canvas id="bubble-canvas"></canvas>
  </div>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <?php wp_nav_menu(
        array(
          "theme_location" => "header-menu",
          "container" => "div",
          "container_class" => "navbar-collapse collapse text-center",
          "menu_class" => "nav navbar-nav main-nav",
          "container_id" => "collapse-1",
        )
      ); ?>
    </div><!-- /.container-fluid -->
  </nav>
  <!--<img id="header-img" src="<?php //header_image(); ?>" height="<?php //echo get_custom_header()->height; ?>" width="<?php //echo get_custom_header()->width; ?>" alt="" />-->
  <div class="headline">
    <div class="container headline-container-text">
      <div class="headline-text text-center">
       <img src="<?php bloginfo("template_url")?>/img/cloud-logo.png" title="cloud logo">
       <!--<h1><?php //bloginfo("name"); ?></h1>-->
       <h2><?php bloginfo("description"); ?></h2>
      </div>
    </div>
  </div>
</header>

 
<!-- 
<a href="<?php //is_home(); ?>">
  <img src="<?php //bloginfo("template_url")?>/img/logo.png" title="<?php //bloginfo("name");?>">
</a>
-->




