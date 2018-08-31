(function($) {
	//메인 슬라이드
	$('.jumbotron ul').on('init', function(){
		$('video').each(function () {
			this.play();
		});
	});
    $(window).ready(function(){
        $('.jumbotron ul').slick({
            autoplay: true,
            dots: true,
            autoplaySpeed: 5000,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<button class="slick-prev"><i class="icon-left"></i></button>',
            nextArrow: '<button class="slick-next"><i class="icon-right"></i></button>',
            cssEase: 'linear'
        });
    });
    $('.jumbotron ul').on('afterChange', function(event, slick, currentSlide, nextSlide){
    $('.slick-slide.visual-list').removeClass('action');
        setTimeout(function (){ 
            $('.slick-active.visual-list').addClass('action'); 
        });
    });
    $('.jumbotron ul').on('init', function(event,slick){
        setTimeout(function(){ 
            $('.slick-active.visual-list').addClass('action'); 
        });
    });
})(jQuery);