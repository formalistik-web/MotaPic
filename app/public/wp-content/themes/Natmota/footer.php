    <!-- Votre pied de page -->
    <footer>
        <?php 
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'menu_id' => 'menu-footer', 
            ));
        ?>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>