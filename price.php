<?php
/*
Template Name: Price
*/
?>

<?php get_header(); ?>

      <!-- メインビジュアル -->
      <article class="l-mainvisual p-mainvisual">
        <section class="c-section-content">
          <div class="p-page-ttl">
            <h1 class="p-page-ttl__heading">Price
              <div class="p-page-ttl__heading__shadow"></div>
            </h1>
            <div class="p-page-ttl__txt">料金について
              <div class="p-page-ttl__txt__shadow"></div>
            </div>
          </div>

          <div class="p-mainvisual-txt">
            <p>
              WishDesignでは明朗会計を目指しております。<br>
              「なんかわからないけど見積もりが高い」<br>
              ということがないように料金表を作らせていただきました。
            </p>
            <div class="p-page-ttl__txt__shadow"></div>
          </div>
        </section>
      </article>
      <!-- ◇----------------------------------------------------------------------------------------------◇ -->
      <main class="l-main">

        <article class="p-price u-padding--50">
          <section class="p-price--hearing">
            <h2 class="p-content-ttl">コーポレートサイト</h2>
            <p class="c-txt--content u-margin--50">
              ご予算５０万円〜<br>
              納期目安 １ヶ月〜１ヶ月半
            </p>
          </section>

          <section class="p-price--oundmedia u-margin--51">
            <h2 class="p-content-ttl">オウンドメディア</h2>
            <p class="c-txt--content u-margin--50">
              ご予算７０万円〜<br>
              納期目安 １ヶ月半〜２ヶ月半
            </p>
          </section>

          <section class="p-price--salon u-margin--51">
            <h2 class="p-content-ttl">美容サロンサイト</h2>
            <p class="c-txt--content u-margin--50">
              ご予算４０万円〜<br>
              納期目安 １ヶ月
            </p>
          </section>

          <section class="p-price--breakdown u-margin--52">
            <h2 class="p-content-ttl">項目内訳</h2>
            <p class="c-txt--content pc-none u-margin--50">
              タップすると詳細が見えます
            </p>
            <!-- <a href="images/wishdesign_price_sp.png" class="js-modal c-img-item"> -->
            <figure class="c-img-item u-margin--53">
              <a href="<?php echo do_shortcode('[uri]'); ?>/images/wishdesign_price_pc.png" class="js-modal">
                <img class="" src="<?php echo do_shortcode('[uri]'); ?>/images/wishdesign_price_sp.png"
                  srcset="<?php echo do_shortcode('[uri]'); ?>/images/wishdesign_price_sp.png 670w,<?php echo do_shortcode('[uri]'); ?>/images/wishdesign_price_pc.png 1728w"
                  sizes="(max-width:480px) 375px, 100vw" alt="">
              </a>
            </figure>

            <!-- <iframe class="p-price-tbl" src="images/wishdesign_price.pdf" width="100%" height="100%"></iframe> -->
          </section>

          <button class="p-base-btn u-margin--54">
            <?php
              $page = get_page_by_path('contact');
            ?>
            <a class="u-grid" href="<?php echo esc_url(get_permalink($page -> ID)); ?>">
              <p>相談する</p><span>リンクページへ移動</span></a>
          </button>
        </article>

        <button class="p-back-to-top u-grid">
          <p>Top</p><span>上へ戻る</span>
        </button>
      </main>

      <?php get_footer(); ?>
