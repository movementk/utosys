(function($){
	//모바일 aside 버튼 이벤트 관련
	$(function (){
		$(document).on('click','.btn-nav', function(){
			$('body').addClass('opened');
			$('.aside-header .btn-default').addClass('close-btn');
		});
		$(document).on('click','.close-btn, #aside .backdrop', function(){
			$('body').removeClass('opened');
			$('.close-btn').removeClass('close-btn');
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
	
	//1200때 모바일 nav
	$(window).on('load resize', function() {
		var conWidth = $('body').width();
		/*console.log(conWidth);*/
		if (conWidth >= 1199) {
			$('body').removeClass("opened");
		}
	});
    
    // main modal popup
    $('.main-popup').modal().show();
    $(window).ready(function(){
        $('.main-popup .modal-slide').slick({
            autoplay: true,
            autoplaySpeed: 5000,
            adaptiveHeight: true,
            arrows: false,
            dots: true,
            infinite: true,
        });
    });

    // global-search
    $(document).on('click','.global-search .btn-search', function(){
        $('.global-search').addClass('action');
        $('.global-search .form-group').addClass('d-block');
        $('.global-search .form-group').removeClass('d-none');
    });
    $(document).on('mouseleave','.global-search', function(){
        $('.global-search').removeClass('action');
        $('.global-search .form-group').removeClass('d-block');
        $('.global-search .form-group').addClass('d-none');
    });
	
})(jQuery);














