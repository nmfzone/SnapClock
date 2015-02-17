jQuery(function($) {
	
	/** ******************************
	 * Equal Height Profile Boxes
	 ****************************** **/
	var profileheight = 0;
	$(".profHeight").each(function(){
	  if($(this).height() > profileheight) { profileheight = $(this).height(); }
	});

	$(".profHeight").height(profileheight);

});