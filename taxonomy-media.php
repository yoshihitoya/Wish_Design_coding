<?php
/*
Template Name: Media
*/
?>

<?php get_header(); ?>

<!-- メインビジュアル -->
<!-- 画像：画面幅によって取り込みサイズを変える -->
<section class="l-mainvisual p-mainvisual p-media__mainvisual">
    <div class="p-page-ttl p-media__ttl">
        <h1 class="p-page-ttl__heading">Media
            <div class="p-page-ttl__heading__shadow"></div></a>
        </h1>
        <div class="p-page-ttl__txt">制作に関するブログ</a>
            <div class="p-page-ttl__txt__shadow"></div>
        </div>
    </div>
</section>
<!-- ◇----------------------------------------------------------------------------------------------◇ -->
<main class="p-media__wrap">

    <section class="p-media__grid">
        <?php while (have_posts()):the_post(); ?>
        <div class="c-card">
            <a href="<?php the_permalink(); ?>">
                <img class="c-card__bg" src="<?php echo get_template_directory_uri(); ?>/images/media_card_bg.png"
                    alt="">
                <div class="c-card__eyecatch">
                    <?php the_post_thumbnail('thumbnail', array('class'=>'c-card__eyecatch-img')); ?>

                </div>
                <div class="c-card__info">
                    <h2 class="c-card__ttl">
                        <?php the_title(); ?>
                    </h2>
                    <div class="c-card__desc">
                        <?php echo get_extended($post->post_content)['extended']; ?>
                    </div>
                </div>
            </a>
        </div>
        <?php endwhile; ?>

    </section>

    <!-- :::::::::追従ボタン::::::::: -->
    <button class="p-back-to-top u-grid">
        <p>Top</p><span>上へ戻る</span>
    </button>

</main>

<!-- ----フッターのテンプレート化 -> footer.php---- -->
<?php get_footer(); ?>