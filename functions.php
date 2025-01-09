<?php
// Enregistrement des styles et scripts
function motta_enqueue_scripts() {
    wp_enqueue_style('motta-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'motta_enqueue_scripts');
?>
