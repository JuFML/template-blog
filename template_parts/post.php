<div class="blog-post">

    <div class="blog-thumb">
        <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('large', array('class'=>'post-thumb')); ?>
        <?php endif; ?>
    </div>

    <div class="down-content">
        <span><?php the_category() ?></span>
        <a href="<?php the_permalink(); ?>"><h4><?php the_title() ?></h4></a>
        <div class="post--excerpt"><?php the_excerpt(); ?></div>
        <ul class="post-info">
        <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author() ?></a></li>
        <li><a href="#"><?php echo get_the_date() ?></a></li>
        <li><a href="#"><?php get_comments() ?></a></li>
        </ul>
       
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


                