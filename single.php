<?php
/**
 * The template for displaying all single posts
 * 
 */
get_header( );


    the_post();
    global $post;
    $author_ID = $post->post_author;
    $author_URL = get_author_posts_url($author_ID);
    get_template_part( 'template-parts/content/content-blog');

    //If comments are open or there is at least one comment, load up the comment template
    if( comments_open() || get_comments_number()){
        comments_template();
    }

get_footer( );