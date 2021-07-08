// 追従ボタンの表示
jQuery(function($) {
  let btn = $('.p-back-to-top');
  
  //スクロールしてページトップから100に達したらボタンを表示
  $(window).on('load scroll', function(){
    if($(this).scrollTop() > 200) {
      btn.addClass('is-active');
    }else{
      btn.removeClass('is-active');
    }
  });

  //スクロールしてトップへ戻る
  btn.on('click',function () {
    $('body,html').animate({
      scrollTop: 0
    });
  });
});