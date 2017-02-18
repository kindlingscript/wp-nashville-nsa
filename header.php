<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <? wp_head(); ?>
</head>
<body>
  <header class="header">
    <nav class="default-nav">
      <div class="wrapper">
        <div class="left-header">
          <a href=<?php echo esc_url( home_url() ); ?> class="header__site-title--default">
            <?php echo get_bloginfo( 'name' ); ?>
          </a>
        </div>
        <div class="right-header">
          <a href="<?php echo esc_url( home_url() ); ?>/contributing">
            <button class="btn btn--white">Want to contribute?</button>
          </a>
        </div>
      </div>
    </nav>
  </header>
