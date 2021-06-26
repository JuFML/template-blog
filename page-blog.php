<?php
/*
Template name: Blog Entries
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
                <h2><?php the_title(); ?></h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
     
    <!-- Banner Ends Here -->

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">                
                <div class="col-lg-6">
                  <div class="blog-post">
                    <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>
                    <?php the_post(); ?>
                    <?php get_template_part('template_parts/post-card'); ?>   
                    <?php endwhile; ?>
                    <?php endif; ?>   
                  </div>
                </div>
            </div> 

            <div class="col-lg-12">
              <ul class="page-numbers">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
              </ul>
            </div>            
          </div>                           
         
          <?php get_sidebar(); ?> 
         
        </div> 
                 
      </div>
    </section>

  
    




<?php get_footer(); ?>