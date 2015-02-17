$(function() {
	
	/** ******************************
	 * Accordions
	 ****************************** **/
    var allPanels = $('.accordion > dd').hide();

    $('.accordion > dt > a').click(function () {
        $target = $(this).parent().next();
        if (!$target.hasClass('active')) {
            allPanels.removeClass('active').slideUp();
            $target.addClass('active').slideDown();
			$('.accordion > dt > a').find("i").removeClass('fa-angle-down');
			$('.accordion > dt > a').find("i").addClass('fa-angle-right');
        } else {
            $target.removeClass('active').slideUp();
        }
		$(this).find("i").toggleClass("fa-angle-right fa-angle-down");
        return false;
    });
	
});