<?php
/*
Template Name: contact
*/
?>
<?php
    session_start();
    
    /* 入力値の初期化 */
    $office_name = "";
    $user_name ="";
    $email ="";
    $budget ="";
    $contact ="";
    $error_user_name ="";

/* 入力値の引き継ぎ */
    if (! empty($_SESSION['office_name'])) {
        $office_name = $_SESSION['office_name'];
    }

    if (! empty($_SESSION['user_name'])) {
        $user_name = $_SESSION['user_name'];
    }

    if (! empty($_SESSION['email'])) {
        $email = $_SESSION['email'];
    }

    if (! empty($_SESSION['budget'])) {
        $budget = $_SESSION['budget'];
    }
    
    if (! empty($_SESSION['contact'])) {
        $contact = $_SESSION['contact'];
    }

    if (! empty($_SESSION['error_user_name'])) {
        $error_user_name = $_SESSION['error_user_name'];
    }

    if (! empty($_SESSION['error_email'])) {
        $error_email = $_SESSION['error_email'];
    }

    if (! empty($_SESSION['error_contact'])) {
        $error_contact = $_SESSION['error_contact'];
    }

    session_destroy();
?>


<?php get_header(); ?>

<!-- メインビジュアル -->
<!-- 画像：画面幅によって取り込みサイズを変える -->

<?php
if (have_posts()):
    while (have_posts()):the_post();
?>

<section class="l-mainvisual p-mainvisual p-form__mainvisual">
    <div class="p-page-ttl p-form__ttl">
        <h1 class="p-page-ttl__heading"><?php echo($post->post_name); ?>
            <div class="p-page-ttl__heading__shadow"></div></a>
        </h1>
        <div class="p-page-ttl__txt"><?php the_title(); ?></a>
            <div class="p-page-ttl__txt__shadow"></div>
        </div>
    </div>
</section>



<!-- ◇----------------------------------------------------------------------------------------------◇ -->


<main class="l-main p-form__wrap">

    <div class="p-form__txt">
        <?php the_content(); ?>
    </div>

    <?php
endwhile;
endif;
 ?>

    <!-- action: 情報の送信先, method:  -->
    <?php $page = get_page_by_path('thanks'); ?>
    <form class="p-form__form" action="<?php echo esc_url(get_permalink($page->ID)); ?>" method="post">

        <?php wp_nonce_field('my-form', 'myform_nonce') ?>

        <div class="p-form__list">
            <label for="office_name" class="p-form__item">会社名</label>
            <input type="text" id="office_name" name="office_name" placeholder="会社名をご記入ください"
                value=<?php echo $office_name; ?>>
        </div>
        <div class="p-form__list">
            <div class="p-form__warning">
                <label for="user_name" class="p-form__item--must">担当者名</label>
                <p class="p-form__warning--txt"><?php echo $error_user_name; ?></p>
            </div>
            <input type="text" id="user_name" name="user_name" placeholder="担当者名をご記入ください"
                value=<?php echo $user_name; ?>>
        </div>
        <div class="p-form__list">
            <div class="p-form__warning">
                <label for="email" class="p-form__item--must">メールアドレス</label>
                <p class="p-form__warning--txt"><?php echo $error_email; ?></p>
            </div>
            <input type="email" id="email" name="email" placeholder="メールアドレスをご記入ください" value=<?php echo $email; ?>>
        </div>
        <div class="p-form__list">
            <div class="p-form__flex">
                <label for="budget" class="p-form__item">ご予算感</label>
                <p class="p-form__desc">※ご予算感をご提示いただけると<span>ご提案がスムーズになります。</span></p>
            </div>
            <input type="text" id="budget" name="budget" placeholder="ご予算感をご記入ください" value=<?php echo $budget; ?>>
        </div>
        <div class="p-form__list">
            <div class="p-form__warning">
                <label for="contact" class="p-form__item--must">ご相談内容</label>
                <p class="p-form__warning--txt"><?php echo $error_contact; ?></p>
            </div>
            <textarea name="contact" id="contact"
                placeholder="ご相談内容をご記入ください（お見積り、サイト制作、サイトリニューアル）"><?php echo $contact; ?></textarea>
        </div>

        <button class="p-form__submit p-base-btn u-grid u-margin--54">
            <input type="submit" class="btn" value="送信">
        </button>
    </form>



    <!-- :::::::::追従ボタン::::::::: -->
    <button class="p-back-to-top u-grid">
        <p>Top</p><span>上へ戻る</span>
    </button>

</main>


<!-- ----フッターのテンプレート化 -> footer.php---- -->
<?php get_footer(); ?>