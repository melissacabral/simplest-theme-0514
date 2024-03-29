<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="A description about your site" />
	<title><?php bloginfo( 'name' ) ?> - <?php bloginfo( 'description' ); ?></title>
	<link rel="stylesheet" href="path/to/css/reset.css" media="screen" />
	
	<?php wp_head();  //HOOK. necessary for plugins and admin bar to work ?>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen" />

<!--[if IE]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body class="home">
	<header role="banner">
		<h1 class="site-name"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ) ?></a></h1>
		<h2><?php bloginfo( 'description' ); ?></h2>
		<nav>
			<?php 
			wp_list_pages( array(
				'title_li' 	=> '',
				'depth' 	=> 1,
			) ); ?>
		</nav>
	
		<?php get_search_form();  //includes searchform.php if it exists ?>	
	</header>