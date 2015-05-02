function set_code() {
	$('code').attr('contenteditable','true');
	$('pre').attr('contenteditable','true');
}

function set_sticker() {
	s = $(".sticker");
	for (i=0; i<s.length; i++) {
		$(s[i]).sticky({topSpacing:44, bottomSpacing: 100});
	}
	$(".widget:last-of-type").sticky({topSpacing:44});	
};

function un_sticker() {
	s = $(".sticker");
	for (i=0; i<s.length; i++) {
		$(s[i]).unstick();
	};
	$(".widget:last-of-type").unstick();	
	$('.sticky-wrapper').css('height','auto')
};

function if_sticker() {
	if ($(window).width() >= 1000) {	
		set_sticker();
	} else if ($(window).width() >= 600 && $(window).width() < 1000) {
		set_sticker();
		$(".widget:last-of-type").unstick();
	} else {
		un_sticker();
	};
};

function set_scroll_logo() {
	if ($(window).scrollTop() > 5) {
		$($('.single .nav_logo_big')[0]).css('height','0');
		$($('.single .nav_logo_big')[0]).css('opacity','0');
		$($('.single .nav_logo_left')[0]).css('opacity','1');
	};
	if ($(window).scrollTop() <= 5) {
		$($('.single .nav_logo_big')[0]).css('height','50px');
		$($('.single .nav_logo_big')[0]).css('opacity','1');
		$($('.single .nav_logo_left')[0]).css('opacity','0');
	};
};

$(document).ready(function(){

	set_code();
	if_sticker();

	$(window).scroll(function(){
		set_scroll_logo();
	});

	$(window).resize(function(){
		if_sticker();
	});

});

