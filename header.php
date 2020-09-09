<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * 
 *
 * @package Bega
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 	<link rel="profile" href="https://gmpg.org/xfn/11">
 -->	<!-- <script src="http://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<header id="masthead" class="site-header">
<div id="nav">

    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="social-icons">
          <!--Facebook-->
<a href="https://www.facebook.com/begabetonstahlbau/?modal=admin_todo_tour" title="Facebook" class="fa fa-facebook"></a>
<a href="https://www.google.com/search?q=bega+betonstahlbau&oq=bega&aqs=chrome.1.69i59l2j35i39j0l2j69i60l3.1821j0j7&sourceid=chrome&ie=UTF-8" class="fa fa-google"></a>
<!-- <a href="#" class="fa fa-instagram"></a> -->
        </div>
      	<div class="logo">
      	    <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/img/bega.png" alt="" /></a>
      	    </div>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      
        </div>
<div class="collapse navbar-collapse" id="nav-collapse">
	 <!-- <ul class="nav navbar-nav"> -->
        <?php
        wp_nav_menu( array(
                'menu'              => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => '',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => '',
                'walker'            => '')
            );

     
        ?>

 <!--    </ul> -->
      </div><!-- /.container-fluid -->
  </div>
    </nav>
	</div>

	</header><!-- #masthead -->


	<div id="content" class="site-content">

