$(function() {

	/** ******************************
    * Date Picker
    ****************************** **/
    $('#taskDue').datetimepicker({
		format: 'yyyy-mm-dd',
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		minView: 2,
		forceParse: 0
	});
	$('#newtaskDue').datetimepicker({
		format: 'yyyy-mm-dd',
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		minView: 2,
		forceParse: 0
	});

});