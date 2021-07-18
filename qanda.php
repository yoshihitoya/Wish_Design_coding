<?php
/*
Template Name: Q&A
*/
?>

<?php get_header(); ?>

      <!-- メインビジュアル -->
      <article class="l-mainvisual p-mainvisual">
        <section class="c-section-content">
          <div class="p-page-ttl">
            <h1 class="p-page-ttl__heading">Q & A
              <div class="p-page-ttl__heading__shadow"></div>
            </h1>
            <div class="p-page-ttl__txt">よくある質問
              <div class="p-page-ttl__txt__shadow"></div>
            </div>
          </div>
        </section>

        <article class="p-mainvisual-txt u-margin--64 pc-none">
          <dl>
            <dt><p>Ｑ 初めてサイト制作を依頼するのですがどのように依頼したらいいですか？</p></dt>
            <dd class="u-margin--60"><p>Ａ 初めてのサイト制作のご依頼いただくケースも多数ありますので、お問い合わせの際に、その旨お伝えいただきましたらこちらで流れ等ご案内させていただきます。</p></dd>
          </dl>
        </article>
      </article>
      <!-- ◇----------------------------------------------------------------------------------------------◇ -->
      <main class="l-main">
        <article class="u-padding--60">
          <dl class="p-qanda-txt">
            <dt class="sp-none"><p>Ｑ 初めてサイト制作を依頼するのですがどのように依頼したらいいですか？</p></dt>
            <dd class="u-margin--60 sp-none"><p>Ａ 初めてのサイト制作のご依頼いただくケースも多数ありますので、お問い合わせの際に、その旨お伝えいただきましたらこちらで流れ等ご案内させていただきます。</p></dd>
            <dt class="u-margin--61"><p>Ｑ もともと持っているサイトの改修は依頼できますか？</p></dt>
            <dd class="u-margin--60"><p>Ａ はい、もちろんご依頼いただけます、WordPressでしたらユーザー情報、ログインパスワード、サーバー情報などご自身でお持ちでしたら可能です。以前に制作会社様に制作依頼をされてる場合、お客様自身がサイトの必要情報をお持ちでないと作業ができませんのでご注意ください。</p></dd>
            <dt class="u-margin--61"><p>Ｑ 相談、見積もりには料金がかかりますか？</p></dt>
            <dd class="u-margin--60"><p>Ａ ご相談、お見積りに関しては無料で承っていおります。まずはお話をお聞かせください。</p></dd>
            <dt class="u-margin--61"><p>Ｑ なぜ作るものによって値段がちがうのですか？</p></dt>
            <dd class="u-margin--60"><p>Ａ ホームページは規模、ページ数、長さによって料金が変わります。住宅でもそうですが、建売のものかオーダーで１から建てるか、１LDKか３LDKかでも値段が変わりますようにホームページでも規模で値段が変わります。</p></dd>
            <dt class="u-margin--61"><p>Ｑ おまかせでサイトを作るのは可能ですか？</p></dt>
            <dd class="u-margin--60"><p>Ａ 最初のヒアリングでしっかりお話をお伺い出来ましたら、その後はある程度はおまかせも可能です。ですがお客様にご満足いただくためには二人三脚で進んでいった方がより良い物ができると感じております。</p></dd>
            <dt class="u-margin--61"><p>Ｑ ネットでホームページ制作の相場を見たのですが、そこより高いのはなんでですか？</p></dt>
            <dd class="u-margin--60"><p>Ａ WishDesignでは全てお客様にヒアリングをした上で、全てオーダーメイドで制作していくためやり取りも多く発生するのでこの料金設定にさせて頂いております。</p></dd>
            <dt class="u-margin--61"><p>Ｑ 検索されたときに一番上に持ってきたいのですができますか？</p></dt>
            <dd class="u-margin--60"><p>Ａ 現在のGoogleのアルゴリズムでは作ってすぐに検索上位に持って来るのは困難です。サイト情報だけでのSEO対策だけではなくコンテンツとして有益か、外部からのリンクはあるか、内部からのリンクはあるか、MEO対策はされているかなど様々な内容が含まれていますのでこちらもお見積りの際にご相談ください。</p></dd>
          </dl>

          <button class="p-base-btn u-margin--62">
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



