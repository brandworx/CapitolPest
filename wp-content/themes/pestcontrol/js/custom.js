jQuery(document).ready(function($){
	$this = $(this);

	$('#slider').flexslider({
		controlNav: false,
		directionNav: false,
	});

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