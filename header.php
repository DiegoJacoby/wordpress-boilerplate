<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="x-ua-compatible" content="IE=Edge"/> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/style.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class( $class ); ?>>
	<header>
		<div class="container">
			<h1><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/sao-logo.png" alt=""></a></h1>
		
			<nav>
				<?php
					$defaults = array(
						'theme_location'  => '',
						'menu'            => 'principal',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => '',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul>%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
					);
					wp_nav_menu( $defaults );
				?>			
			</nav>
		</div>
	</header>