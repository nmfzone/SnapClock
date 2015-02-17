$(function() {
	var a = 0;
	
	$('[name="noticeStart"]').each(function() {
		/** ******************************
		 * Date Picker
		 ****************************** **/
		$('#noticeStart_'+a+'').datetimepicker({
			format: 'yyyy-mm-dd',
			todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			minView: 2,
			forceParse: 0
		});
		
		$('#noticeExpires_'+a+'').datetimepicker({
			format: 'yyyy-mm-dd',
			todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			minView: 2,
			forceParse: 0
		});
		a++;
	});

});