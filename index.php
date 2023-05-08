
<?php get_header(); ?>
		<h1>
			Bienvenue dans le site des poupées russes!
		</h1>
<?php 
	wp_nav_menu(
		array(
			'theme_location' => 'main',
			'theme_location' => 'sidebar',
		)
	);
	dynamic_sidebar('barre');
?>
<?php 
	get_footer(); 
?>