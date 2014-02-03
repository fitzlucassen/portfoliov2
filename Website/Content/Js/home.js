$(document).ready(function(){
    var width = $(window).width();
    var height = $(window).height();
    var isAnim = false;
    var currentStrat = $('#menuStrat');
    var cptStrat = 1;
    
    // Set the size of strats
    $('.strat').css({width: width - 15, height: height});
   
    
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