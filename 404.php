<?php get_header(); ?>

      <main class="l-main">
        <article class="p-door404">
          <div class="p-door404__door">
            <p class="p-door404__door__num">404</p>
            <div class="p-door404__door__knob"></div>
          </div>
          <p class="p-door404__txt">お探しのページはありません。</p>


          <button class="p-page-top">
            <?php
              $page_data = get_page_by_path('home');
              $page_id = $page_data->ID;
              $page_title = apply_filters( 'the_title', $page_data->post_title );
              echo '<a href="';
              echo get_permalink( $page_id );
              echo '" ><p>Top</p><span>トップページへ移動</span>';
            ?>
          </button>
        </article>
      </main>

      <?php get_footer(); ?>
