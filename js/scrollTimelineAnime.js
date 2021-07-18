//線が伸びるための設定を関数でまとめる
jQuery(function($) {
  window.ScrollTimelineAnime = function() {//windowオブジェクトを入れないとWPで正常作動しない
  $('.p-timeline li').each(function(){// それぞれのli要素の
    let elemPos = $(this).offset().top;// 上からの高さ取得
    let scroll = $(window).scrollTop();// スクロール値取得
    let windowHeight = $(window).height();// windowの高さ取得
    let startPoint = 300; //線をスタートさせる位置を指定※レイアウトによって調整してください
    if (scroll >= elemPos - windowHeight-startPoint){
      let H = $(this).outerHeight(true)//liの余白と高さを含めた数値を取得
      //スクロール値から要素までの高さを引いた値を、liの高さの半分のパーセントで出す
      let percent = (scroll+startPoint - elemPos) / (H/2) *100;//liの余白と高さの半分で線を100％に伸ばす

      // 100% を超えたらずっと100%を入れ続ける
      if(percent  > 100){
        percent  = 100;
      }
      // ボーダーの長さをセット
      $(this).children('.border-line').css({
        height: percent + "%", //CSSでパーセント指定
      });
    }
  });
};
});



// // 画面をスクロールをしたら動かしたい場合の記述
jQuery(function($) {
  $(window).on('scroll', function(){
    ScrollTimelineAnime();//関数を呼ぶ
  });
});

// // ページが読み込まれたらすぐに動かしたい場合の記述
jQuery(function($) {
  $(window).on('load', function(){
    ScrollTimelineAnime();// 関数を呼ぶ
  });
});