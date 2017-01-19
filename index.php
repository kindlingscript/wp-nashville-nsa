<?php
// The "fallback" file for all pages.
// End usage = display blog.

if ( is_front_page() ) {
  get_header( 'front' );
} else {
  get_header();
}
?>

<section class="blog wrapper">
  <?php if ( have_posts() ): ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part('content-blog', get_post_format()); ?>
    <?php endwhile;  else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

  <div class="sidebar grid__med-4">
    <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
  	<div id="blog-sidebar" class="blog-sidebar widget-area" role="complementary">
  		<?php dynamic_sidebar( 'blog-sidebar' ); ?>
  	</div>
  	<?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
