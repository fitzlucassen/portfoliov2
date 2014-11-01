$(document).ready(function(){
	$('.skillbar').each(function(){
		$(this).find('.skillbar-bar').animate({
			width:$(this).attr('data-percent')
		},6000);
	});

	setTimeout(function(){
		$('#blocProject .view img').each(function(){
			if($(this).outerWidth() > 300){
				$(this).css({'margin-left':'-' + (($(this).outerWidth() - 300) / 2) + 'px'})
			}
		});
	}, 1000);
	
});