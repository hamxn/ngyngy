/*
conrad roset .js
 */


/*$(function(){*/
$(window).load(function(){

	//$("body").hide().fadeIn(600);
//	$("#content").css("opacity", "0.2");
//	$("#portfolio").hide();
	//$("#content").css('opacity',0.3).show().animate({opacity:1});
	//$("#preload").css("display", "none");
	$("#preload").fadeOut(500);
    $("#portfolio").fadeIn(500);   

	$('a[href=#content]').click(function(){
        $('html, body').animate({scrollTop:0}, 'slow');
        return false;
    });

  	$(window).scroll(function(){
		if($(window).scrollTop() >= 100){
			$("#toTop").fadeIn(200);
		}else{
			$("#toTop").fadeOut(100);
		}
	});

	var pre  = $('.socialbuttons div').text();
	$('.socialbuttons a').hover(function(){
		var text  = $(this).text();
		$('.socialbuttons div').text( pre + text  );
	},function(){
		$('.socialbuttons div').text( pre );
	});

	var pre2  = $('.socialbig div').text();
	$('.socialbig a').hover(function(){
		var text  = $(this).text();
		var position  = $(this).position().top + 82;
		$('.socialbig div').text( pre2 + text  );
		$('.socialbig div').css('right','6px');
		$('.socialbig div').css('top',position);

	},function(){
		$('.socialbig div').text( pre2 );
				$('.socialbig div').css('right','-210px');

	});

	/*
	BIND BEHAVIORS
	for reattaching effects on ajax loaded content
	*/	
	var bindBehaviors = function() {

        $('#infomessage').delay(5000).fadeOut();

		//forms validation
		$("form#payment").validate();
		$("form#contact").validate();
		$("form#login").validate();
		
		// Cycle plugin
		//http://stackoverflow.com/questions/2851903/multiple-pagers-for-multiple-jquery-cycle-instances-on-same-page
		$('.slides').each(function() {
			
			var $slide = $(this);
			var $nav = $('<div class="slides_pager"></div>').insertAfter(this);
			var $next = $(this).parents().closest(".link");
			//var $next = $(this).children("li.fslide");
				
			$(this).cycle({
				fx:      'scrollLeft',
				speed:    600,
				timeout: 5,
				pager:   $nav,
				pagerEvent: 'mouseover'

			}).cycle('pause');
			
			$next.mouseenter(function() { 
				$slide.cycle('resume'); 
			}).mouseleave(function(){
				$slide.cycle('pause'); 
			});
			
		});

		$('.flexslider').flexslider({
			animation : 'slide',
			slideshow : false,
			smoothHeight: true
		/*
			animation : 'slide',
			slideshow : false,
			smoothHeight: true
		*/
		//slideshow: false		

		});
  	
		//THUMBNAILS
		$(".fancybox").fancybox({
			openEffect : 'none',
			closeEffect	: 'none',
			helpers : {
				title : {
					type : 'outside'
				}
			}
		});
		/*
		$(".terms").fancybox({
			type: 'iframe',
			'width'	:	'95%',
           	'height'     :   '90%'//,
           //'autoScale'  :	true
        });
		*/	
		
	}
	
	
	bindBehaviors();

	/*
	MAIN MENU FUNCTIONS
	*/	
	//main menu desplegable
	$('#toggle_portfolio').live('click',function() {
		$(".portfolio_cat").slideToggle();
		e.preventDefault();
	});
	//main menu desplegable
	$('#toggle_shop').live('click',function() {
		$(".shop_cat").slideToggle();
		e.preventDefault();
	});
	


	$("a.ajax").live('click',function(e){

		e.preventDefault();//so the link doesn't try to go somewhere

	   // $(this).parent('ul').child(".selected").removeClass('selected');
	  //  $('ul.nav li#menuid_<? echo $grandpa; ?> a').addClass('selected');
		//$(this).parent('ul li').siblings().children('a.selected').removeClass("selected");
		$('a.selected').removeClass("selected");//quitamos todos
		$(this).addClass('selected');

		var linkurl = $(this).attr("href");
		window.location.hash = linkurl;

		var iconurl = "public/icons/loader2.gif";

		$("#content").append('<img id="loader" src="'+ iconurl +'">');//+workful
		$('#content').stop().animate({"opacity": 0.2});

		$.ajax({
			url:  linkurl,
			type: "POST",
			success: function(data){
				$('#content').hide();
				$('#content').html(data);
				//$('#loader').hide();
				//$("#content").animate({height:'toggle'},200);
				$('#content').fadeIn(500);
				$('#content').stop().animate({"opacity": 1});
				
				 //reattach effects
				bindBehaviors();
			},
			error: function(){
				alert("An error has occurred. Please try again.");
			},
			complete: function(xmlHttp) {
				if (xmlHttp.status != 200) {
					alert(xmlHttp.status);
				}
				//$('#loader').hide();
			}
		});

		return false;

	});


	//si hay hash,, disparar eventos segun ruta
	if(window.location.hash) {
		var hash = window.location.hash.substring(1);
			//alert(hash);
		//$('a[href=' + hash + ']').click();
		//$('a[href=' + hash + ']').live('click');
		
		$('#content').load(hash);
		bindBehaviors();
	}


 




});
