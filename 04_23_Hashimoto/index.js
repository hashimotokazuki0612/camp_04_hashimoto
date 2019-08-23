// スクロールボタン
$(function () {
	var topBtn = $('#page-top');
	topBtn.hide();
	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	//スクロールしてトップ
	topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});
});

// スライドショー
$(function () {
	// 設定
	var $width = 450; // 横幅
	var $height = 500; // 高さ
	var $interval = 3000; // 切り替わりの間隔（ミリ秒）
	var $fade_speed = 1500; // フェード処理の早さ（ミリ秒）
	$("#slide ul li").css({
		"position": "relative",
		"overflow": "hidden",
		"width": $width,
		"height": $height
	});
	$("#slide ul li").hide().css({
		"position": "absolute",
		"top": 0,
		"left": 0
	});
	$("#slide ul li:first").addClass("active").show();
	setInterval(function () {
		var $active = $("#slide ul li.active");
		var $next = $active.next("li").length ? $active.next("li") : $("#slide ul li:first");
		$active.fadeOut($fade_speed).removeClass("active");
		$next.fadeIn($fade_speed).addClass("active");
	}, $interval);
});