<?php
/*
Template Name: Media Detail
*/
?>


<?php get_header(); ?>

<main class="l-main p-detail">
    <?php
    if (have_posts()):
        while (have_posts()):the_post();
    ?>
    <article <?php post_class('p-detail__wrap'); ?>>
        <h1 class="p-detail__ttl"><?php the_title(); ?></h1>

        <div class="p-detail__content">
            <?php the_content(); ?>
        </div>

        <?php the_post_thumbnail('thunmbnail', array('class'=>'p-detail__img')); ?>
        <?php wp_link_pages(); ?>

    </article>

    <ul class="p-pagenation">

        <?php if (get_next_post_link()): ?>
        <li class="p-pagenation__prev"><?php next_post_link('%link', '前の記事', true, '', 'media'); ?></li>
        <?php else: ?>
        <li class="p-pagenation__none"></li>
        <?php endif; ?>

        <?php if (get_previous_post_link()): ?>
        <li class="p-pagenation__next"><?php previous_post_link('%link', '次の記事', true, '', 'media'); ?></li>
        <?php else: ?>
        <li class="p-pagenation__none"></li>
        <?php endif; ?>

    </ul>

    <?php
    endwhile;
    endif;
    ?>


    <!-- :::::::::追従ボタン::::::::: -->
    <button class="p-back-to-top u-grid">
        <p>Top</p><span>上へ戻る</span>
    </button>

</main>

<!-- ----フッターのテンプレート化 -> footer.php---- -->
<?php get_footer(); ?>