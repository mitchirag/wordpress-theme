<footer>
        <div class="container">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'container' => false,
                'menu_class' => 'footer-menu',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 1
            ));
            ?>
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
