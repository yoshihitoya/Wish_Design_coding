// Menuボタンを押したら
jQuery(function($) {
  $(".js-btn-menu").on("click", function(){
    $(".l-sidebar").toggleClass("is-open");
    $(".c-box--overlay").toggleClass("is-open");
    $("body").toggleClass("is-open");
  });

  $('.js-btn-close').on('click', function(){
    $(".l-sidebar").toggleClass("is-open");
    $(".c-box--overlay").toggleClass("is-open");
    $("body").toggleClass("is-open");
  });
});


// 全画面でハンバーガーメニューの設定をリセットする
jQuery(function($){
  $(window).resize(function(){
    //windowの幅をxに代入
    let x = $(window).width();
    //windowの分岐幅をyに代入
    let y = 1201;
    if (x >= y) {
        $(".l-sidebar").removeClass("is-open");
        $("body").removeClass("is-open");
    }
    else
    {
    }
});
})