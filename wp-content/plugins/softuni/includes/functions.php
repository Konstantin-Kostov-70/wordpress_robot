<?php
// File for generic functions


/**
 * This function is custom short code
 */

function custom_emoji( $atts, $emoji = null ) {
    $emoji_atts = shortcode_atts(array(
       'id' => '',
    ), 
    $atts, );

    $emoji_values = array(
        'robot' => '&#129302;',
        'smile' => '&#128512',
    );

    if ( ! empty( $emoji_atts['id'] && array_key_exists( $emoji_atts['id'], $emoji_values ) ) ) {
        $emoji = $emoji_values[$emoji_atts['id']];
    }

	return '<span class="caption">' . $emoji . '</span>';
}
add_shortcode( 'emoji', 'custom_emoji' );


function robots_like() {
  

    if ( empty( $_POST['action'] ) ) {
        return;
    }

    $post_id = esc_attr( $_POST['post_id'] );

    $likes_number = get_post_meta( $post_id, 'likes', true );

    if ( empty( $likes_number ) ) {
        $likes_number = 0;
    }

    // add custom logit to prevent bad users
    update_post_meta( $post_id, 'likes', $likes_number + 1 );
    // echo json_encode(array('likesCount' => $likes_number + 1));
    // wp_die();
    wp_send_json($likes_number + 1);
}

add_action( 'wp_ajax_nopriv_robots_like', 'robots_like' );
add_action( 'wp_ajax_robots_like', 'robots_like' );



// function robots_like() {

//     if ( empty( $_POST['like'] ) ) {
//         return;
//     }

//     $post_id = esc_attr( $_POST['like'] );
//     $likes_number = get_post_meta( $post_id, 'likes' , true);

//     update_post_meta($post_id, 'likes', $likes_number + 1);
// }

// add_action( 'wp_ajax_nopriv_robots_like', 'robots_like' );
// add_action( 'wp_ajax_robots_like', 'robots_like' );