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