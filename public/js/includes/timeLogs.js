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
	
	var sum = 0;
	$(".hoursTotal").each(function() {
		var value = $(this).text();
		if(!isNaN(value) && value.length != 0) {
			sum += parseFloat(value);
		}
	});

	// Set the Sub-Total
	//sum = formatCurrency(sum);
	$(".totalHours").html(sum);
	
	/** ******************************
	 * Date & Time Fields
	 ****************************** **/
	$('#dateIn').datetimepicker({
		format: 'yyyy-mm-dd',
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		minView: 2,
		forceParse: 0
	});
	$('#timeIn').datetimepicker({
		format: 'hh:ii',
		startDate: '2014-01-01',
		weekStart: 1,
		todayBtn:  0,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		forceParse: 0,
		minuteStep: 15
	});
	
	$('#dateOut').datetimepicker({
		format: 'yyyy-mm-dd',
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		minView: 2,
		forceParse: 0
	});
	$('#timeOut').datetimepicker({
		format: 'hh:ii',
		startDate: '2014-01-01',
		weekStart: 1,
		todayBtn:  0,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		forceParse: 0,
		minuteStep: 15
	});

});