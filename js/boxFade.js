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