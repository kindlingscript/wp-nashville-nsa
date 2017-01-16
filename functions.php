<?php

/* Load in scripts and stylesheets */
function nashvilleNSA_scripts() {
  // Normalize.css
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');

  // Font Awesome
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

  // Main style.css
  wp_enqueue_style('style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'nashvilleNSA_scripts');

?>
