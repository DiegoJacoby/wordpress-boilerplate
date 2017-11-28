<?php
	// Adicionar suporte para menu
	add_theme_support( 'menus' );
	if ( function_exists( 'register_nav_menus' ) ) {
	  	register_nav_menus(
	  		array(
	  		  'menu_slug' => 'Menu Name',
	  		)
	  	);
	}

	// Adicionar suporte para miniaturas
	add_theme_support( 'post-thumbnails' );

	// Criar sidebar
	if (function_exists('register_sidebar'))
	{
	    register_sidebar(array(
	        'name'          => 'Sidebar',
	        'before_widget' => '<div class="widget">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h3>',
	        'after_title'   => '</h3>',
	    ));
	}
?>