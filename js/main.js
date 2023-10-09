// ハンバーガーメニュー

jQuery(function ($) {
    $(".js-hamburger").on("click", function () {
        if ($(".hamburger").hasClass("open")) {
          // ドロワーメニューが開いている時の処理を書く
            $(".js-drawer").fadeOut();
            $(".hamburger").removeClass("open");
            $(".header__circle").removeClass("circle");
            $("html").removeClass("fixed");
        } else {
          // ドロワーメニューが閉じている時の処理を書く
            $(".js-drawer").fadeIn();
            $(".hamburger").addClass("open");
            $(".header__circle").addClass("circle");
            $("html").addClass("fixed");
        }
    });
});

if($('.page-numbers:first-child').hasClass('current')){//liにクラス名currentがあれば
	$('.prev').addClass('disabled');//liのクラス名を追加する
}