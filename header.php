<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <? wp_head(); ?>
</head>
<body>
  <header>
    <nav class="primary-nav">
      <div class="wrapper">
        <div class="left-header">
          <a href=<?php echo esc_url( home_url() ); ?> class="header__site-title">
            <?php echo get_bloginfo( 'name' ); ?>
          </a>
        </div>
        <div class="right-header">
          <button class="btn">Want to contribute?</button>
        </div>
      </div>
    </nav>
  </header>
