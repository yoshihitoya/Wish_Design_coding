<?php
/*
Template Name: media
*/
?>

<?php get_header(); ?>

<article class="l-mainvisual p-mainvisual">
    <section class="c-section-content">
        <div class="p-page-ttl p-form__ttl">
            <h1 class="p-page-ttl__heading ">Media
                <div class="p-page-ttl__heading__shadow"></div>
            </h1>
            <div class="p-page-ttl__txt">制作に関するブログ
                <div class="p-page-ttl__txt__shadow"></div>
            </div>

        </div>
    </section>
</article>
<main class="p-media__wrap">

    <section class="p-media__grid">
        <?php
        if (have_posts()):
        while (have_posts()):the_post();
        ?>
        <div class="c-card__wrap">
            <a href="<?php the_permalink(); ?>">
                <div class="c-card js-postcard">
                    <div class="c-card__eyecatch">
                        <?php the_post_thumbnail('large', array('class'=>'c-card__eyecatch-img')); ?>
                    </div>
                    <div class="c-card__info">
                        <h2 class="c-card__ttl">
                            <?php the_title(); ?>
                        </h2>
                        <div class="c-card__desc">
                            <?php echo the_content(); ?>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php
        endwhile;
        endif;
        ?>

    </section>

    <button class="p-back-to-top u-grid">
        <p>Top</p><span>上へ戻る</span>
    </button>

</main>

<?php get_footer(); ?>