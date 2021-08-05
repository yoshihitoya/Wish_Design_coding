<?php get_header(); ?>

<main class="l-main">
    <article class="p-door404">
        <div class="p-door404__door">
            <p class="p-door404__door__num">404</p>
            <div class="p-door404__door__knob"></div>
        </div>
        <p class="p-door404__txt">お探しのページはありません。</p>

        <button class="p-page-top">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <p>Top</p><span>トップページへ移動</span>
            </a>
        </button>
    </article>
</main>

<?php get_footer(); ?>