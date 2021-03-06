<?php
/*
 * This file contains the content for our posts.
 */
?>

<article id="post-<?php the_ID(); ?>" class="blog-entry">
	<div class="entry-time">
		<?php echo get_the_date('F j, Y'); ?>
	</div>
	<header class="entry-header">
		<h1 class="entry-title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h1>
	</header>
	<div class="entry-author">
		by <span class="entry-author--italic"><?php the_author(); ?></span>
	</div>
	<div class="featured-image">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		} ?> 
	</div>
	<div class="entry-summary">
		<?php the_content(); ?>
	</div>
	<footer class="entry-footer">
		<div class="divider"></div>
		<div class="entry-meta entry-meta__single">
			<span class="entry-terms--small entry-terms comments author">
				<div>
					Posted in <span class="entry-terms--bolded"><?php the_category(', '); ?></span>
				</div>
			</span>
		</div>
	</footer>
</article>
