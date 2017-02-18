<?php
// Front/homepage template for site.

if ( is_front_page() ) {
  get_header( 'front' );
} else {
  get_header();
}
?>

<?php while ( have_posts() ) : the_post(); 
  $welcome_message = get_field('welcome_message');
  $blog_link_description = get_field('blog_link_description');
  $picture = get_field('picture');
  $img_size = "medium";
  $img_size_2 = "large";
  $meeting_place_description = get_field('meeting_place_description');
?>

  <section class="hero">
    <div class="hero__intro-block">
      <h1 class="header__large-title header--intro"><?php echo $welcome_message; ?></h1>
      <button class="btn btn--find-out-more">Find out more</button>
    </div>
  </section>

  <section class="section section__blog wrapper">
    <div class="grid__med-6">
      <h2 class="header__large-title header--blue"><a href="<?php echo esc_url( home_url() ); ?>/blog">Catch up with our blog →</a></h2>
      <p class="font__content--blog"><?php echo $blog_link_description; ?></p>
    </div>
    <div class="small-screens">
      <?php if ($picture) {
        echo wp_get_attachment_image( $picture, $img_size );
        echo '<p class="section__blog--caption">' . get_the_excerpt(get_field('picture')) . '</p>';
      } ?>
    </div>
    <div class="grid__med-6 grid--space medium-up-screens">
      <?php if ($picture) {
        echo wp_get_attachment_image( $picture, $img_size_2 );
        echo '<p class="section__blog--caption">' . get_the_excerpt(get_field('picture')) . '</p>';
      } ?>
    </div>
  </section>

  <section class="section section__location wrapper">
    <div class="section__screen-width grid__med-6">
      <!-- Google map is here -->
      <?php the_content(); ?>
    </div>
    <div class="section__location--content grid__med-6 grid--space">
      <h2 class="header__large-title header--blue">Where we meet</h2>
      <p class="font__content--location"><?php echo $meeting_place_description; ?></p>
    </div>
  </section>

  <section class="section section__footer">
    <div class="wrapper">
      <div class="links__more-info grid__med-4">
        <h2 class="font__white-bg">For more information:</h2>
        <ul>
          <li>
            <a href="http://westutter.org" target="_blank">National Stuttering Association</a>
          </li>
          <li>
            <a href="http://stutteringhelp.org" target="_blank">The Stuttering Foundation</a>
          </li>
          <li>
            <a href="https://vanderbilthealth.com/billwilkerson/30037" target="_blank">Vanderbilt Bill Wilkerson Center</a>
          </li>
        </ul>
      </div>
      <div class="motto grid__med-4 grid--space">
        <h3>"If you stutter, you're not alone."</h3>
        <p>National Stuttering Association motto</p>
      </div>
      <div class="social grid__med-4 grid--space">
        <h2 class="font__white-bg font--social">Find us elsewhere:</h2>
        <a href="https://www.facebook.com/groups/185080364866448" target="_blank" class="no-underline">
          <i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i>
        </a>
      </div>
      <div class="copyright">
        <a href="http://kindlingscript.com">© 2017 kindlingscript</a>
      </div>
    </div>
  </section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
