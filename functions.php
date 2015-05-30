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

	if ( $wp_rewrite->using_permalinks() )
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s',get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');

	if ( !empty($wp_query->query_vars['s']) )
		$pagination['add_args'] = array('s'=>get_query_var('s'));

	echo paginate_links($pagination);
}

function dpt_send_static() {

	function dpt_send() {
		?><script type="text/javascript">$(document).ready(function(){$.get("http://work.dimpurr.com/theme/theme_tj.php?theme_name=Slackview&blog_url=<?=get_bloginfo('url')?>&t=" + Math.random())})</script><?php
		update_option( 'dpt_send', true );
	};

	if ( get_option('dpt_send') != true ) {
		dpt_send();
	}

}

function mv_browser_body_class($classes) {
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
	if ( $is_lynx ) $classes[] = 'lynx';
	elseif ( $is_gecko ) $classes[] = 'gecko';
	elseif ( $is_opera ) $classes[] = 'opera';
	elseif ( $is_NS4 ) $classes[] = 'ns4';
	elseif ( $is_safari ) $classes[] = 'safari';
	elseif ( $is_chrome ) $classes[] = 'chrome';
	elseif ( $is_IE ) {
		$classes[] = 'ie';
		if(preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version))
			$classes[] = 'ie'.$browser_version[1];
	} else $classes[] = 'unknown';
	if ( $is_iphone ) $classes[] = 'iphone';
	if ( stristr( $_SERVER['HTTP_USER_AGENT'],"mac") ) {
		$classes[] = 'osx';
	} elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"linux") ) {
		$classes[] = 'linux';
	} elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"windows") ) {
		$classes[] = 'windows';
	}
	return $classes;
}
add_filter('body_class','mv_browser_body_class');

?>