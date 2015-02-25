var openMobileMenu = function () {
	$('#mobile-menu').addClass('isOpen');
	$('#main').css({
		"position": "fixed",
		"overflow": "hidden"
	});
	$('header').addClass('animLeftPlus250');
	$('#mobile-menu').addClass('animLeft0');
}

var closeMobileMenu = function () {
	$('#mobile-menu').removeClass('isOpen');
	$('#main').css({
		"position": "relative",
		"overflow": "auto"
	});
	$('header').removeClass('animLeftPlus250');
	$('#mobile-menu').removeClass('animLeft0');
}

var openSecondLevel = function(e) {
	var selectSub = '.subnav-' + e;
	$(selectSub).css('display', 'block');
	$('#first-level').addClass('animLeftPlus250');
	$('#second-level').addClass('animLeft0');
}

var closeSecondLevel = function() {
	$('#second-level').removeClass('animLeft0');
	$('#first-level').removeClass('animLeftPlus250');
	setTimeout(function() {
		$('#second-level ul').css({ display: 'none' });
	}, 250);

}

$( document ).ready( function(){

	closeMobileMenu();
	closeSecondLevel();

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

	$('header').mouseleave (function (){
		$('#subnav').css('display', 'none');
		$('#subnav ul').css('display', 'none');
	});

	$('#mobile-menu-icon').click( function() {
		if ( $('#mobile-menu').hasClass('isOpen') ) {
			closeMobileMenu();
			closeSecondLevel();
		} else {
			openMobileMenu();
		}
	});

	$('*').click(function(event) {
	    if($(event.target).closest('#mobile-menu').length == 0 && !$(event.target).is('#mobile-menu-icon')) {
	        if($('#mobile-menu').hasClass("isOpen")) {
	            closeMobileMenu();
	            closeSecondLevel();
	        }
	    }
	})

	$('#first-level li.subnav').click(function() {
		var currSub = $(this).attr('data-menu-item');
		openSecondLevel(currSub);
	});

	$('#second-level ul li.close').click(function() {
		closeSecondLevel();
	});

});