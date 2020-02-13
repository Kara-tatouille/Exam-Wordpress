<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><?= get_bloginfo('name') ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu([
            'theme_location' => 'header',
            'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'bs-example-navbar-collapse-1',
            'menu_class' => 'navbar-nav mr-auto',
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker(),
        ]); ?>
    </nav>
</header>
