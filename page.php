<?php get_header(); ?>

	<?php the_post(); ?>
	<?php get_template_part('content'); ?>

	<?php comments_template( '', true ); ?>

<?php get_footer(); ?>