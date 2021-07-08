// ヘッダータイトル：スクロールしたら消える
jQuery(function($) {
  let ttl = $('#js-ttl');
  
  //スクロールしてページトップから100に達したらボタンを表示
  $(window).on('load scroll', function(){
    if($(this).scrollTop() > 100) {
      ttl.addClass('fade');
    }else{
      ttl.removeClass('fade');
    }
  });
});