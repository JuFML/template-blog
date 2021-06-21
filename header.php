<!DOCTYPE html>
<html lang="en">

  <head>   

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">

    <?php wp_head(); ?>
    
    <title>Stand CSS Blog by TemplateMo</title>

  </head>

  <body>
  

   <!-- ***** Preloader Start ***** -->
    <!--<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
        <?php 
          if(has_custom_logo()) {
            the_custom_logo();
          }
          ?>
          <!--<a class="navbar-brand" href="index.html"><h2>Stand Blog<em>.</em></h2></a>-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <?php
          if(has_nav_menu('primary')) {
            wp_nav_menu(array(
              'theme_location' => 'primary',
              'fallback_cb' => false,
              'container_class' => 'collapse navbar-collapse',
              'container_id' => 'navbarResponsive',
              'menu_class' => 'navbar-nav ml-auto'
            ));
          }
          ?>
         
    </header>