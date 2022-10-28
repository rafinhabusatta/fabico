<?php
if (!isset($menu))
    {
        $menu = 'homePageMenu';
    }
?>

<nav class="side-menu">
    <!-- [[<?= $menu;?> -->
    <?php

    wp_nav_menu(
        array(
            'menu'              => $menu,
            'theme_location'    => $menu,
            'depth'             => 2,
            'container'         => 'ul',
            'menu_id'           => 'sideBaseMenu',
            'container_class'   => 'navbar-collapse collapse',
            'menu_class'        => 'nav navbar-nav navbar-right',
            'walker'            => new wp_bootstrap_navwalker()
        )
    );

    wp_nav_menu(array(
        'theme_location'    => $menu,
        'container'         => 'ul',
        'menu_id'           => 'sideBaseMenu',
        'container_class'   => 'navbar-collapse collapse',
        'menu_class'        => 'nav navbar-nav navbar-right'
    ));

    echo '===>'.$menu;
    ?>
</nav>