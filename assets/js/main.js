(function($) {
	//메인 슬라이드
	$('.jumbotron ul').on('init', function(){
		$('video').each(function () {
			this.play();
		});
	});
	$('.jumbotron ul').slick({
		autoplay: true,
		dots: true,
		slidesToShow: 1,
  		slidesToScroll: 1,
		prevArrow: '<button class="slick-prev"><i class="icon-left"></i></button>',
        nextArrow: '<button class="slick-next"><i class="icon-right"></i></button>'
	});
})(jQuery);