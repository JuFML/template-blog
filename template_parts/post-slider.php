<div class="item-content">
    <div class="main-content">        

    <div class="meta-category">
        <span id="cathegory"><?php the_category(); ?></span>
    </div>
    <a href="post-details.html"><h4><?php the_title() ?></h4></a>
    <ul class="post-info">
        <li><a href="#"><?php the_author(); ?></a></li>
        <li><a href="#"><?php echo get_the_date() ?></a></li>
        <li><a href="#"><?php get_comments() ?></a></li>
    </ul>
    </div>
</div>            
</div> 