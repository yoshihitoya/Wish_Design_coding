    <aside class="l-sidebar">
        <nav class="l-sidebar__nav">
            <button class="p-menu-btn--close js-btn-close">
                <div class="p-menu-btn--close__inner u-grid">
                    <p>Close</p><span>閉じるボタン</span>
                </div>
            </button>

            <ul class="c-gmenu u-wrap--align">
                <?php
            wp_nav_menu(array(
            'menu_class' => 'c-gmenu',
            'container_class' => 'c-gmenu',
            'theme_location' => 'global_nav',

          ));
        ?>

            </ul>
        </nav>
    </aside>