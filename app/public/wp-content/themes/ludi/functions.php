<?php
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Configuration du thème
require_once get_template_directory() . '/inc/config.php';

// Types de publication et taxonomies
require_once get_template_directory() . '/inc/post-types.php';

// Fonctionnalités
require_once get_template_directory() . '/inc/features.php';


