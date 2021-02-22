<nav class="main-navigation">
    <div class="main-wrapper">

        <a class="logo" href="/">
            <img width="200" src="<?php echo get_template_directory_uri(); ?>/img/the-fit-game-logo.svg"
                 alt="the-fit-game-logo"/>
        </a>

        <div class="menu">
            <ul>
                <li>
                    <a class="text-link" href="#0">Informatie</a>
                </li>
                <li>
                    <a class="text-link" href="#0">Meedoen</a>
                </li>
                <li>
                    <a class="text-link" href="#0">Over ons</a>
                </li>
                <li>
                    <a class="button" href="#0">Doe de test</a>
                </li>
            </ul>
        </div>

        <button class="button outline" id="menu-toggle">
            Menu
            <img src="<?php echo get_template_directory_uri(); ?>/img/menu.svg" alt="menu" width="20" height="20"/>
        </button>

        <?php get_template_part('template-parts/partials/caret'); ?>

    </div>
</nav>
