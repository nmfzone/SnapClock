$(document).ready(function() {

	/** ********************************************
    * Time Report - Specific Employee
    ******************************************** **/
	$('#employee').change(function() {
		$('#empFullName').val($('#employee option:selected').html());
	});
	$('#fromDate').datetimepicker({
		format: 'yyyy-mm-dd',
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		minView: 2,
		forceParse: 0
	});
	$('#toDate').datetimepicker({
		format: 'yyyy-mm-dd',
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		minView: 2,
		forceParse: 0
	});
	
});