<?php
/*
 * This file contains the content for our posts.
 */
?>

<article id="post-<?php the_ID(); ?>" class="blog-entry">
	<div class="grid__med-8">
		<div class="entry-time">
			<?php echo get_the_date('F j, Y'); ?>
		</div>
		<header class="entry-header">
			<h1 class="entry-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h1>
		</header>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>">Read more</a>
		</div>
		<footer class="entry-footer">
			<div class="entry-meta">
				<span class="entry-terms comments author">
					Written by <?php the_author(); ?> /
					Posted in <?php the_category(', '); ?> /
					<?php comments_number('No comments', '1 comment', '% comments'); ?>
				</span>
			</div>
		</footer>
	</div>
</article>
