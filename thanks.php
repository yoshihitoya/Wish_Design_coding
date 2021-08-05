<?php
/*
Template Name: thanks
*/
?>

<?php get_header(); ?>

<section class="l-mainvisual p-mainvisual p-thanks__mainvisual">
    <div class="p-thanks__ttl">
        <h1 class="p-thanks__ttl--heading">
            お問い合わせ完了しました。
        </h1>
        <p class="p-thanks__ttl--txt">
            ご入力頂きありがとうございます。<br>
            3営業日以内に返信させて頂きます。
        </p>
        <div class="p-thanks__wrap">
            <button class="p-page-top">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <p>Top</p><span>トップページへ移動</span>
                </a>
            </button>
        </div>
    </div>



</section>

<button class="p-back-to-top u-grid">
    <p>Top</p><span>上へ戻る</span>
</button>

</main>

<?php get_footer(); ?>