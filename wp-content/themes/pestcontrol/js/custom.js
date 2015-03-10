jQuery(document).ready(function($){
	$this = $(this);

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
	    $bug.show();
	    $bug.rotate(180);
	    $bug.animate({
		    left: "92%",
		    top: "625px"
		  }, 2500, 'swing', function(){
		  	$bug.hide();
		  	$('#ladyBug').show();
		  } );
	  }, 5000);
});