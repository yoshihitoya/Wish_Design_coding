<?php
/*
Template Name: thanks
*/
?>

<?php get_header(); ?>

<!-- メインビジュアル -->
<!-- 画像：画面幅によって取り込みサイズを変える -->

<?php
if (have_posts()):
    while (have_posts()):the_post();
?>

<section class="l-mainvisual p-mainvisual p-thanks__mainvisual">
    <div class="p-thanks__ttl">
        <h1 class="p-thanks__ttl--heading">
            <?php the_title(); ?>
        </h1>
        <div class="p-thanks__ttl--txt">
            <?php remove_filter('the_content', 'wpautop'); ?>
            <?php the_content(); ?>

        </div>
    </div>

    <?php
endwhile;
endif;
?>

    <button class="p-thanks__submit p-base-btn u-grid u-margin--54">
        <?php $page = get_page_by_path('top'); ?>
        <a href="<?php echo esc_url(get_permalink($page->ID)); ?>">Top</a>
    </button>


</section>

<!-- :::::::::追従ボタン::::::::: -->
<button class="p-back-to-top u-grid">
    <p>Top</p><span>上へ戻る</span>
</button>

</main>

<!-- ----フッターのテンプレート化 -> footer.php---- -->
<?php get_footer(); ?>