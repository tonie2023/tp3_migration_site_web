<?php
// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');
//Ajouter automatiquement le titre du site dans l'en-tete du site
add_theme_support('title-tag');
?>
 <?php
register_nav_menus( array(
	'main' => 'Menu Principal',
	'sidebar' => 'Barre laterale',
	'footer' => 'Bas de page',
));
?>
 <?php
register_sidebar( array(
		'before_widget' => '',
		'after_widget' => '',
		'id' => 'barre',
		'name' => 'Barre latérale principale',
));
?>
<?php
  function ajouter_mon_widget() {
	register_widget( 'Mon_Widget' );
  }

?>