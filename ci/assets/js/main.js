//메인 배너 슬라이드
$('.carousel').carousel(
    {
        dist: 0,
        padding: 0,
        fullWidth: true,
        indicators: true,
        duration: 200,
    }
);
/*autoplay()*/
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 9000);
}
//
(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
    });

    $('.parallax').parallax();
    $('.modal').modal();

})(jQuery);

$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.scrollspy').scrollSpy();
  });

function home(){
    location.href="/Main/index/";
}

function todo(){
    alert('준비중 입니다...');
    return false;
}
