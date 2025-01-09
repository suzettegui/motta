<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <!-- Logo dynamique -->
            <div class="logo">
    <a href="<?php echo home_url(); ?>">
        <?php
        if (function_exists('the_custom_logo') && has_custom_logo()) {
            the_custom_logo(); // Logo dynamique
        } else {
            // Logo par défaut si aucun logo n'est défini
            echo '<img src="http://localhost:10028/wp-content/uploads/2025/01/Logo.png" alt="Logo Nathalie Mota">';
        }
        ?>
    </a>
</div>

            <!-- Menu principal -->
            <nav class="main-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary', // Emplacement du menu principal défini dans functions.php
                    'container' => false,          // Pas de conteneur supplémentaire
                    'menu_class' => 'menu',        // Classe CSS pour le <ul>
                    'fallback_cb' => false,        // Pas de menu par défaut (force la gestion dans WP)
                ));
                ?>
            </nav>
        </div>
     <!-- Conteneur avec l'image et le titre -->
     <div class="hero-section" style="background-image: url('http://localhost:10028/wp-content/uploads/2025/01/nathalie-11-scaled.jpeg');">
        <h1 class="hero-title">Photographe Event</h1>
    </div>
</header>
