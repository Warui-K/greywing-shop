<?php get_header( );?>

 <!-- CONTENT -->
 <section class="py-12">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">

            <!-- Icon -->
            <div class="mb-7">🙁</div>

            <!-- Heading -->
            <h2 class="mb-5"><?php esc_html_e('404. Nothing here', 'greywingshop');?>.</h2>

            <!-- Text -->
            <p class="mb-7">
             <?php esc_html_e(' Sorry, we couldn\'t find the page you where looking for.
              We suggest that you return to home page. Maybe try a search?', 'greywingshop');?>
            </p>

            <p class="mb-7">
             <?php get_search_form();?>
            </p>
            
            <!-- Button -->
            <a class="btn btn-shop" href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <?php esc_html_e('Go to Homepage', 'greywingshop');?>
            </a>

          </div>
        </div>
      </div>
    </section>
<?php echo do_shortcode("[newsletter_form]"); ?>

<?php get_footer( );?>
