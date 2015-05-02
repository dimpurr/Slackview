<?php

register_nav_menus(array(
	'main' => __( 'Main Menu','slackview' ),
));


register_sidebar(array(
	'name' => __( 'Sidebar', 'slackview' ),
	'id' => 'sidebar',
	'description' => 'Right Sidebar',
	'class' => 'widget',
	'before_widget' => '<aside class="widget">',
	'after_widget' => '</aside>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));

add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );


function dpt_pagenav() {
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

	$pagination = array(
		'base' => @add_query_arg('paged','%#%'),
		'format' => '',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
		'show_all' => false,
		'type' => 'plain',
		'end_size'=>'1',
		'prev_text' => __('← Prev Page','slackview'),
		'next_text' => __('Next Page →','slackview')
	);

	if( $wp_rewrite->using_permalinks() )
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s',get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');

	if( !empty($wp_query->query_vars['s']) )
		$pagination['add_args'] = array('s'=>get_query_var('s'));

	echo paginate_links($pagination);
}

?>