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
	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<div class="entry-summary--read-more">
			<a href="<?php the_permalink(); ?>" class="btn">Read more</a>
		</div>
	</div>
	<footer class="entry-footer">
		<div class="divider"></div>
		<div class="entry-meta">
			<span class="entry-terms--small entry-terms comments author">
				<div>
					Posted in <span class="entry-terms--bolded"><?php the_category(', '); ?></span>
				</div>
				<div class="comments">
					<span class="entry-terms--bolded"><?php comments_number('No comments', '1 comment', '% comments'); ?></span>
				</div>
			</span>
			<div class="divider-bottom"></div>
		</div>
	</footer>
</article>
