<?php 
add_action('wp_enqueue_scrips', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . 'style.css');
}

?>