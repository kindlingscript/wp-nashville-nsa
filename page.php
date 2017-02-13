<?php
// The "fallback" file for all pages.
// End usage = display blog.


get_header( 'contributing' );
?>

<section class="page wrapper">
  <div>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
  </div>
</section>

<?php get_footer(); ?>