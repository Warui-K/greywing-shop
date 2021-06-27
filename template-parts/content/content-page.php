<?php
/**
 * Template part for displaying page content in page.php
 */
?>

    <div class="site-section bg-image overlay"
    style="background-image: url('<?php echo get_theme_mod('gr_service_bg_about');?>');">
    <div class="container">
        <div class="row justify-content-center text-center">
        <h1 class="mb-0 text-white"><?php the_title();?></h1>

        </div>
    </div>
</div>

<div class="bg-light py-3 px-6">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0">
                <a href="/">Home</a> <span class="mx-2 mb-0">/</span>
                <strong class="text-black"><?php the_title();?></strong>
            </div>
        </div>
    </div>
</div>
<div class="b-example-divider"></div>

<div class="site-section latest">
    <div class="container">

        <div class="row">
            <div class="col-md-12">


                <article class="blog-post text-dark">
                    <h2 class="blog-post-title"> <?php the_title();?></h2>

                    <p><?php the_content();?></p>
                    <hr>
                 </article>


            </div>
         
        </div><!-- /.row -->
    </div>
</div>