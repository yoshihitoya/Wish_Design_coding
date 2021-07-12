<?php
/*
Template Name: thanks
*/
?>

<?php get_header(); ?>

<!-- メインビジュアル -->
<!-- 画像：画面幅によって取り込みサイズを変える -->
<section class="l-mainvisual p-mainvisual p-form__mainvisual">
    <div class="p-page-ttl p-form__ttl">
        <h1 class="p-page-ttl__heading">Contact
            <div class="p-page-ttl__heading__shadow"></div></a>
        </h1>
        <div class="p-page-ttl__txt">お問い合わせ</a>
            <div class="p-page-ttl__txt__shadow"></div>
        </div>
    </div>
</section>

<!-- ◇----------------------------------------------------------------------------------------------◇ -->
<main class="l-main p-form__wrap">

    <p class="p-form__txt">
        お問い合わせありがとうございます
        <?php echo $reponse; ?>
    </p>


    <!-- :::::::::追従ボタン::::::::: -->
    <button class="p-back-to-top u-grid">
        <p>Top</p><span>上へ戻る</span>
    </button>

</main>

<!-- ----フッターのテンプレート化 -> footer.php---- -->
<?php get_footer(); ?>