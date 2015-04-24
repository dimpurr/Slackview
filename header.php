<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

</head>

<body <?php body_class(); ?>>

<header class="header">
	
<nav class="header_nav">
	<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
</nav>

<hgroup class="header_hgroup">
	<h1 class="header_title">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php bloginfo( 'name' ); ?>
		</a>
	</h1>
	<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
</hgroup>

</header>