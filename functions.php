<?php
//--------------------------------------------
//テーマサポート
//--------------------------------------------
add_theme_support('title-tag');
add_theme_support('post-thumbnails'); //アイキャッチ画像を扱う
add_theme_support('automatic-feed-links');//フィードの利用を許可する
add_theme_support('custom-background');//カスタム背景機能をサポートする
add_theme_support('wp-block-styles');//ブロックエディターのスタイルを適用
add_theme_support('responsive-embeds');//挿入した動画などがレスポンシブ対応（画面幅に応じてサイズが拡大・縮小）になる
add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ));//コメントフォーム、検索フォーム、コメントリスト、ギャラリーでHTML5マークアップの使用を許可
add_theme_support('custom-header');//カスタムヘッダー

function init_func()
{
    /*カスタム投稿の追加*/
    //media
    register_post_type('media_post', [
        'label'=>'Media',//管理画面のメニューに表示されるテキスト
        'labels'=>[
            'all_items'=>'Media投稿一覧',//管理画面のメニューの下層に表示されるテキスト
        ],
        'public'=>true,
        'has_archive'=>true,//アーカイブページへのアクセス権限
        'menu-position'=>5,
        'show_in_rest'=>true,
        'supports' => array( 'title', 'thumbnail','editor' ),
        'taxonomy'=>'media',
    ]);
    flush_rewrite_rules(false);
    
    register_taxonomy(
        'media',//タクソノミー名
        'media_post',//関連づけるカスタム投稿タイプ
        [
        'labels'=>[
            'name'=>'Mediaカテゴリ',//管理画面のメニューに表示されるテキスト
            'edit_item'=>'Mediaカテゴリを編集',
            'rewrite'=>array('slug'=>'media'),
            'add_new_item'=>'新規Mediaカテゴリを追加',
        ],
        'public'=>true,
        'hierarchical' => true,
                'show_ui' => true,
        'show_in_rest' => true
        
    ]
    );

    //works
    register_post_type('work_post', [
        'label'=>'Works',
        'labels'=>[
            'all_items'=>'Works投稿一覧',
        ],
        'public'=>true,
        'has_archive'=>true,
        'menu-position'=>6,
        'show_in_rest'=>true,
        'supports' => array( 'title', 'thumbnail','editor' ),
        'taxonomy'=>'works',
    ]);
    flush_rewrite_rules(false);
    
    register_taxonomy('works', 'work_post', [
        'labels'=>[
            'name'=>'Worksカテゴリ',
            'edit_item'=>'Worksカテゴリを編集',
            'rewrite'=>array('slug'=>'works'),
            'add_new_item'=>'新規Worksカテゴリを追加',
        ],
        'public'=>true,
        'hierarchical' => true,
        'show_ui' => true,
        'show_in_rest' => true
    ]);
}
add_action('init', 'init_func');


//--------------------------------------------
//スタイルシートを読み込むタグを出力
//--------------------------------------------
function wishdesign_script()
{
    // wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array());
    // wp_enqueue_style( 'M PLUS 1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap', array() );
    // wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array() );

    wp_enqueue_style('ress', 'https://unpkg.com/ress/dist/ress.min.css', array(), '1.0.0');
  
    wp_enqueue_style('modal', get_template_directory_uri() . '/css/modaal.css', array(), '1.0.0');
    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css', array(), '1.0.0');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/css/slick-theme.css', array(), '1.0.0');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'wishdesign_script');


//--------------------------------------------
//jqueryを読み込む
//--------------------------------------------
wp_enqueue_script('jquery');
wp_enqueue_script('header', get_template_directory_uri() . '/js/header.js', array(), '', true);
wp_enqueue_script('totopbtn', get_template_directory_uri() . '/js/toTopBtn.js', array(), '', true);
wp_enqueue_script('sidemenu', get_template_directory_uri() . '/js/sidemenu.js', array(), '', true);
wp_enqueue_script('postcard', get_template_directory_uri() . '/js/postcard.js', array(), '', true);


