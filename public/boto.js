
$(document).ready(function(){

	$('.up-button').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.up-button').slideDown(300);
		} else {
			$('.up-button').slideUp(300);
		}
	});

});