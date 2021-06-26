<?php
if(have_comments()) {
    foreach($comments as $comment) {
        ?>
        <div class="content">
            <ul>
                <li>
                    <div class="author-thumb">
                        <?php echo get_avatar($comment, 60); ?>
                    </div>
                    <div class="right-content">
                        <h4><?php comment_author(); ?><span><?php echo get_the_date(); ?></span></h4>
                        <p><?php comment_text(); ?></p>
                    </div>
                </li>
                   
            </ul>
        </div>
        <?php 
    }
}
?>

