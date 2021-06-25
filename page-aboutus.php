<?php
/*
Template name: About Us
*/
?>
<?php get_header(); ?>
<!-- Page Content -->
    <!-- Banner Starts Here -->

    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4><?php the_category(); ?></h4>
                <h2><?php the_title() ?></h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
     
    <!-- Banner Ends Here -->
    
    
    <section class="about-us">
      <div class="container">
      	
        <div class="row">
          <div class="col-lg-12">
            <?php the_content();  ?>
            
        
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        
        
      </div>
    </section>
    
<?php get_footer() ?>