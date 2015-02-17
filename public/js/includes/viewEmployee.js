$(function() {

	/** ******************************
	 * Equal Height Divs
	 ****************************** **/
	var profileheight = 0;
	$(".profileHgt").each(function(){
	  if($(this).height() > profileheight) { profileheight = $(this).height(); }
	});
	$(".profileHgt").height(profileheight);
	
	var addheight = 0;
	$(".profileAddress").each(function(){
	  if($(this).height() > addheight) { addheight = $(this).height(); }
	});
	$(".profileAddress").height(addheight);
	
	var timeheight = 0;
	$(".timeHgt").each(function(){
	  if($(this).height() > timeheight) { timeheight = $(this).height(); }
	});
	$(".timeHgt").height(timeheight);
	
	var leaveheight = 0;
	$(".leaveHgt").each(function(){
	  if($(this).height() > leaveheight) { leaveheight = $(this).height(); }
	});
	$(".leaveHgt").height(leaveheight);
	
	/** ******************************
     * Time Clock
     ****************************** **/
	var isRunning = $('#running').val();
	var empFullName = $('#empFullName').val();
	if (isRunning == '0') {
		if ($('#timetrack').hasClass('btn-warning')) {
			$('#timetrack').removeClass('btn-warning');
			$('#timetrack').addClass('btn-success');
		}
		if ($('#timetrack i').hasClass('fa fa-sign-out')) {
			$('#timetrack i').removeClass('fa fa-sign-out');
			$('#timetrack i').addClass('fa fa-sign-in');
		}
		$('#timetrack').addClass('btn-success');
		$('#timetrack i').addClass('fa fa-sign-in');
		$('.workStatus').html('Clocked Out');
		$('#timetrack span').html('Clock '+empFullName+' In');
	} else {
		if ($('#timetrack').hasClass('btn-success')) {
			$('#timetrack').removeClass('btn-success');
			$('#timetrack').addClass('btn-warning');
		}
		if ($('#timetrack i').hasClass('fa fa-sign-in')) {
			$('#timetrack i').removeClass('fa fa-sign-in');
			$('#timetrack i').addClass('fa fa-sign-out');
		}
		$('#timetrack').addClass('btn-warning');
		$('#timetrack i').addClass('fa fa-sign-out');
		$('.workStatus').html('Clocked In');
		$('#timetrack span').html('Clock '+empFullName+' Out');
	}
	
	/** ******************************
     * Terminate Employee Select
     ****************************** **/
	$("#setTermenated").change(function() {
		var setTermenated = $('#setTermenated').val();

		if (setTermenated === '0') {
			// Clear Termination Date and Reason fields
			$('#empTerminationDate').val('');
			$('#terminationReason').val('');
		}
	});

	/** ******************************
     * Date Picker
     ****************************** **/
	$('#empDob').datetimepicker({
		format: 'yyyy-mm-dd',
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		minView: 2,
		forceParse: 0
	});
	
	$('#empHireDate').datetimepicker({
		format: 'yyyy-mm-dd',
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		minView: 2,
		forceParse: 0
	});
	
	$('#empTerminationDate').datetimepicker({
		format: 'yyyy-mm-dd',
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		minView: 2,
		forceParse: 0
	});

});