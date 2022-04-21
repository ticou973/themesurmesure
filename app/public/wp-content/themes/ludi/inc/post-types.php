<?php

function ludi_register_post_types() {

	// CPT Portfolio
	$labels = array(
		'name' => 'Portfolio',
		'all_items' => 'Tous les projets',  // affiché dans le sous menu
		'singular_name' => 'Projet',
		'add_new_item' => 'Ajouter un projet',
		'edit_item' => 'Modifier le projet',
		'menu_name' => 'Portfolio'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_in_rest' => true,
		'has_archive' => true,
		'supports' => array( 'title', 'editor','thumbnail' ),
		'menu_position' => 5,
		'menu_icon' => 'dashicons-admin-customizer',
	);

	register_post_type( 'portfolio', $args );

	// Déclaration de la Taxonomie
	$labels = array(
		'name' => 'Type de projets',
		'new_item_name' => 'Nom du nouveau Projet',
		'parent_item' => 'Type de projet parent',
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_in_rest' => true,
		'hierarchical' => true,
	);

	register_taxonomy( 'type-projet', 'portfolio', $args );

}
add_action( 'init', 'ludi_register_post_types' ); // Le hook init lance la fonction
