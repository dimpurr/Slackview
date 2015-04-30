<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

<article <?php post_class(); ?>>
	<header class="post_header">
		<div class="post_meta">
			<section class="post_meta_time">
				<h4><?=__('Date Time','slackview')?></h4>
				<?php the_time('m/j - H:i'); ?>
			</section>
			<section class="post_meta_author">
				<h4><?=__('Author','slackview')?></h4>
				<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php the_author(); ?></a>
			</section>
			<section class="post_meta_cat">
				<h4><?=__('Category','slackview')?></h4>
				<?php the_category(' ') ?>
			</section>
			<section class="post_meta_tags">
				<h4><?=__('Tags','slackview')?></h4>
				<?php the_tags('',', ',''); ?>
			</section>
			<section class="post_meta_edit">
				<?php edit_post_link( __( 'Edit Post', 'slackview' ) ); ?>
			</section>
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