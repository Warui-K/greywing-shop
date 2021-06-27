<?php
/**
 * Template part for displaying posts
 */
?>
<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="blog__item">
        <?php 
            if(has_post_thumbnail()){
              ?>
        <div class="blog__item__pic">
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail();?>
            </a>
        </div>
        <?php }?>
        <div class="blog__item__text">
            <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
            <ol class="list-unstyled">
                <li> <?php the_category(', ');?></li>
                <li>By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a>
                </li>
                <li><?php echo get_the_date();?></li>
            </ol>
        </div>
    </div>
</div>