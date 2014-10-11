<?php
/**
 *
 *
 */

// Fon
function wrap_shortcode($atts, $content = null) {
	
	$output = '<div class="wrap">';
	$output .= do_shortcode($content);
	$output .= '</div> <!-- wrap (end) -->';
   
	return $output;
}
add_shortcode('wrap', 'wrap_shortcode');

// Minus

function minus_shortcode($atts, $content = null) {
	
	$output = '<div class="minus"></div>';
   
	return $output;
}
add_shortcode('minus', 'minus_shortcode');

// Fon2

function wrap2_shortcode($atts, $content = null) {
	
	$output = '<div class="wrap2">';
	$output .= do_shortcode($content);
	$output .= '</div> <!-- wrap (end) -->';
   
	return $output;
}
add_shortcode('wrap2', 'wrap2_shortcode');

// Box

function box_shortcode($atts, $content = null) {
	
	extract(shortcode_atts(
			array(
				'class'      => '',
				'link'      => ''
			), $atts));

	$output .= '<div class="box '.$class.'">';
	if ($link) $output .= '<a href="'.$link.'">';
	$output .= do_shortcode($content);
	if ($link) $output .= '</a>';
	$output .= '</div> <!-- box (end) -->';
   
	return $output;
}
add_shortcode('box', 'box_shortcode');

?>