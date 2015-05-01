$(document).ready(function(){
	s = $(".sticker");
	for (i=0; i<s.length; i++) {
		$(s[i]).sticky({topSpacing:80, bottomSpacing: 100});
	}
	$(".widget:last-of-type").sticky({topSpacing:44});
});

$(window).scroll(function(){
	if ($(window).scrollTop() > 5) {
		$('.nav_logo_big')[0].style.height = 0;
		$('.nav_logo_big')[0].style.opacity = 0;
		$('.nav_logo_left')[0].style.opacity = 1;
	};
	if ($(window).scrollTop() <= 5) {
		$('.nav_logo_big')[0].style.height = "50px";
		$('.nav_logo_big')[0].style.opacity = 1;
		$('.nav_logo_left')[0].style.opacity = 0;
	}
});
