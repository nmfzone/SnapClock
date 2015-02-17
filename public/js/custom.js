// Fix for the following known Bootstrap bugs
// 		https://github.com/twbs/bootstrap/issues/10044
// 		https://github.com/twbs/bootstrap/issues/5566
// 		https://github.com/twbs/bootstrap/pull/7692
// 		https://github.com/twbs/bootstrap/issues/8423
// 		https://github.com/twbs/bootstrap/issues/7318
// 		https://github.com/twbs/bootstrap/issues/8423
if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
	document._oldGetElementById = document.getElementById;
	document.getElementById = function(id) {
		if(id === undefined || id === null || id === '') {
			return undefined;
		}
		return document._oldGetElementById(id);
	};
}

/**
 * Function to generate a Random Password
 **/
function generatePassword(limit) {
	limit = limit || 6;
	var password = '';
	// You can add or remove any characters you wish between the two single quote marks (')
	// Do NOT use singe quote marks in your characters list (')
	var chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!"£$&=^*#_-@+,.';
	var list = chars.split('');
	var len = list.length,
		i = 0;
	do {
		i++;
		var index = Math.floor(Math.random() * len);
		password += list[index];
	}
	while (i < limit);
	// Return the newly generated password
	return password;
}

$(document).ready(function() {

	/** ******************************
     * Current Time
     ****************************** **/
    moment.locale('id');
	setInterval(function() {
		var date = new Date(),
		//time = date.toLocaleTimeString();
		time = moment().format('Do MMMM YYYY, h:mm:ss a');
		$(".clock").html(time);
	}, 1000);

	/** ******************************
	 * Equal Height Divs
	 ****************************** **/
	var maxheight = 0;
	$(".setHeight").each(function(){
	  if($(this).height() > maxheight) { maxheight = $(this).height(); }
	});

	$(".setHeight").height(maxheight);

	/** ******************************
	 * Widget Panels - Collapse Panel
	 ****************************** **/
	(function($, window, document){
		var panelSelector = '[data-perform="panel-collapse"]';

		$(panelSelector).each(function() {
			var $this = $(this),
			parent = $this.closest('.panel'),
			wrapper = parent.find('.panel-wrapper'),
			collapseOpts = {toggle: false};

			if( ! wrapper.length) {
				wrapper =
				parent.children('.panel-heading').nextAll()
				.wrapAll('<div/>')
				.parent()
				.addClass('panel-wrapper');
				collapseOpts = {};
			}
			wrapper
			.collapse(collapseOpts)
			.on('hide.bs.collapse', function() {
				$this.children('i').removeClass('fa-minus').addClass('fa-plus');
			})
			.on('show.bs.collapse', function() {
				$this.children('i').removeClass('fa-plus').addClass('fa-minus');
			});
		});
		$(document).on('click', panelSelector, function (e) {
			e.preventDefault();
			var parent = $(this).closest('.panel');
			var wrapper = parent.find('.panel-wrapper');
			wrapper.collapse('toggle');
		});
	}(jQuery, window, document));

	/** ******************************
	 * Widget Panels - Remove Panel
	 ****************************** **/
	(function($, window, document){
		var panelSelector = '[data-perform="panel-dismiss"]';
		$(document).on('click', panelSelector, function (e) {
			e.preventDefault();
			var parent = $(this).closest('.panel');
			removeElement();

			function removeElement() {
				var col = parent.parent();
				parent.remove();
				col.filter(function() {
					var el = $(this);
					return (el.is('[class*="col-"]') && el.children('*').length === 0);
				}).remove();
			}
		});
	}(jQuery, window, document));

	/** ******************************
	 * Alert Message Boxes
	 ****************************** **/
    $('.alertMsg .alert-close').each(function() {
        $(this).click(function(e) {
            e.preventDefault();
            $(this).parent().fadeOut("slow", function() {
                $(this).addClass('hidden');
            });
        });
    });

	/** ******************************
	* Activate Tool-tips
	****************************** **/
    $("[data-toggle='tooltip']").tooltip();

	/** ******************************
	* Activate Popovers
	****************************** **/
	$("[data-toggle='popover']").popover();

});