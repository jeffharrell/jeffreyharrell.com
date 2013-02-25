<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="/css/style.css" type="text/css" />
	<!--[if lte IE 8]>
	<script>(function(){if(!/*@cc_on!@*/0)return;var e = "abbr,article,aside,audio,bb,canvas,datagrid,datalist,details,dialog,eventsource,figure,footer,header,hgroup,main,mark,menu,meter,nav,output,progress,section,time,video".split(',');for(var i=0;i<e.length;i++){document.createElement(e[i])}})();</script>
	<![endif]-->
</head>
<body <?php body_class(); ?>>
<div id="page">
	<header id="masthead" role="banner">
		<hgroup>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2><?php echo esc_attr( get_bloginfo( 'description', 'display' ) ); ?></h2>
		</hgroup>
		<nav>
			<ul role="navigation">
				<li><a href="/#about" title="About Jeff Harrell">About</a></li>
				<li><a href="&#109;&#097;&#105;&#108;&#116;&#111;:&#104;&#101;&#108;&#108;&#111;&#064;&#106;&#101;&#102;&#102;&#114;&#101;&#121;&#104;&#097;&#114;&#114;&#101;&#108;&#108;&#046;&#099;&#111;&#109;" title="Contact Jeff Harrell" rel="author">hello@jeffreyharrell.com</a></li>
			</ul>
		</nav>
	</header>

	<div id="main" role="main">