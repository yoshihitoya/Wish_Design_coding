<!-- ----ヘッダーのテンプレート化 -> header.php---- -->
<?php get_header(); ?>

<!-- メインビジュアル -->
<article class="l-mainvisual p-mainvisual js-scroll--area" data-section-name="mainvisual">
    <section class="c-section-content">
        <div class="p-page-ttl">
            <h1 class="p-page-ttl__heading">Wish Design
                <div class="p-page-ttl__heading__shadow"></div>
            </h1>
            <div class="p-page-ttl__txt">「オモイ」を「カタチ」に
                <div class="p-page-ttl__txt__shadow"></div>
            </div>
        </div>
        <button class="c-scroll-btn" id="section-scroller-button"><span>下へスクロール</span></button>
        <!-- <a href="#section-scroll" class="c-scroll-btn" id="section-scroller-button"><span>下へスクロール</span></a> -->
    </section>
</article>
<!-- ◇----------------------------------------------------------------------------------------------◇ -->
<main class="l-main">

    <!-- :::::::::about::::::::: -->
    <article class="p-home-about">

        <section class="js-scroll--area p-scroll--area u-padding--10" id="section-scroll" data-section-name="about">
            <div class="c-section-content">
                <h2 class="p-content-ttl">About</h2>
                <p class="c-txt--content u-margin--01">
                    私は美容師として、10,000人以上の方の<br>
                    「綺麗になりたい」という希望を叶えてきました。<br>
                    お客様のコンプレックスや悩みに耳を傾け、<br>
                    それを魅力に変える提案をし、そこに喜びを感じており、<br>
                    その経験はデザイナーとして活動する上でのベースとなっています。
                </p>
                <button class="p-base-btn u-grid u-margin--02">
                    <p>大切にしていること</p><span>リンクページへ移動</span>
                </button>
            </div>
        </section>

        <article class="u-display-center js-scroll--area p-scroll--area u-padding--11" data-section-name="about-list">
            <div class="c-section-content">
                <ul class="p-home-about__list">
                    <li class="p-home-about--box fadein js-fadein"><span js-fitty>あなたの話を<br>聞かせてください</span></li>
                    <li class="p-home-about--box fadein js-fadein"><span js-fitty>事業に対する想いを<br>聞かせてください</span></li>
                    <li class="p-home-about--box fadein js-fadein"><span js-fitty>大切にしてるものを<br>聞かせてください</span></li>
                    <li class="p-home-about--box fadein js-fadein"><span js-fitty>あなたの悩みを<br>聞かせてください</span></li>
                    <li class="p-home-about--box fadein js-fadein"><span js-fitty>事業のゴールを<br>聞かせてください</span></li>
                    <li class="p-home-about--box fadein js-fadein"><span js-fitty>あなたのこだわり<br>聞かせてください</span></li>
                </ul>
                <p class="c-txt--content--about u-padding--11-2">その言葉でデザインを作ります。</p>
            </div>
        </article>
    </article>

    <!-- :::::::::works::::::::: -->
    <article class="p-home-works js-scroll--area p-scroll--area u-padding--12" data-section-name="works">
        <div class="c-section-content">
            <h2 class="p-content-ttl">Works</h2>
            <p class="c-txt--content u-margin--03 sp-hidden">今までいろんなお客様の「オモイ」を「カタチ」に変えてきました。</p>

            <ul class="p-slick js-slick u-margin--04" id="slider">
                <li><a href="#">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/home_slick_bg_sp.png"
                                media="(max-width: 480px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home_slick_bg_pc.png">
                        </picture>
                    </a>
                </li>
                <li><a href="#">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/home_slick_bg_sp.png"
                                media="(max-width: 480px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home_slick_bg_pc.png">
                        </picture>
                    </a>
                </li>
                <li><a href="#">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/home_slick_bg_sp.png"
                                media="(max-width: 480px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home_slick_bg_pc.png">
                        </picture>
                    </a>
                </li>
                <li><a href="#">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/home_slick_bg_sp.png"
                                media="(max-width: 480px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home_slick_bg_pc.png">
                        </picture>
                    </a>
                </li>
            </ul>

            <button class="p-base-btn u-grid u-margin--05 sp-hidden">
                <p>制作実績へ</p><span>リンクページへ移動</span>
            </button>
        </div>
    </article>


    <!-- :::::::::flow::::::::: -->
    <article class="p-home-flow js-scroll--area p-scroll--area u-padding--13" data-section-name="flow">
        <div class="c-section-content">
            <h2 class="p-content-ttl">Flow</h2>
            <p class="c-txt--content-flow u-margin--06">
                はじめてサイトをお持ちになるお客様でも安心していただくために、<br>
                制作の流れを説明します。
            </p>

            <ul class="p-home-flow__list u-grid u-display-center u-margin--07">
                <li class="p-home-flow--box fadein js-fadein"><span>ヒアリング</span></li>
                <li class="p-home-flow--box fadein js-fadein"><span>お見積り</span></li>
                <li class="p-home-flow--box fadein js-fadein"><span>ご契約</span></li>
                <li class="p-home-flow--box fadein js-fadein"><span>着手</span></li>
                <li class="p-home-flow--box fadein js-fadein"><span>開発</span></li>
            </ul>

            <button class="p-base-btn u-grid u-margin--08">
                <p>お取引の流れへ</p><span>リンクページへ移動</span>
            </button>
        </div>
    </article>


    <!-- :::::::::price::::::::: -->
    <article class="p-home-price js-scroll--area p-scroll--area u-padding--14" data-section-name="price">
        <div class="c-section-content">
            <h2 class="p-content-ttl">Price</h2>
            <p class="c-txt--content u-margin--09">
                WishDesignでは、テンプレートでの制作は承っておりません。<br>
                ヒアリングをして、すべてオーダーメイドであなただけのサイトを制作します。
            </p>
            <button class="p-base-btn u-grid u-margin--10">
                <p>料金詳細へ</p><span>リンクページへ移動</span>
            </button>
        </div>
    </article>

    <!-- :::::::::contact::::::::: -->
    <article class="p-home-contact js-scroll--area p-scroll--area u-padding--15" data-section-name="contact">
        <div class="c-section-content">
            <h2 class="p-content-ttl">Contact</h2>
            <p class="c-txt--content-contact u-margin--11">
                これからサイトを作りたい方、作り直したいけど不安がある方、<br>
                まずは一度相談ください。<br>
                あなたの「オモイ」を「カタチ」にします。
            </p>
            <button class="p-base-btn u-grid u-margin--12">
                <p>お問い合わせへ</p><span>リンクページへ移動</span>
            </button>

            <small class="c-copyright u-margin--13 u-display-center">&copy; 2021 Wish Design</small>
        </div>
    </article>

    <button class="p-back-to-top u-grid">
        <p>Top</p><span>上へ戻る</span>
    </button>

</main>
</div>

<!-- ----フッターのテンプレート化 -> footer.php---- -->
<?php get_footer(); ?>