<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

<article <?php post_class(); ?>>
	<header class="post_header">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
	</header>
	<div class="post_content">
		<?php the_content(); ?>
	</div>
</article>

<?php endwhile; ?>
<?php else : ?>

	<p>404</p>

<?php endif; ?>

<?php the_posts_pagination( array(
	'prev_text'          => __( 'Previous page', 'slackview' ),
	'next_text'          => __( 'Next page', 'slackview' ), )
); ?>

<?php get_footer(); ?>