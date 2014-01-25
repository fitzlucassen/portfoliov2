$(document).ready(function(){
    var width = $(window).width();
    var height = $(window).height();
    var isAnim = false;
    var currentStrat = $('#menuStrat');
    var cptStrat = 1;
    
    // Set the size of strats
    $('.strat').css({width: width - 15, height: height});
    
    // Déroulement/animation du menu
    setTimeout(function(){
	$('#menu').animate({height: (height/2) + 'px'}, 700, function(){
	    $('#menu2').animate({width: (width-200) + 'px'}, 700, function(){
		$('#menu3').css({'margin-left': (width-100) + 'px'});
		$('#menu3').animate({height: (height/2 + 10) + 'px'}, 700, function(){
		    
		    $('#bubble0').animate({height: '200px', width: '200px'}, 300, function(){
			$('#bubble1').animate({height: '200px', width: '200px'}, 300, function(){
			    $('#bubble2').animate({height: '200px', width: '200px'}, 300, function(){
				$('#bubble3').animate({height: '200px', width: '200px'}, 300, function(){
				    $('#bubble4').animate({height: '200px', width: '200px'}, 300, function(){
					$('.bubble a').fadeIn('slow');
					$('.bubble').css({height: '115px', 'padding-top': '85px'});
				    });
				});
			    });
			});
		    });
		});
	    });
	});
    },200);
    
    // Select menu
    /*$('.bubble').hover(function(){
	var p = $(this).position();
	$('.selectorTop').css({left: (p.left + 160) + 'px'});
	$('.selectorTop').stop().animate({height: (height/2) + 'px'}, 300);
	$('.selectorBottom').css({left: (p.left + 160) + 'px'});
	$('.selectorBottom').stop().animate({height: (height/2) + 'px'}, 300);
    }, function(){
	$('.selectorTop').stop().animate({height: '5px'}, 300);
	$('.selectorBottom').stop().animate({height: '5px'}, 300, function(){
	});
    });*/
    
    // Avion
    $('#plane').animate({left: width}, 10000, function(){
	$('#plane').addClass('scaleClass');
	$('#plane').css({top: '600px'});
	$('#plane').animate({left: -180 + 'px'}, 10000);
    });
    
    // Menu effect
    $('.bubble').click(function(){
	isAnim = true;
	var $this = $(this);
	var div = $($(this).children('div').children('a').attr('href'));
	$('html,body').stop().animate({
	    scrollTop: div.position().top
	},1000, function(){
	    currentStrat = div;
	    cptStrat = $this.children('div').children('a').attr('data-val');
	    isAnim = false;
	});
    });
    
    // return top
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
});