jQuery(document).ready(function($){
	$this = $(this);

	$(function(){
		var mobileNav = $('#mobileNav .mobile');

		mobileNav.click(function(){
			$('#tabs').toggleClass('toggled');
		});
	});

	$('#slider').flexslider({
		controlNav: false,
		directionNav: false,
	});

	$( "#accordion" ).accordion();
	$( "#tabs" ).tabs();

	$(function(){
		var tabs = $('#tabs ul.ui-tabs-nav');
		var tabsHeight = tabs.height();

		$('#tabs .ui-tabs-panel').css('min-height',tabsHeight);
	});

	$(".fancybox").fancybox();

	setTimeout(
	  function() 
	  {
	    $bug = $('#ladyBugFly');
	    $button = $('#featuredRight input[type="submit"]');
	    $buttonTop = $button.offset();
	    $buttonWidth = $button.width();
	    $bug.show();
	    $bug.rotate(180);
	    $bug.animate({
		    left: $buttonTop.left + $buttonWidth,
		    top: $buttonTop.top
		  }, 2500, 'swing', function(){
		  	$bug.hide();
		  	$('#ladyBug').show();
		  } );
	  }, 5000);
});