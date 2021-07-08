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


// スリック
jQuery(function($) {
$('.js-slick').slick({
  slidesToShow:1,
  autoplay:true,
  autoplaySpeed:800,
  dots:false,//下の３つのドット
  arrows:true,//デフォルトの矢印
  nextArrow:'<button class="js-slick-next"><span>Slide</span></button>',//次へを変更
  // dotsClass: "slide-dots", //ここでclass名を変更する（デフォルトはslick-dots）
  // variableWidth: true,

  responsive:[
    {
      breakpoint: 481,
      settings: {

      }
    },
  ]
});
});


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



// アニメーション：スクロールしたら順番に表示
jQuery(function($){
	$(window).scroll(function (){
		$('.js-fadein').each(function(i){
			let elemPos = $(this).offset().top;
			let scroll = $(window).scrollTop();
			let windowHeight = $(window).height();
			let speed = 100;//0.1秒=100
			if(scroll > elemPos - windowHeight){
        $(this).delay(i * speed).queue(function(next){
          $(this).addClass('show');
          next();
				});
			}
		});
	});
});



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


















// 文字サイズ：親要素に合わせて伸縮
// fitty('[js-fitty]', {
//   maxSize: 15,
//   minSize: 8,
// });



// alignleftの親要素にスタイリングする
// jQuery(function($) {
//   $('p:has(.alignleft)').css({display:'flex',margin:'10px 0 10px 0'});
//   });


// タグに直書きされたstyleを削除する
// jQuery(function($) {
//   $('figure').removeAttr('style');
//   $('img').removeAttr('width');
//   $('img').removeAttr('height');
//   $('dl').removeAttr('style');
// });





// ヘッダータイトル：下スクロールで消えて上スクロールで出現
// let beforePos = 0;//スクロールの値の比較用の設定

// function ScrollAnime() {
//   let elemTop = $('#js-header-fade').offset().top;//#の位置まできたら
//   let scroll = $(window).scrollTop();

//   //ヘッダーの出し入れをする
//   if(scroll == beforePos) {

//   //IE11対策で処理を入れない
//   }else if(elemTop > scroll || 0 > scroll - beforePos){

//   //ヘッダーが出現するときのクラス名
//   $('#js-ttl').removeClass('fadein'); //#からクラス名を除く
//   $('#js-ttl').addClass('fadeout');//#にクラス名を追加
//   }else {

//   //ヘッダーが消えるときのクラス名
//   $('#js-ttl').removeClass('fadeout');//#からクラス名を除く
//   $('#js-ttl').addClass('fadein');//#にクラス名を追加
//   }

//   beforePos = scroll;//現在のスクロール値を比較用のbeforePosに格納
// }


// 画面をスクロールをしたら動かしたい場合の記述
// $(window).scroll(function () {
//   ScrollAnime();//スクロール途中でヘッダーが消え、上にスクロールすると復活する関数を呼ぶ
// });

// ページが読み込まれたらすぐに動かしたい場合の記述
// $(window).on('load', function () {
//   ScrollAnime();//スクロール途中でヘッダーが消え、上にスクロールすると復活する関数を呼ぶ
// });






// ヘッダータイトル：スクロールでフェードイン・フェードアウト
// function ScrollAnime() {
//   let elemTop = $('#js-header-fadeout').offset().top;//#の位置
//   let scroll = $(window).scrollTop();

//   //ヘッダーの出し入れをする
//   if(scroll == beforePos) {

//   //IE11対策で処理を入れないため
//   }else if(elemTop > scroll || 0 > scroll - beforePos){

//   //ヘッダータイトルがフェードイン
//   $('#js-ttl').fadeIn()
//   }else {

//   //ヘッダータイトルがフェードアウト
//   $('#js-ttl').fadeOut()
//   $('#js-ttl').addClass('is-out');//#にクラス名を追加
// }
  
//   beforePos = scroll;//現在のスクロール値を比較用のbeforePosに格納
// }