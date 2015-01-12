$( document ).ready( function(){

	$( window ).scroll( function(){

		if ( $(document).scrollTop() >= 81 ) {
			$('#subnav').css('display', 'none');
			$('#reg-nav').css('display', 'none');
			$('#sticky-nav').css('display', 'block');
			// $('#subnav')css('top', '51px');
		}
		else {
			$('#subnav').css('display', 'none');
			$('#reg-nav').css('display', 'block');
			$('#sticky-nav').css('display', 'none');
			// $('#subnav').css('top', '81px');
		}
		
	});

	$('#main-nav li a').hover( function(){
		if ( $(this).hasClass('subnav')) {
			var menuItem = $(this).attr('data-menu-item');
			// show the subnav
				$('#subnav ul').css('display', 'none');
				$('#subnav').css({
					"top": "81px",
					"display": "block"
				});
				$('#subnav .subnav-' + menuItem ).css('display', 'block');
		} else {
			$('#subnav').css('display', 'none');
			$('#subnav ul').css('display', 'none');
		}
	});

	$('#sticky-nav-ul li a').hover( function() {
		if ( $(this).hasClass('subnav')) {
			var menuItem = $(this).attr('data-menu-item');
			// show the subnav
			$('#subnav ul').css('display', 'none');
			$('#subnav').css({
				"top": "44px",
				"display": "block"
			});
			$('#subnav .subnav-' + menuItem ).css('display', 'block');
		} else {
			$('#subnav').css('display', 'none');
			$('#subnav ul').css('display', 'none');
		}
	});

	$('#header').mouseleave (function (){
		$('#subnav').css('display', 'none');
		$('#subnav ul').css('display', 'none');
	});

});