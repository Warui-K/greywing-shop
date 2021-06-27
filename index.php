<?php
/**
 * The template for displaying archive pages
 */
get_header( );

$description = get_the_archive_description();
?>
<?php if (have_posts()) : ?>

<section class="hero-wrap hero-wrap-2"
    style="background-image: url('<?php echo get_theme_mod('gr_goto_shop_bg_img');?>');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo esc_url(home_url('/')); ?>">Home <i
                                class="bi bi-arrow-right"></i></a></span>
                    <span><?php the_title('<strong class="text-white">', '</strong>');?> <i
                            class="bi bi-arrow-right"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>

<div class="site-section latest">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6">
                <div class="section-title">
                    <h2>Blog and<strong class="text-info"> News Posts</strong></h2>
                </div>
            </div>

        </div>
        <div class="row" data-masonry='{"percentPosition": true }'>

            <?php while (have_posts()): ?>

            <?php the_post();?>

            <?php get_template_part( 'template-parts/content/content');?>


            <?php endwhile;?>

        </div>
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <div class="site-block-27">
                <?php wp_link_pages( );?>
                </div>
            </div>
        </div>

        <?php else : ?>
        <!-- CONTENT -->
        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">

                        <!-- Icon -->
                        <div class="mb-7">🙁</div>

                        <!-- Heading -->
                        <h1 class="mb-5"><?php esc_html_e('No Posts yet', 'greywingshop');?>.</h1>

                        <!-- Text -->
                        <p class="mb-7">
                            <?php esc_html_e(' Sorry, we haven\'t yet added any posts', 'greywingshop');?>
                        </p>


                        <!-- Button -->
                        <a class="btn btn-outline-info" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php esc_html_e('Go to Homepage', 'greywingshop');?>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>
    </div>


</div>
<?php get_footer( );?>