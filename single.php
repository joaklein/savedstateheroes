<?php

get_header();

/* Start the Loop */
while (have_posts()) : the_post(); ?>
	<section>
		<?php
		the_title('<h2>', '</h2>');
		the_content(); ?>
		<h5>Posted by: <?php the_author(); ?> on <?php the_date(); ?></h5>
	</section>
	<?php

	// If comments are open or there is at least one comment, load up the comment template.
	if (comments_open() || get_comments_number()) { ?>
		<section>
			<?php comments_template(); ?>
		</section>
<?php
	}

endwhile; // End of the loop.

get_footer();
