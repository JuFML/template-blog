<?php get_header() ?>
<!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">         

          <?php if(have_posts()): ?>
            <?php while(have_posts()): ?>
              <?php the_post(); ?>
                <div class="item">
                <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('large', array('class'=>'thumb')); ?>
                <?php endif; ?>                
                <?php get_template_part('template_parts/post-slider') ?>  
                </div>                    
            <?php endwhile; ?>
          <?php endif; ?>    
        </div>
      </div>
    </div>    
    <!-- Banner Ends Here -->
    
    
    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                <h3><?php the_archive_title(); ?></h3><br/>
                    <?php if(have_posts()): ?>
                      <?php while(have_posts()): ?>
                        <?php the_post(); ?>
                          <?php get_template_part('template_parts/post') ?>            
                      <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="<?php home_url() ?>">View All Posts</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php get_sidebar() ?>

        </div>
      </div>
    </section>
<?php get_footer() ?>