function file_load_scripts_styles()
{
    if (is_front_page() || is_home() || is_page('home')) {
        wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array(), '', true);
        wp_enqueue_script('myslick', get_template_directory_uri() . '/js/mySlick.js', array(), '', true);
        wp_enqueue_script('sectionscroller', get_template_directory_uri() . '/js/sectionScroller.min.js', array(), '', true);
        wp_enqueue_script('mysectionscroll', get_template_directory_uri() . '/js/mySectionscroll.js', array(), '', true);
        wp_enqueue_script('scrollify', get_template_directory_uri() . '/js/jquery.scrollify.js', array(), '', true);
        wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), '', true);
        wp_enqueue_script('myscrollify', get_template_directory_uri() . '/js/myScrollify.js', array(), '', true);
        wp_enqueue_script('boxfade', get_template_directory_uri() . '/js/boxFade.js', array(), '', true);
    } elseif (is_page('price')) {
        wp_enqueue_script('modal', get_template_directory_uri() . '/js/modal.js', array(), '', true);
        wp_enqueue_script('modaal', get_template_directory_uri() . '/js/modaal.js', array(), '', true);
    } elseif (is_page('about') || is_page('flow')) {
        wp_enqueue_script('timelineanime', get_template_directory_uri() . '/js/scrollTimelineAnime.js', array(), '', true);
    }
}
add_action('wp_footer', 'file_load_scripts_styles');// wp_footerに処理を登録



//--------------------------------------------
// uri指定のショートコード
//--------------------------------------------
function shortcode_tp()
{
    return get_template_directory_uri();
}
add_shortcode('uri', 'shortcode_tp');


//--------------------------------------------
// メニューバー作成
//--------------------------------------------
register_nav_menus(array(
  'global_nav' => esc_html__('グローバルナビゲーション', 'wish_design_m'),
));


//--------------------------------------------
//カスタムロゴ：推奨されているので念のため
//--------------------------------------------
function mytheme_setup()
{
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'mytheme_setup');


//--------------------------------------------
//Gutenberg用CSSを削除する
//--------------------------------------------
function remove_block_library_style()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'remove_block_library_style');



//--------------------------------------------
//editor-style.cssを認識させる:
// エディターでフロントの見た目にするため
//--------------------------------------------
function wishdesign_theme_add_editor_styles()
{
    add_theme_support('editor-styles');	// ブロックエディタ用スタイル機能をテーマに追加
    add_editor_style("editor-style.css");	// ブロックエディタ用CSSの読み込み
}
add_action('admin_init', 'wishdesign_theme_add_editor_styles');


/* エディタースタイルのキャッシュクリア */
function extend_tiny_mce_before_init($mce_init)
{
    $mce_init['cache_suffix']='v='.time();
    return $mce_init;
}
add_filter('tiny_mce_before_init', 'extend_tiny_mce_before_init');


//--------------------------------------------
// コンテンツエリアのサイズ指定:これないとWPでエラーが出る
//--------------------------------------------
if (!isset($content_width)) {
    $content_width=960;
}



