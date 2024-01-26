<?php
// File for generic functions

add_theme_support( 'post-thumbnails' );
/**
 * This function is custom short code
 */

function custom_emoji($atts, $emoji = null)
{
    $emoji_atts = shortcode_atts(
        array(
            'id' => '',
        ),
        $atts,
    );

    $emoji_values = array(
        'robot' => '&#129302;',
        'smile' => '&#128512',
    );

    if (!empty($emoji_atts['id'] && array_key_exists($emoji_atts['id'], $emoji_values))) {
        $emoji = $emoji_values[$emoji_atts['id']];
    }

    return '<span class="caption">' . $emoji . '</span>';
}
add_shortcode('emoji', 'custom_emoji');


function robots_like()
{


    if (empty($_POST['action'])) {
        return;
    }

    $post_id = esc_attr($_POST['post_id']);

    $likes_number = get_post_meta($post_id, 'likes', true);

    if (empty($likes_number)) {
        $likes_number = 0;
    }

    // add custom logit to prevent bad users
    update_post_meta($post_id, 'likes', $likes_number + 1);
    // echo json_encode(array('likesCount' => $likes_number + 1));
    // wp_die();
    wp_send_json($likes_number + 1);
}

add_action('wp_ajax_nopriv_robots_like', 'robots_like');
add_action('wp_ajax_robots_like', 'robots_like');


/**
 * This function will display related posts to our single robot
 */
function robot_display_related_post($post_id = 0)
{
    if (empty($post_id)) {
      return;
    }

    $related_posts = get_field('related_posts', $post_id);

    if (!empty($related_posts) && is_array($related_posts)) {
        foreach ($related_posts as $post) {
          ?>
            <div class="related-post">
              <a href="<?php echo get_permalink($post) ?>"><?php echo get_the_title($post) ?></a>
            </div>
          <?php
        }
    }
}

function display_featured_robots_posts($post_per_page)
{
	if ( empty($post_per_page )) {
		$post_per_page = 3;
	}

	$robots_query_args = array(
       'post_type' => 'robot',
       'post_status' => 'publish',
       'post_per_page' => $post_per_page,
       'meta_query' => array(
         array(
          'key' => 'is_featured',
          'value' => 1,
          'compare' => '='
         ),
       )
	);

	$robots_query = new WP_Query( $robots_query_args );

    ?>
    <?php if( $robots_query->have_posts()): ?>
        <?php while($robots_query->have_posts()) : $robots_query->the_post()?>
        <div class="col-sm-4">
                <div class="porduct-box">
                  <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']); ?>
                    <!-- <img class="img-responsive" src="http://localhost/my-project/wp-content/themes/softuni/assets/images/product-1.jpg" alt="product"> -->
                    <a href="<?php echo get_permalink(); ?>"><h3 class="product-title"><?php the_title(); ?></h3></a>
                </div>
            </div>
        <?php endwhile ?>
      <?php endif ?>
    <?php

}
