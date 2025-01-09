<?php
// Enregistrement des styles et scripts
function motta_enqueue_scripts() {
    wp_enqueue_style('motta-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'motta_enqueue_scripts');

// Ajouter le support pour le logo personnalisé
function motta_theme_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100, // Hauteur par défaut
        'width'       => 300, // Largeur par défaut
        'flex-height' => true, // Hauteur flexible
        'flex-width'  => true, // Largeur flexible
    ));

    // Enregistrer le menu principal
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'motta'), // Emplacement du menu principal
    ));
}
add_action('after_setup_theme', 'motta_theme_setup');
?>
