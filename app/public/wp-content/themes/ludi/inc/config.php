<?php



function ludi_register_assets()
{
    // Déclarer jQuery
    wp_enqueue_script('jquery' );

    // Déclarer le JS
    wp_enqueue_script(
        'ludi-script',
        get_template_directory_uri() . '/js/script.js',
        array('jquery'),
        '1.0',
        true
    );

    // Déclarer style.css à la racine du thème
    wp_enqueue_style(
        'ludi-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    // Déclarer un autre fichier CSS
    wp_enqueue_style(
        'ludi-maincss',
        get_template_directory_uri() . '/css/style.css',
        array(),
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'ludi_register_assets');

register_nav_menus( array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
) );

register_sidebar( array(
    'id' => 'blog-sidebar',
    'name' => 'Blog',
    'before_widget'  => '<div class="site__sidebar__widget %2$s">',
    'after_widget'  => '</div>',
    'before_title' => '<p class="site__sidebar__widget__title">',
    'after_title' => '</p>',
) );

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );


function capitaine_login_logo() {
    wp_enqueue_style(
        'custom-login',
        get_template_directory_uri() . '/css/custom-login.css',
        array( 'login' )
    );
}
add_action( 'login_enqueue_scripts', 'capitaine_login_logo' );


//pour retirer les panels dans les edit post &co
function ludi_remove_image_featured() {
    wp_enqueue_script(
        'remove-image',
        get_template_directory_uri() . '/js/panel.js',
        array('jquery'),
        '1.0',
        true
    );
}

add_action( 'enqueue_block_editor_assets', 'ludi_remove_image_featured');



