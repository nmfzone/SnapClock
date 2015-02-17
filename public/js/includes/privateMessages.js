$(function() {
	// Hide the Preview Box header and footer on page load
	$('.msgOptions, .msgHeading').hide();

	// Get the PM Page we are on
	var pmPage = $(this).find('#pmPage').val();

	$('.msgLink').click( function() {
		$('.msgQuip').hide();
		$('.msgHeading').show();

		var fromName = $(this).find('.name').html();
		var msgSubject = $(this).find('.subject').html();
		var dateSent = $(this).find('[name="time"]').val();
		var msgText = $(this).find('[name="msgTxt"]').val();
		var msgId = $(this).find('[name="messageId"]').val();
		var isRead = $(this).find('[name="toRead"]').val();

		$('.theSubject').show().html('<h3 class="panel-title">'+msgSubject+'</h3>');
		$('.msgContent').show().html(msgText.replace(/\\r\\n/g, "<br />"));

		// Inbox
		if (pmPage === 'inbox') {
			$('.whoFrom').show().html(fromName);
			$('.theDate').show().html(dateSent);
			if (isRead === '0') {
				$('.msgOptions').show().html('<form action="" method="post"><input name="messageId" value="'+msgId+'" type="hidden" /><a data-toggle="modal" href="#reply'+msgId+'" class="btn btn-info btn-sm btn-icon"><i class="fa fa-reply"></i> Reply</a> <button type="input" name="submit" value="markRead" class="btn btn-primary btn-sm btn-icon"><i class="fa fa-check-square"></i> Mark as Read</button> <a data-toggle="modal" href="#delete'+msgId+'" class="btn btn-danger btn-sm btn-icon"><i class="fa fa-trash-o"></i> Delete</a></form>');
			} else {
				$('.msgOptions').show().html('<form action="" method="post"><input name="messageId" value="'+msgId+'" type="hidden" /><a data-toggle="modal" href="#reply'+msgId+'" class="btn btn-info btn-sm btn-icon"><i class="fa fa-reply"></i> Reply</a> <button type="input" name="submit" value="archive" class="btn btn-warning btn-sm btn-icon"><i class="fa fa-archive"></i> Archive</button> <a data-toggle="modal" href="#delete'+msgId+'" class="btn btn-danger btn-sm btn-icon"><i class="fa fa-trash-o"></i> Delete</a></form>');
			}
		}
		// Sent Messages
		if (pmPage === 'sent') {
			$('.whoTo').show().html(fromName);
			$('.theDate').show().html(dateSent);
			$('.msgOptions').show().html('<a data-toggle="modal" href="#delete'+msgId+'" class="btn btn-danger btn-sm btn-icon"><i class="fa fa-trash-o"></i> Delete</a>');
		}
		// Archived Messages
		if (pmPage === 'archive') {
			$('.whoFrom').show().html(fromName);
			$('.theDate').show().html(dateSent);
			$('.msgOptions').show().html('<form action="" method="post"><input name="messageId" value="'+msgId+'" type="hidden" /><button type="input" name="submit" value="sendInbox" class="btn btn-primary btn-sm btn-icon"><i class="fa fa-long-arrow-left"></i> Send to Inbox</button> <a data-toggle="modal" href="#delete'+msgId+'" class="btn btn-danger btn-sm btn-icon"><i class="fa fa-trash-o"></i> Delete</a></form>');
		}
	});
	
	$('.compose').click( function() {
		$('.msgOptions, .msgHeading').hide();
		$('.msgContent').removeClass('mt10');
	});

	$('.showinbox').click( function() {
		$('.msgHeading, .msgQuip').show();
		$('.msgOptions, .panel-heading, .whoFrom, .msgContent').hide();
	});

	$('.showsent').click( function() {
		$('.msgHeading, .msgQuip').show();
		$('.msgOptions, .panel-heading, .whoTo, .msgContent').hide();
	});
	
	$('.showarchive').click( function() {
		$('.msgHeading, .msgQuip').show();
		$('.msgOptions, .panel-heading, .whoFrom, .msgContent').hide();
	});

});