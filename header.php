<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

  <head>
    <meta charset="UTF-8">

    <!-- レスポンシブ対応：デバイスの幅を使うことを指定 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="説明文を記述">
    <meta name="keywords" content="検索ワードを記述（５つまで）">

    <?php wp_head();?>
  </head>
  <!-- ◇----------------------------------------------------------------------------------------------◇ -->

  <body <?php body_class(); ?>>
    <?php wp_body_open();?>

    <div class="l-container">
      <header class="l-header u-display-between">
        <span id="js-ttl">
          <?php if(is_front_page() || is_home() || is_page('home')) {
            echo '<a class="p-site-ttl sp-none" href="';
            } else {
              echo '<a class="p-site-ttl" href="';
            }
          ?>
          <?php echo esc_url( home_url( '/' ) ); ?>
          <?php echo ' "> '; ?>
          <?php bloginfo( 'name' ); ?></a></span>
        <button 
          <?php if(is_front_page() || is_home() || is_page('home')) {
            echo 'class="p-menu-btn js-btn-menu u-grid"';
            } else {
              echo 'class="p-menu-btn-sub js-btn-menu u-grid"';
            }
          ?>>
          <p>Menu</p><span>サイドバーを開く</span>
        </button>
      </header>