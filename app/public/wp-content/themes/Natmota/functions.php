<?php

    //enqueue css
    function enqueue_my_theme_styles() {
        wp_enqueue_style('my-theme-style', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'enqueue_my_theme_styles');

// mise en place des menus header et footer
function register_my_menus() {
    register_nav_menus(
        array(
            'header' => __('Menu du header'),
            'footer' => __('Menu du footer')
        )
    );
}
add_action('after_setup_theme', 'register_my_menus');

