<?php
/**
 * The template for displaying all single posts
 * 
 */
get_header( );?>

<?php if (have_posts()):?>
<?php while (have_posts()):
    the_post();?>
<?php get_template_part( 'template-parts/content/content-page');

//If comments are open or there is at least one comment, load up the comment template
if( comments_open() || get_comments_number()){
comments_template();
}
?>
<?php endwhile;?>
<?php else : ?>

<!-- CONTENT -->
<section class="py-12">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">

                <!-- Icon -->
                <div class="mb-7">🙁</div>

                <!-- Heading -->
                <h2 class="mb-5"><?php esc_html_e('The page you are looking ', 'greywingshop');?>.</h2>

                <!-- Text -->
                <p class="mb-7">
                    <?php esc_html_e(' Sorry, we couldn\'t find the page you where looking for.
              We suggest that you return to home page. Maybe try a search?', 'greywingshop');?>
                </p>


                <!-- Button -->
                <a class="btn btn-shop" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php esc_html_e('Go to Homepage', 'greywingshop');?>
                </a>

            </div>
        </div>
    </div>
</section>
<?php 
endif;?>

<?php get_footer( );?>