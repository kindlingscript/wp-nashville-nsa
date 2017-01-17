<?php
// The "fallback" file for all pages.
// End usage = display blog.

get_header();
?>

<section class="blog wrapper">
  <?php if ( have_posts() ): ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part('content-blog', get_post_format()); ?>
    <?php endwhile;  else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</section>

<?php get_footer(); ?>
