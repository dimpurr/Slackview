<!DOCTYPE html>
<html lang="zh-cn">

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<meta name="application-name" content="<?php bloginfo('name' ); ?>"/>
<link rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url')?>" />
<link rel="alternate" type="application/rdf+xml" title="RSS 1.0" href="<?php bloginfo('rss_url')?>" />
<link rel="alternate" type="application/atom+xml" title="ATOM 1.0" href="<?php bloginfo('atom_url')?>" />

</head>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>