//--------------------------------------------
// 翻訳:これないとWPでエラーが出る
//--------------------------------------------
function wishdesign_theme_setup()
{
    load_theme_textdomain('wish_design_m', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'wishdesign_theme_setup');










//--------------------------------------------
//タイトル出力（トップページか、シングルページかを判定後）
//--------------------------------------------
function wishdesign_title($title)
{
    if (is_front_page() && is_home()) { //フロントページがトップページなら
        $title = get_bloginfo('name', 'display');
    } elseif (is_singular()) { //個別ページなら
        $title = single_post_title('', false);
    }
    return $title;
}
//ページ出力
add_filter('pre_get_document_title', 'wishdesign_title');









//--------------------------------------------
// <h>タグをすべて取得：カードの見出しに使用
//--------------------------------------------
// function get_myIndex() {
//   global $post;
//   preg_match_all('/<h[1-6]>.+<\/h[1-6]>/u', $post->post_content, $matches);  //マッチングで<h>タグを取得する
//   $matches_count = count($matches[0]);//取得した<h>タグの個数をカウント

//   if(empty($matches)){  //<h>タグがなければ
//       echo '<span>詳しい説明はこちらから</span>';
//     }

//   else{ //あれば出力
//     for ($i = 0; $i < $matches_count; $i++){
//         echo $matches[0][$i];
//     }
//   }
// }




//--------------------------------------------
// 抜粋：excerptだと見出し判別ができないため自作
//--------------------------------------------
// function get_myExcerpt($content, $length) {
//   $length = 100;
//   $content = get_the_content();
//   $content = preg_replace('/<h2>.+<\/h2>/u', "", $content);// 抜粋時にhタグを除去
//   $content = mb_substr($content, 0, $length, "UTF-8") . '...';
//   $content =  strip_shortcodes($content);//ショートコード削除
//   $content =  strip_tags($content);//タグの除去
//   return $content;
// }



 //::::お問い合わせフォームの実装::::
 
/**関数の定義
 *
* send_mailという自作関数を定義
*/
function send_mail()
{

/**関数の使用条件設定
*
* 'thanks'というスラッグへ移動する時にのみ発動
*/
    if (! is_page('thanks')) {
        return;
    }

    /**$_SESSION['']を利用
     *
     * $_SESSION['']について
     * 値の引き継ぎが可能な変数
     * 処理の最後にdestroyする（値の破棄）
     */
    session_start();
    

    /**$_SESSIONに値を代入
     *
     * htmlspecialchars($_POST[''],ENT_QUOTES)について
     * htmlspecialchars: 値を安全な文字列に変換するもの
     * $_POST['']: 文字列。値をurlに表示させずに受け取るためのもの
     * ENT_QUOTES: 変換パターン。クオテーションをシングル、ダブルどちらも変換させるもの
     *
     */
    $_SESSION['office_name'] = htmlspecialchars($_POST['office_name'], ENT_QUOTES);
    $_SESSION['user_name'] = htmlspecialchars($_POST['user_name'], ENT_QUOTES);
    $_SESSION['email'] = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $_SESSION['budget'] = htmlspecialchars($_POST['budget'], ENT_QUOTES);
    $_SESSION['contact'] = htmlspecialchars($_POST['contact'], ENT_QUOTES);
    $_SESSION['error_user_name'] ="";
    $_SESSION['erooe_email']  ="";
    $_SESSION['error_contact'] ="";

    /**不正なページアクセス制限
     *
     * 正規ルートを逸脱したリンクアクセスを制限するためのもの
     *
     */
    $myform_nonce = $_POST['myform_nonce'];
    if (! wp_verify_nonce($myform_nonce, 'my-form')) {
        wp_die('不正な遷移です');
    }

    /**エラーメッセージの表示
     *
     * 必須項目の値が""またはNULLの場合エラーメッセージを代入させる
     */
    if (empty($_SESSION['user_name'])) {
        $_SESSION['error_user_name'] = '＊未入力です。';
    }
    
    if (empty($_SESSION['email'])) {
        $_SESSION['error_email'] = '＊未入力です。';
    }
    
    if (empty($_SESSION['contact'])) {
        $_SESSION['error_contact'] = '＊未入力です。';
    }
    
    /**入力画面への再移動
     *
     * 必須項目の値が""またはNULLの場合、'contact'というスラッグへ移動
     */
    if (empty($_SESSION['user_name']) || empty($_SESSION['email']) || empty($_SESSION['contact'])) {
        header("location: contact");
        exit();
    }

    /**フォーム内容の送信
     *
     * wp_mail関数でメールを送信する
     * $to: 送信先のメールアドレス
     * $subject: 件名
     * $body: メール本文
     * $header: メール送信元の情報
     */
    /* お問い合わせ内容をメールで送信 */

    $to = "hairmake.s.kobayashi@gmail.com";//送信先のメールアドレス
    $subject = "お問合せがありました";
    $body =
   "会社名 : ".$_SESSION['office_name']."\n"
   ."お名前 :" .$_SESSION['user_name']."\n"
   . "メールアドレス :" .$_SESSION['email']."\n"
   . "ご予算感 : ".$_SESSION['budget']."\n"
   . "お問合せ内容 : ".$_SESSION['contact']."\n";
    $fromname = "Wish-Design";
    $from = "info@wish-design-sk.com";
    $headers = "From: {$fromname} <{$from}>\r\n";
    $response = wp_mail($to, $subject, $body, $headers) ;


    /**$_SESSIONの破棄
     *
     * 使用した$_SESSIONの値を引き継がないための処理
     */
    session_destroy();
}

/**ページ移動直前の処理として関数を実行
*
* template_redirect: ページ移動前に処理を実行させる関数
* 「contactページで送信ボタンを押す」
*          ↓   ←この間にsend_mail関数を実行
* 「thanksページへ移動」
*/
add_action('template_redirect', 'send_mail');