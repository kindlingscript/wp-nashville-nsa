<?php
// Front/homepage template for site.

get_header();
?>

<section class="hero">
  <h1 class="header__large-title header--intro">We're the Nashville chapter of the National Stuttering Association, meeting once a month to support each other and talk about stuttering.</h1>
  <button class="btn btn--find-out-more">Find out more</button>
</section>

<section id="blog" class="section">
  <h2 class="header__large-title header--blue">Catch up with our blog →</h2>
  <p class="font__content">Beyond our regular monthly meetings, our members make posts about their experiences with stuttering. Whether they themselves stutter, or they are or have been a SLP (speech-language pathologist), each person has had personal/professional experience with stuttering and offer unique insights of it. Feel free to read a few posts, comment on some, or submit your own!</p>
</section>

<section class="location section">
  <div class="section__full-screen-width">
    <?php while ( have_posts() ): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
  <h2 class="header__large-title header--blue">Where we meet</h2>
  <p class="font__content">On the third Tuesday of each month, our chapter of the National Stuttering Association meets at Glen Leven Presbyterian Church off of Franklin Road in Nashville, TN. Meetings typically start at 6pm and end at around 8pm.</p>
  <p class="font__content">For more information, click on the red marker inside the map.</p>
</section>

<?php get_footer(); ?>
