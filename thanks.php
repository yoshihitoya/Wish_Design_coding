<?php
/*
Template Name: thanks
*/
?>

<?php get_header(); ?>

<!-- メインビジュアル -->
<!-- 画像：画面幅によって取り込みサイズを変える -->



<section class="l-mainvisual p-mainvisual p-thanks__mainvisual">
    <div class="p-thanks__ttl">
        <h1 class="p-thanks__ttl--heading">
            お問い合わせ完了しました。
        </h1>
        <p class="p-thanks__ttl--txt">
            ご入力頂きありがとうございます。<br>
            3営業日以内に返信させて頂きます。
        </p>
    </div>

    <button class="p-thanks__submit p-base-btn u-margin--02">
        <a href="<?php echo esc_url(home_url('/')); ?>">Top</a>
    </button>


</section>

<!-- :::::::::追従ボタン::::::::: -->
<button class="p-back-to-top u-grid">
    <p>Top</p><span>上へ戻る</span>
</button>

</main>

<!-- ----フッターのテンプレート化 -> footer.php---- -->
<?php get_footer(); ?>