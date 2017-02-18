<?php
// Display contributing/about page.


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