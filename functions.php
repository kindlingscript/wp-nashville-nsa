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

function nashvilleNSA_widgets_init() {
  register_sidebar( array(
    'name' => __( 'Blog Sidebar', 'nashvilleNSA' ),
    'id' => 'blog-sidebar',
    'description' => __( 'Add some widgets here to appear in the blog sidebar.', 'nashvilleNSA' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>'
  ) );
}
add_action( 'widgets_init', 'nashvilleNSA_widgets_init' );
?>
