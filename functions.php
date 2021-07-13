<?php

//::::WordPress内のサポート機能追加::::
function init_func()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('media_post'));
    add_theme_support('automatic-feed-links');//フィードの利用を許可する


    /*カスタム投稿の追加*/
    register_post_type('media_post', [
        'labels'=>[
            'name'=>'メディア投稿',
        ],
        'public'=>true,
        'has_archive'=>true,
        'hierarchial'=>true,
        'menu-position'=>5,
        'show_in_rest'=>true,
        'supports' => array( 'title', 'thumbnail','editor' ),
    ]);
    flush_rewrite_rules(false);
    
    register_taxonomy('media', 'media_post', [
        'labels'=>[
            'name'=>'メディアカテゴリ'
        ],
        'hierarchial'=>true,
    ]);
}
add_action('init', 'init_func');

//::::CSS, JavaScriptの読み込み::::
function wishdesign_script()
{
    wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css');
    wp_enqueue_style('didot', '//unpkg.com/ress/dist/ress.min.css');
    wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css');
    wp_enqueue_style('slick', get_template_directory_uri(). '/css/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri(). '/css/slick-theme.css');
    wp_enqueue_style('style', get_template_directory_uri(). '/css/style.css');

    /* jQueryの二重読み込み防止 */
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery.min', get_template_directory_uri(). '/js/jquery-3.6.0.min.js');
    wp_enqueue_script('slick.min', get_template_directory_uri(). '/js/slick.min.js');
    wp_enqueue_script('mySlick', get_template_directory_uri(). '/js/mySlick.js');
    wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), '', true);
    wp_enqueue_script('scrollify', get_template_directory_uri(). '/js/jquery.scrollify.js');
    wp_enqueue_script('myScrollify', get_template_directory_uri(). '/js/myScrollify.js');
    wp_enqueue_script('sectionscroller', get_template_directory_uri(). '/js/sectionscroller.min.js');
    // wp_enqueue_script('mySectionscroll', get_template_directory_uri(). '/js/mySectionscroll.js');
    wp_enqueue_script('boxFade', get_template_directory_uri(). '/js/boxFade.js');
    wp_enqueue_script('toTopBtn', get_template_directory_uri(). '/js/toTopBtn.js');
    wp_enqueue_script('header', get_template_directory_uri(). '/js/header.js');
    wp_enqueue_script('sidemenu', get_template_directory_uri(). '/js/sidemenu.js');
}
add_action('wp_enqueue_scripts', 'wishdesign_script');




 //::::お問い合わせフォームの実装::::
 
 function send_mail()
 {
     if (! is_page('thanks')) {
         return;
     }

     session_start();
     
     $_SESSION['office_name'] = htmlspecialchars($_POST['office_name'], ENT_QUOTES);
     $_SESSION['user_name'] = htmlspecialchars($_POST['user_name'], ENT_QUOTES);
     $_SESSION['email'] = htmlspecialchars($_POST['email'], ENT_QUOTES);
     $_SESSION['budget'] = htmlspecialchars($_POST['budget'], ENT_QUOTES);
     $_SESSION['contact'] = htmlspecialchars($_POST['contact'], ENT_QUOTES);
     $myform_nonce = $_POST['myform_nonce'];
     $_SESSION['error_user_name'] ="";
     $_SESSION['erooe_email']  ="";
     $_SESSION['error_contact'] ="";
     

     if (! wp_verify_nonce($myform_nonce, 'my-form')) {
         wp_die('不正な遷移です');
     }

     /* 必須項目が無い時contactページへ戻る */
     if (empty($_SESSION['user_name'])) {
         $_SESSION['error_user_name'] = '＊未入力です。';
     }
     
     if (empty($_SESSION['email'])) {
         $_SESSION['error_email'] = '＊未入力です。';
     }
     
     if (empty($_SESSION['contact'])) {
         $_SESSION['error_contact'] = '＊未入力です。';
     }
     
     if (empty($_SESSION['user_name']) || empty($_SESSION['email']) || empty($_SESSION['contact'])) {
         header("location: contact");
         exit();
     }

     /* お問い合わせ内容をメールで送信 */
     $to = "kent.mosstar@gmail.com";//送信先のメールアドレス
     $subject = "お問合せがありました";
     $body =
    "会社名 : ".$_SESSION['office_name']."\n"
    ."お名前 :" .$_SESSION['user_name']."\n"
    . "メールアドレス :" .$_SESSION['email']."\n"
    . "ご予算感 : ".$_SESSION['budget']."\n"
    . "お問合せ内容 : ".$_SESSION['contact']."\n";
     $fromname = "Wish-Design";
     $from = "kent.mosstar@gmail.com";
     $headers = "From: {$fromname} <{$from}>\r\n";
     $response = wp_mail($to, $subject, $body, $headers) ;

     session_destroy();
 }
add_action('template_redirect', 'send_mail');