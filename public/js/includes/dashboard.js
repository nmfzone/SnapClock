jQuery(function($) {
	
	/** ******************************
    * Time Clock
    ****************************** **/
	var isRunning = $('#running').val();
	if (isRunning == '0') {
		if ($("#timetrack").hasClass("btn-warning")) {
			$("#timetrack").removeClass("btn-warning");
			$("#timetrack").addClass('btn-success');
		}
		if ($("#timetrack i").hasClass("fa fa-sign-out")) {
			$("#timetrack i").removeClass("fa fa-sign-out");
			$("#timetrack i").addClass('fa fa-sign-in');
		}
		$("#timetrack").addClass('btn-success');
		$("#timetrack i").addClass('fa fa-sign-in');
		$(".workStatus").html("Clocked Out");
		$("#timetrack span").html("Clock In");
	} else {
		if ($("#timetrack").hasClass("btn-success")) {
			$("#timetrack").removeClass("btn-success");
			$("#timetrack").addClass('btn-warning');
		}
		if ($("#timetrack i").hasClass("fa fa-sign-in")) {
			$("#timetrack i").removeClass("fa fa-sign-in");
			$("#timetrack i").addClass('fa fa-sign-out');
		}
		$("#timetrack").addClass('btn-warning');
		$("#timetrack i").addClass('fa fa-sign-out');
		$(".workStatus").html("Clocked In");
		$("#timetrack span").html("Clock Out");
	}

});