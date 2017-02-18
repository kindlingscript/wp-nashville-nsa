<?php
/**
 * The template for displaying single posts.
 */

get_header(); ?>

<div class="wrapper">
	<div class="single-post">
		<?php
			while ( have_posts() ) : the_post();

				get_template_part('content-blog', get_post_format());

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile;
		?>
	</div>
</div>

<?php get_footer();