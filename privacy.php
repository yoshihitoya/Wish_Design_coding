<?php
/*
Template Name: privacy
*/
?>


<?php get_header(); ?>

<main class="l-main p-privacy">
    <div class="p-privacy__heading">
        <h1>プライバシーポリシー</h1>
    </div>
    <div class="p-privacy__body">
        <p class="p-privacy__txt">
            当方は、当方が取得した個人情報の取扱いに関し、個人情報の保護に関する法律、個人情報保護に関するガイドライン等の指針、その他個人情報保護に関する関係法令を遵守します。
        </p>

        <h2 class="p-privacy__subTtl">
            ２.個人情報の安全管理
        </h2>
        <p class="p-privacy__txt">
            当方は、個人情報の保護に関して、組織的、物理的、人的、技術的に適切な対策を実施し、当社の取り扱う個人情報の漏えい、滅失又はき損の防止その他の個人情報の安全管理のために必要かつ適切な措置を講ずるものとします。
        </p>

        <h2 class="p-privacy__subTtl">
            ３.個人情報の取得等の<span>遵守事項</span>
        </h2>
        <p class="p-privacy__txt">
            当方による個人情報の取得、利用、提供については、以下の事項を遵守します。
        </p>

        <ul class="p-privacy__list">
            <li>
                <h3 class="p-privacy__listTtl">
                    (1)個人情報の取得
                </h3>
                <p class="p-privacy__txt">
                    当方は、当社が管理するインターネットによる情報提供サイト（以下「本サイト」といいます。）の運営に必要な範囲で、本サイトの一般利用者（以下「ユーザー」といいます。）又は本サイトに広告掲載を行う者（以下「掲載主」といいます。）から、ユーザー又は掲載主に係る個人情報を取得することがあります。
                </p>
            </li>
            <li>
                <h3 class="p-privacy__listTtl">
                    (2)個人情報の利用目的
                </h3>
                <p class="p-privacy__txt">
                    当方は、当社が取得した個人情報について、法令に定める場合又は本人の同意を得た場合を除き、以下に定める利用目的の達成に必要な範囲を超えて利用することはありません。
                </p>
                <ul class="p-privacy__subList">
                    <li>① 本サイトの運営、維持、管理</li>
                    <li>② 本サイトを通じたサービスの<span>提供及び紹介</span></li>
                    <li>③ 本サイトの品質向上のための<span>アンケート</span></li>
                </ul>
            </li>
            <li>
                <h3 class="p-privacy__listTtl">
                    (3)個人情報の提供等
                </h3>
                <p class="p-privacy__txt">
                    当方は、法令で定める場合を除き、本人の同意に基づき取得した個人情報を、本人の事前の同意なく第三者に提供することはありません。なお、本人の求めによる個人情報の開示、訂正、追加若しくは削除又は利用目的の通知については、法令に従いこれを行うとともに、ご意見、ご相談に関して適切に対応します。
                </p>
            </li>
        </ul>

        <h2 class="p-privacy__subTtl">
            4 .個人情報の利用目的の<span>変更</span>
        </h2>
        <p class="p-privacy__txt">
            当方は、前項で特定した利用目的は、予め本人の同意を得た場合を除くほかは、原則として変更しません。但し、変更前の利用目的と相当の関連性を有すると合理的に認められる範囲において、予め変更後の利用目的を公表の上で変更を行う場合はこの限りではありません。
        </p>

        <h2 class="p-privacy__subTtl">
            ５.個人情報の第三者提供
        </h2>
        <p class="p-privacy__txt">
            当方は、個人情報の取扱いの全部又は一部を第三者に委託する場合、その適格性を十分に審査し、その取扱いを委託された個人情報の安全管理が図られるよう、委託を受けた者に対する必要かつ適切な監督を行うこととします。
        </p>

        <h2 class="p-privacy__subTtl">
            ６.個人情報の取扱いの<span>改善・見直し</span>
        </h2>
        <p class="p-privacy__txt">
            当方は、個人情報の取扱い、管理体制及び取組みに関する点検を実施し、継続的に改善・見直しを行います。
        </p>

        <h2 class="p-privacy__subTtl">
            ７.個人情報の廃棄
        </h2>
        <p class="p-privacy__txt">
            当方は、個人情報の利用目的に照らしその必要性が失われたときは、個人情報を消去又は廃棄するものとし、当該消去及び廃棄は、外部流失等の危険を防止するために必要かつ適切な方法により、業務の遂行上必要な限りにおいて行います。
        </p>

        <h2 class="p-privacy__subTtl">
            ８.苦情や相談の担当窓口
        </h2>
        <p class="p-privacy__txt">
            当方、個人情報の取扱いに関する担当窓口及び責任者を以下の通り設けます。
        </p>

        <p class="p-privacy__txt p-privacy__bottom">
            WishDesign<br>
            小林真太朗<br>
            メールアドレス：hairmake.s.kobayashi@gmail.com
        </p>

        <?php $page = get_page_by_path('contact'); ?>
        <button class="p-privacy__btn p-base-btn u-margin--54">
            <a href="<?php echo esc_url(get_permalink($page->ID)); ?>">Contactへ</a>
        </button>

    </div>


</main>

<?php get_footer(); ?>