    <aside class="l-sidebar">
        <nav class="l-sidebar__nav">
            <button class="p-menu-btn--close js-btn-close">
                <div class="p-menu-btn--close__inner u-grid">
                    <!-- インナーにしないとサイドバーが崩れるため -->
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

                <!-- <li><a href="index.php">Top</a></li>
          <li><a href="">About</a></li>
          <li><a href="#">Works</a></li>
          <li><a href="#">Flow</a></li>
          <li><a href="#">Price</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Media</a></li> -->
            </ul>
        </nav>
    </aside>