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

	<?php if ( is_user_logged_in() ) { echo '<style type="text/css" media="screen"> .header_nav { top: 32px; } </style>'; } ?>

</head>

<body <?php body_class(); ?>>

<header class="header">
	
<nav class="header_nav">
	<div class="nav_logo_big">
	<h1 class="nav_title_big">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php bloginfo( 'name' ); ?>
		</a>
	</h1>
	</div>
	<div class="nav_logo_left">
	<h1 class="nav_title_left">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php bloginfo( 'name' ); ?>
		</a>
	</h1>
	</div>
	<div class="nav_main">
		<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
	</div>
	<div class="nav_search">
		<form id="nav_search_form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input class="nav_search_input" type="text" name="s" id="s" placeholder="Search" size="10" />
		</form>
	</div>
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

<div class="content">