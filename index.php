<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

<article <?php post_class(); ?>>
	<header class="post_header">
		<div class="post_meta">
			
		</div>

		<?php $post_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' )[0];
		if ( $post_img != '' ) { ?>
		<div class="post_img" style="background-image: url('<?=$post_img ?>')"></div>
		<?php }; ?>

		<?php if ( is_single() ) :
			the_title( '<h1 class="post_title">', '</h1>' );
			else :
			the_title( sprintf( '<h2 class="post_title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		endif; ?>
	</header>
	<div class="post_content">
		<?php the_content('READ MORE →'); ?>
	</div>
</article>

<?php endwhile; ?>
<?php else : ?>

	<p>404</p>

<?php endif; ?>

<nav class="page_nav">
<?php dpt_pagenav(); ?>
</nav>

<?php get_footer(); ?>