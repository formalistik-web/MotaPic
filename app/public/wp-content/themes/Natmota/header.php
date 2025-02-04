<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="photographie"/>
	<meta name="description" content="Nathalie Mota - Site d'exercice réalisé durant ma formation de développeur Web avec OpenClassrooms."/>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Votre en-tête -->
    <header id="header">
        <div class="top-menu">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/Logo.png" class="logo" alt="logo" />
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'header',
                    'menu_id' => 'menu-header', // ID attribué au menu
                ));
            ?>
        </div>
    </header>