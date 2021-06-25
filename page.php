<?php get_header() ?>
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
    
    
    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                    <?php if(have_posts()): ?>
                      <?php while(have_posts()): ?>
                        <?php the_post(); ?>
                        <div class="blog-post">
                            <div class="blog-thumb">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('large', array('class'=>'post-thumb')); ?>
                                <?php endif; ?>
                            </div>

                            <div class="down-content">
                                <span><?php the_category() ?></span>
                                <a href="<?php the_permalink(); ?>"><h4><?php the_title() ?></h4></a>
                                <div class="post--content"><?php the_content(); ?></div>
                                                            
                                <div class="post-options">
                                <div class="row">
                                    <div class="col-6">
                                    <ul class="post-tags">
                                        <li><i class="fa fa-tags"></i></li>
                                        <?php the_tags( '', ', ', '' ) ?>                
                                    </ul>
                                    </div>
                                    <div class="col-6">
                                    <ul class="post-share">
                                        <li><i class="fa fa-share-alt"></i></li>
                                        <li><a href="#">Facebook</a>,</li>
                                        <li><a href="#"> Twitter</a></li>
                                    </ul>
                                    </div>
                                </div>
                                </div>
                            </div>

                            </div>            
                      <?php endwhile; ?>
                    <?php endif; ?>
                </div> 

                
                
                

              </div>
            </div>
          </div>          

          <?php get_sidebar() ?>

        </div>
      </div>
      
    </section>
    
<?php get_footer() ?>