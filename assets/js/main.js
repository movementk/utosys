(function($) {
	//모바일 aside 버튼 이벤트 관련
	$(function (){
		$(document).on('click','.btn-nav', function(){
			$('body').addClass('opened');
			$(this).addClass('btn-open');
		});
		$(document).on('click','.close-btn, #aside .backdrop', function(){
			$('body').removeClass('opened');
			$(this).removeClass('btn-open');
		});
	});

	//모바일 gnb 메뉴 관련 depth-1
	$(document).on('click', '.depth-1 > li > a', function() {
		if ($(this).parent().hasClass('active')) {
			$(this).parent().removeClass('active');
		} else {
			$(this).parent().siblings('.active').removeClass('active');
			$(this).parent().addClass('active');
		}
	});
	//모바일 gnb 메뉴 관련 depth-2
	$(document).on('click', '.depth-2 > li > a', function() {
		if ($(this).parent().hasClass('on')) {
			$(this).parent().removeClass('on');
		} else {
			$(this).parent().siblings('.on').removeClass('on');
			$(this).parent().addClass('on'); 
		}
	});
	// pc 헤더 메뉴 관련.
	 $(document).on('mouseenter focusin', '#gnb .menu > li > a', function() {
		$('body').addClass('nav-expanded');
	});
	$(document).on('mouseleave', '#header .container', function() {
		$('body').removeClass('nav-expanded');
		$('#gnb .menu > li > a').removeClass('active');
	});
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