$(document).ready(function(){
    var width = $(window).width();
    var height = $(window).height();
    var isAnim = false;
    var currentStrat = $('#menuStrat');
    var cptStrat = 1;
    
    // Set the size of strats
    $('.strat').css({width: width, height: height});
    
    $(window).resize(function(){
	width = $(window).width();
	height = $(window).height();
	$('.strat').css({width: width});
    });
    
    // Ancre scroll from menu click
    $('nav li a').click(function(){
	isAnim = true;
	var $this = $(this);
	var div = $($(this).attr('href'));
	$('html,body').stop().animate({
	    scrollTop: div.position().top
	},1000, function(){
	    currentStrat = div;
	    cptStrat = $this.attr('data-val');
	    isAnim = false;
	});
	
	return false;
    });
    
    // return top button click
    $('.returnTop').click(function(){
	isAnim = true;
	cptStrat = 1;
	currentStrat = $('#menuStrat');
	
	$('html,body').stop().animate({
	    scrollTop:$('html,body').position().top
	},1000, function(){
	    isAnim = false;
	});
	
	return false;
    });
    
    // Scroll animation
    $(window).scroll(function(){

		if($(window).scrollTop() > $('nav').position().top){
		    $('nav').stop().fadeOut('slow',function(){
				$('nav').addClass('fixed');
				$('nav').stop().fadeIn('slows');
		    });
		}
		else {
		    $('nav').stop().fadeOut('slow',function(){
				$('nav').removeClass('fixed');
				$('nav').stop().fadeIn('slows');
		    });
		}
		if(!isAnim && $(window).scrollTop() > currentStrat.position().top){
		    // scroll down
		    isAnim = true;
		    cptStrat++;
		    currentStrat = $('.strat:nth-child(' + cptStrat + ')');
			
		    $('html,body').stop().animate({
				scrollTop:currentStrat.position().top
		    },1000);
		    setTimeout(function(){
				isAnim = false;
		    },1100);
		}
		else if(!isAnim && $(window).scrollTop() < currentStrat.position().top) {
		    // scroll up
		    isAnim = true;
		    cptStrat--;
		    currentStrat = $('.strat:nth-child(' + cptStrat + ')');

		    $('html,body').stop().animate({
				scrollTop:currentStrat.position().top
		    },1000);
		    setTimeout(function(){
				isAnim = false;
		    },1100);
		}
    });
    
    // Skills
    $('.skillbar').each(function(){
		$(this).find('.skillbar-bar').animate({
		    width:$(this).attr('data-percent')
		},6000);
    });
});


function disable_scroll() {
  if (window.addEventListener) {
      window.addEventListener('DOMMouseScroll', wheel, false);
  }
  window.onmousewheel = document.onmousewheel = wheel;
  document.onkeydown = keydown;
}

function enable_scroll() {
    if (window.removeEventListener) {
        window.removeEventListener('DOMMouseScroll', wheel, false);
    }
    window.onmousewheel = document.onmousewheel = document.onkeydown = null;  
}