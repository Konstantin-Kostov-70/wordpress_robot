<div class="col-sm-4">
    <div class="porduct-box">
        <a href="<?php echo get_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
            <?php endif; ?>
            <!-- <img class="img-responsive" src="http://localhost/my-project/wp-content/themes/softuni/assets/images/product-1.jpg" alt="product"> -->
            <h3 class="product-title"><?php the_title(); ?>
        </a>
    </div>
</div>