<?php
// Front/homepage template for site.

get_header();
?>

<section class="hero">
  <div class="hero__intro-block">
    <h1 class="header__large-title header--intro">We're the Nashville chapter of the National Stuttering Association, meeting once a month to support each other and talk about stuttering.</h1>
    <button class="btn btn--find-out-more">Find out more</button>
  </div>
</section>

<section class="section section__blog wrapper">
  <div class="grid__med-6">
    <h2 class="header__large-title header--blue">Catch up with our blog →</h2>
    <p class="font__content">Beyond our regular monthly meetings, our members make posts about their experiences with stuttering. Whether they themselves stutter, or they are or have been a SLP (speech-language pathologist), each person has had personal/professional experience with stuttering and offer unique insights of it. Feel free to read a few posts, comment on some, or submit your own!</p>
  </div>
</section>

<section class="section section__location wrapper">
  <div class="section__screen-width grid__med-6">
    <?php while ( have_posts() ): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
  <div class="section__location--content grid__med-6 grid--space">
    <h2 class="header__large-title header--blue">Where we meet</h2>
    <p class="font__content--location">On the third Tuesday of each month, our chapter of the National Stuttering Association meets at Glen Leven Presbyterian Church off of Franklin Road in Nashville, TN. Meetings typically start at 6pm and end at around 8pm.</p>
  </div>
</section>

<section class="section section__footer">
  <div class="links__more-info wrapper">
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
</section>

<?php get_footer(); ?>
