//画像のモーダルウィンドウ
jQuery(function($) {
  $(".js-modal").modaal({
    type: 'image',
    overlay_close:true,//モーダル背景クリック時に閉じるか
    background:'#707070',

    before_open:function(){// モーダルが開く前に行う動作
      $('html').css('overflow-y','hidden');/*縦スクロールバーを出さない*/
      $(".p-menu-btn-sub").toggleClass("is-close");//なぜかメニューボタンが前面に出るのでクラス名を付与
    },
    after_close:function(){// モーダルが閉じた後に行う動作
      $('html').css('overflow-y','scroll');/*縦スクロールバーを出す*/
      $(".p-menu-btn-sub").toggleClass("is-close");
    }
  });
});