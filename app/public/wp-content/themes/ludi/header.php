<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
    <div id="logo_header">
    <a href="<?php echo home_url( '/' ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
    </a>
        <?php wp_nav_menu( array(
                'theme_location' => 'main',
                'container' => 'ul', // afin d'éviter d'avoir une div autour
                'menu_class' => 'site__header__menu', // ma classe personnalisée
                 )
             ); ?>
        <?php get_search_form(); ?>
    </div>

    <?php
    if ( is_user_logged_in() ):
    $current_user = wp_get_current_user();
    ?>
    <p>
        <?php echo $current_user->user_firstname; ?>
        <?php echo $current_user->user_lastname; ?>
        <?php echo $current_user->user_nicename; ?>
        <?php echo $current_user->user_email; ?>

        <a href="<?php echo wp_logout_url(); ?>"> Déconnexion </a>
    </p>
    <?php else: ?>
    <p>
        <a href="<?php echo wp_login_url(); ?>"> Connexion </a>
    </p>
    <?php endif; ?>
</header>

<?php wp_body_open(); ?>
