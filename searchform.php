<div class="search-wrap">
    <div class="container">
        <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
        <?php $unique_id = esc_attr( uniqid('search-form-') );?>
        <form action="<?php echo esc_url(home_url('/'));?>" method="post">
            <input type="search" id="<?php echo $unique_id; ?>" name="s" value="<?php the_search_query(  );?>"
                class="form-control" placeholder="<?php _e( 'Search keyword and hit enter...', 'greywingshop');?>">
        </form>
    </div>
</div>