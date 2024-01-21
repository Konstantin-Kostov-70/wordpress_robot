<?php
// File for generic functions

/**
 * This function is short code
 */

function emoji_shortcode( $atts, $emoji = null ) {
    $atts = shortcode_atts(array(
       'atts' => 'default',
    ), 
    $atts, 
    'emoji');

    $emoji_values = array(
        'robot' => '&#129302;',
        'smile' => '&#128512',
        'default' => '',
    );

    $emoji = isset( $emoji_values[ $atts['atts'] ] ) ? $emoji_values[ $atts['atts'] ] : $emoji_values['default'];

	return '<span class="caption">' . $emoji . '</span>';
}
add_shortcode( 'emoji', 'emoji_shortcode' );