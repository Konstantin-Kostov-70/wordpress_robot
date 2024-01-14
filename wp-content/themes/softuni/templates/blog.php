<?php /* Template Name: Blog */ ?>

<?php
$blog_query_args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 3,
    'paged'          => get_query_var('paged'),

);

$blog_query = new WP_Query($blog_query_args);

?>

<?php get_header(); ?>

<div class="intro row">
    <div class="overlay"></div>
    <div class="col-sm-6 col-sm-offset-6">
        <h2 class="header-quote">Save time and lower</h2>
        <p>
            Your sweeping costs with the
        </p>
        <h1 class="header-title">Robot<br><span class="thin">Factory</span></h1>
    </div>
</div> <!-- /.intro.row -->
</div> <!-- /.container -->
<div class="nutral"></div>
</section> <!-- /#header -->

<!-- Product -->
<?php if ($blog_query->have_posts()) : ?>
    <section id="product" class="product">
        <div class="container section-bg">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box">
                        <h2 class="title">Welcom to our <span>Blog</span></h2>
                        <a href="#" class="btn btn-default btn-robot">view all posts</a>
                    </div>
                </div>
            </div>


            <div class="row">
                <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <?php get_template_part('partials/content', 'blog'); ?>
                <?php endwhile; ?>
            </div>

        </div>
    </section>

    <div class="paginator">
        <?php
        $GLOBALS['wp_query'] = $blog_query;
        echo paginate_links();
        // the_posts_pagination( array(
        //     'mid_size'  => 2,
        //     'prev_text' => __( 'Back', 'textdomain' ),
        //     'next_text' => __( 'Next', 'textdomain' ),
        // ) ); 
        ?>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>