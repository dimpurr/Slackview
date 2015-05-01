<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('content'); ?>

<?php endwhile; ?>
<?php else : ?>

	<p>404</p>

<?php endif; ?>

<nav class="page_nav">
<?php dpt_pagenav(); ?>
</nav>

<?php get_footer(); ?>