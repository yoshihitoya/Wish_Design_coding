/*カード：ホバーアクション
ホバーすると暗くする 
* ==========================  */
jQuery(function ($) {
    $('.js-postcard').hover(
        function () {
            $(this).addClass("is-active");
        },
        function () {
            $(this).removeClass("is-active");
        },

    );

});