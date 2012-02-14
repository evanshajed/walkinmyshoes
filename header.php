<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="<?php language_attributes(); ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="<?php language_attributes(); ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="<?php language_attributes(); ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php language_attributes(); ?>"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title> <?php the_title();?></title>
	<meta name="author" content="">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/wims.css">
	<?php wp_head();?>
	<script src="<?php bloginfo('template_url');?>js/libs/modernizr-2.0.6.min.js"></script>
</head>
<body>

<div id="container" class="container">
	<header class="twelve col">
		<hgroup class="six col alpha" role="banner">
			<h1 class="thee col alpha"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="logo"><span class="wims logo"><?php bloginfo( 'name' ); ?></span></a></h1>
			<h2 class="three col omega"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
		<span></span>
		<nav id="headerNav" class="twelve col" role="navigation">
			<h1 class="visuallyhidden">Navigation</h1>
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</nav>
	</header>