$(document).ready(function() {
	"use strict";

	/**************************************************************************
				 SKILL BAR
	**************************************************************************/

	$(".determinate").each(function(){
	  var width = $(this).text();
	  $(this).css("width", width)
		.empty()
		.append('<i class="fa fa-circle" style="color: #fff"></i>');
	});


	/*************************************************************************
				TOOLTIP
	**************************************************************************/
	/*$('.tooltipped').tooltip({delay: 50});*/

	/**************************************************************************
		WOW INIT
	**************************************************************************/

	var wow = new WOW({ mobile: false });
	wow.init();

	/***************************************************************************
		  CONTACT FORM
	***************************************************************************/

	$("#contactForm").validator().on("submit", function (event) {
		if (event.isDefaultPrevented()) {
			// handle the invalid form...
			formError();
			submitMSG(false, "Êtes-vous sur d'avoir rempli le formulaire correctement ?");
		} else {
			// everything looks good!
			event.preventDefault();
			submitForm();
		}
	});
	function submitForm(){
	// Initiate Variables With Form Content
		var name = $("#name").val();
		var email = $("#email").val();
		var message = $("#message").val();

		$.ajax({
			type: "POST",
			url: "/Home/Index",
			data: {name: name, email: email, message: message},
			success : function(text){
				console.log(text);
				formSuccess();
			}
		});
	}
	function formSuccess(){
		$("#contactForm")[0].reset();
		submitMSG(true, "Message Envoyé!");
	}
	function formError(){
		$("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
		function(){
			$(this).removeClass();
		});
	}
	function submitMSG(valid, msg){
		var msgClasses = '';
		if(valid){
			msgClasses = "h3 text-center fadeInUp animated text-success";
		} else {
			msgClasses = "h3 text-center text-danger";
		}
		$("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
	}


	/**************************************************************************
       Projects
    **************************************************************************/
    $('#portfolio-item').mixItUp();
    
    $('.sa-view-project-detail').on('click', function(event) {
        event.preventDefault();
        var toLoad = $(this).attr('data-action');
        var href          = $(this).attr('href') + ' ' + $(this).attr('data-action'),
            dataShow      = $('#project-gallery-view'),
            dataShowMeta  = $('#project-gallery-view meta'),
            dataHide      = $('#portfolio-item'),
            preLoader     = $('#loader'),
            backBtn       = $('#back-button');

        dataHide.animate( { 'marginLeft':'-120%' }, { duration: 400, queue: false } );
        dataHide.fadeOut(400);
        setTimeout( function() { preLoader.show(); }, 400);
        setTimeout( function() {
            $(toLoad).addClass('actiive').fadeIn(600);
            preLoader.hide();
            dataShow.fadeIn(600);
            backBtn.fadeIn(600);
        },800);
    });

    $('#back-button').on('click', function(event) {
        event.preventDefault();
        var dataShow    = $('#portfolio-item'),
            dataHide    = $('#project-gallery-view');

        $("[data-animate]").each( function() {
            $(this).addClass($(this).attr('data-animate'));
        });

        $('.actiive').fadeOut(600).removeClass('actiive');
        dataHide.fadeOut(400);
        $(this).fadeOut(400);
        setTimeout(function(){
            dataShow.animate( { 'marginLeft': '0' }, { duration: 400, queue: false } );
            dataShow.fadeIn(400);
        },400);
        setTimeout(function(){
            dataShow.find('.fadeInRight, .fadeInLeft, .fadeInUp, .fadeInDown').removeClass('fadeInRight').removeClass('fadeInLeft').removeClass('fadeInUp').removeClass('fadeInDown');
        },1500);
    });
});

