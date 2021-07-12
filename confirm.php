<?php
/*
Template Name: confirm
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
        送信内容ご確認画面
    </p>





    <!-- action: 情報の送信先, method:  -->
    <form class="p-form__form" action="/thanks" method="post">

        <div class="p-form__list">
            <label for="office_name" class="p-form__item">会社名</label>
            <input type="text" id="office_name" name="office_name" value="<?php echo $office_name; ?>" readonly>
        </div>
        <div class="p-form__list">
            <label for="user_name" class="p-form__item--must">担当者名</label>
            <input type="text" id="user_name" name="user_name" value="<?php echo $user_name; ?>" readonly>
        </div>
        <div class="p-form__list">
            <label for="email" class="p-form__item--must">メールアドレス</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" readonly>
        </div>
        <div class="p-form__list">
            <div class="p-form__flex">
                <label for="budget" class="p-form__item">ご予算感</label>
                <p class="p-form__desc">※ご予算感をご提示いただけると<span>ご提案がスムーズになります。</span></p>
            </div>
            <input type="number" id="budget" name="budget" value="<?php echo $budget; ?>" readonly>
        </div>
        <div class="p-form__list">
            <label for="contact" class="p-form__item--must">ご相談内容</label>
            <textarea name="contact" id="contact" readonly><?php echo $contact; ?></textarea>
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