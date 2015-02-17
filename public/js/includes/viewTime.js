$(function() {

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