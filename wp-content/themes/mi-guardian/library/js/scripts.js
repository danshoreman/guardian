	
(function($)	{
	
	$(document).ready(function() {
		
		// fancybox video load
		$('.fancybox-media').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			padding: 0,
			helpers : {
				media : {}
			}
		});
		
		
		// Nav
		// Show and hide main nav on mobile
		$('#toggle').click(function(){
			$('.main-menu').slideToggle('fast');
		});
		
		// On window resize reset menu to ensure nav displays
		var menu = $('.main-menu'); 
		$(window).on('resize', function(){     
		    if(!$("#toggle").is(":visible") && !menu.is(':visible'))
		    {
		      menu.css({'display':''});   
		    }
		});
		
		
		
	});

})(jQuery);

//moderizer svg detect
if (!Modernizr.svg) {
    var imgs = document.getElementsByTagName('img');
    var svgExtension = /.*\.svg$/
    var l = imgs.length;
    for(var i = 0; i < l; i++) {
        if(imgs[i].src.match(svgExtension)) {
            imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
            console.log(imgs[i].src);
        }
    }
}