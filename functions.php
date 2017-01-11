<?php

/* Load in scripts and stylesheets */
function nashvilleNSA_scripts() {
  // Normalize.css
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');

  // Main style.css
  wp_enqueue_style('style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'nashvilleNSA_scripts');

?>
