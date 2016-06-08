jQuery( document ).ready(function( $ ) {
	if (! ($("div").is(".moduletable_header"))) {
		$('.top').css({'margin-top':'83px'});
	}
	

 var topPos = $('.floating').offset().top; //topPos - это значение от верха блока до окна браузера
 $(window).scroll(function() {
 	var top = $(document).scrollTop();
 	if (top > topPos) {
 		$('.floating').addClass('fixed');
 		$('.top').css({'margin-top':'0','background':'#fff5d1'});
 	}
 	else {
 		$('.floating').removeClass('fixed');
 		$('.top').css({'background':'none'});
 		if (! ($("div").is(".moduletable_header"))) {
 			$('.top').css({'margin-top':'83px'});
 		}
 		else {
 			$('.top').css({'margin-top':'-83px'});	
 		}
 	}
 });


}); //ready

