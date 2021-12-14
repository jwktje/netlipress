<nav class="main-navigation">
    <div class="main-wrapper">

        <a class="logo" href="/">
            <img width="200" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo" loading="lazy"/>
        </a>

        <div class="menu-wrapper">
            <?php wp_nav_menu(['theme_location' => 'primary', 'menu_id' => 'primary-menu']); ?>
        </div>

        <button class="button outline" id="menu-toggle">
            Menu
            <img src="<?php echo get_template_directory_uri(); ?>/img/menu.svg" alt="menu" width="20" height="20" loading="lazy"/>
        </button>

    </div>
</nav>
