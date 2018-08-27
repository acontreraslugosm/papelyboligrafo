<?php
    wp_nav_menu(
            array(
                'menu' => 'topbar_menu',
                'theme_location' => 'topbar_menu',
                'depth' => 2,
                'menu_class' => 'topbar-menu'
            )
    );
?>