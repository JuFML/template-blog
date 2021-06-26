
<div class="item-content">
    <div class="main-content"> 
        <?php the_category(); ?> 
        
        <a href="<?php the_permalink(); ?>"><h4><?php the_title() ?></h4></a>
        <ul class="post-info">
            <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></li>
            <li><a href="#"><?php echo get_the_date() ?></a></li>
            <li><a href="#"><?php comments_number( '0 COMENTÁRIOS', '1 COMENTÁRIO', '% COMENTÁRIOS' ) ?></a></li>
        </ul>
    </div>
</div>            
 