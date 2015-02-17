$(document).ready(function () {

	// New Event
	$('#newstartDate').datetimepicker({
		format: 'yyyy-mm-dd',
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		minView: 2,
		forceParse: 0
	});
	$('#neweventTime').datetimepicker({
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
	
	$('#newendDate').datetimepicker({
		format: 'yyyy-mm-dd',
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		minView: 2,
		forceParse: 0
	});
	$('#newendTime').datetimepicker({
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
	
	// Edit Event
	$('#editstartDate').datetimepicker({
		format: 'yyyy-mm-dd',
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		minView: 2,
		forceParse: 0
	});
	$('#editeventTime').datetimepicker({
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
	
	$('#editendDate').datetimepicker({
		format: 'yyyy-mm-dd',
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		minView: 2,
		forceParse: 0
	});
	$('#editendTime').datetimepicker({
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