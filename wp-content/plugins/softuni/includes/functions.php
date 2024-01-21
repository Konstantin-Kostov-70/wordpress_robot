<?php
// File for generic functions

/**
 * This function is short code
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