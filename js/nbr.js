$( document ).ready( function () {
	
	var currentSlide = 0;
	var URL = window.location;

	$('.services-anchor a').click (function(event) {
		event.preventDefault();
		a1 = $( this ).attr('data-target');
		a2 = $('.' + a1).offset();
		newSlideTop = a2.top - 35;
		$( 'html, body' ).animate({
			scrollTop: newSlideTop + 'px'
		}, 700);
	});

	$('h5.next').click( function() {
		currentSlide++;

		if ( currentSlide >= 9 ) {
			currentSlide == 9;
			return false;
		}
		else {
			newSlideTop = $('.nbr0' + currentSlide).offset();
			slideTarget = newSlideTop.top - 35;
			$( 'html, body' ).animate({
				scrollTop: slideTarget + 'px'
			}, 700);
		}
	});

	$('h5.prev').click( function() {
		currentSlide--;

		if ( currentSlide <= 0 ) {
			currentSlide == 1;
			return false;
		}
		else {
			newSlideTop = $('.nbr0' + currentSlide).offset();
			slideTarget = newSlideTop.top - 35;
			$( 'html, body' ).animate({
				scrollTop: slideTarget + 'px'
			}, 700);
		}
	});

	$( window ).scroll(function() {

		if  ( $(document).scrollTop() < 728 ) {
			$('#services-nav').css({
				"position": "absolute",
				"top": "840px"
			});
		}

		else if ( $(document).scrollTop() >= 728 && $(document).scrollTop() < 7390 ) {
			$('#services-nav').css({
				"position": "fixed",
				"top": "112px"
			});
		}

		else if ( $(document).scrollTop() >= 7390 ) {
	
		}

	});

	var scrollToSlide = function( target ) {

		if ( 'target' <= 0 ) {
			return false;
			
		}
		else if ( 'target' > 0 || 'target' < 8) {
			newSlideTop = $('.nbr0' + 'target').offset();
			slideTarget = newSlideTop.top - 80;
			$( 'html, body' ).animate({
				scrollTop: slideTarget + 'px'
			}, 700);
		}
	}

	$('.nbr02').waypoint(function(up){
			currentSlide = 1;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -54px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('1');
			$('#services-nav h4').css('color', '#fff');
			$('#services-nav h4').html('EXPERT PERSONAL SERVICE, GLOBALLY<br />&nbsp;');
			$('#services-nav .prev').css({
					'display': 'none',
					'background-image': 'url("img/services-arrow-up.png")',
					'background-position': '0 -15px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav .next').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-down.png")',
					'background-position': '0 -31px',
					'background-repeat': 'no-repeat'
			});
	}, {offset: 150});
	$('.nbr02').waypoint(function(down){
			currentSlide = 2;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -108px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('2');
			$('#services-nav h4').css('color', '#000');
			$('#services-nav h4').html('PRE-<br />DISTRIBUTION ANALYSIS<br />&nbsp;');
			$('#services-nav .prev').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-up.png")',
					'background-position': '0 0',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav .next').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-down.png")',
					'background-position': '0 -31px',
					'background-repeat': 'no-repeat'
			});
	}, {offset: 150});
	$('.nbr03').waypoint(function(up){
			currentSlide = 2;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -108px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('2');
			$('#services-nav h4').css('color', '#000');
			$('#services-nav h4').html('PRE-DISTRIBUTION ANALYSIS<br />&nbsp;');
			$('#services-nav .prev').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-up.png")',
					'background-position': '0 0',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav .next').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-down.png")',
					'background-position': '0 -31px',
					'background-repeat': 'no-repeat'
			});
	}, {offset: 150});
	$('.nbr03').waypoint(function(down){
			currentSlide = 3;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -54px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('3');
			$('#services-nav h4').css('color', '#000');
			$('#services-nav h4').html('GLOBAL<br />PERFORMANCE<br />TRACKING<br />&nbsp;');
			$('#services-nav .prev').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-up.png")',
					'background-position': '0 -15px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav .next').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-down.png")',
					'background-position': '0 -15px',
					'background-repeat': 'no-repeat'
			});
	}, {offset: 150});
	$('.nbr04').waypoint(function(up){
			currentSlide = 3;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -54px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('3');
			$('#services-nav h4').css('color', '#000');
			$('#services-nav h4').html('GLOBAL<br />PERFORMANCE<br />TRACKING<br />&nbsp;');
			$('#services-nav .prev').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-up.png")',
					'background-position': '0 -15px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav .next').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-down.png")',
					'background-position': '0 -15px',
					'background-repeat': 'no-repeat'
			});
	}, {offset: 150});
	$('.nbr04').waypoint(function(down){
			currentSlide = 4;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -108px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('4');
			$('#services-nav h4').css('color', '#fff');
			$('#services-nav h4').html('<span style="color: #f93b2b;">THE KOBALT PORTAL</span><br />POWERFUL, TRANSPARENT REPORTING');
			$('#services-nav .prev').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-up.png")',
					'background-position': '0 0px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav .next').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-down.png")',
					'background-position': '0 -31px',
					'background-repeat': 'no-repeat'
			});
	}, {offset: 150});
	$('.nbr05').waypoint(function(up){
			currentSlide = 4;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -108px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('4');
			$('#services-nav h4').css('color', '#fff');
			$('#services-nav h4').html('<span style="color: #f93b2b;">THE KOBALT PORTAL</span><br />POWERFUL, TRANSPARENT REPORTING');
			$('#services-nav .prev').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-up.png")',
					'background-position': '0 0px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav .next').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-down.png")',
					'background-position': '0 -31px',
					'background-repeat': 'no-repeat'
			});
	}, {offset: 150});
	$('.nbr05').waypoint(function(down){
			currentSlide = 5;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -54px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('5');
			$('#services-nav h4').css('color', '#000');
			$('#services-nav h4').html('MONTHLY<br />PAYMENTS<br />&nbsp;<br />&nbsp;');
			$('#services-nav .prev').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-up.png")',
					'background-position': '0 -15px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav .next').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-down.png")',
					'background-position': '0 -15px',
					'background-repeat': 'no-repeat'
			});
	}, {offset: 150});
	$('.nbr06').waypoint(function(up){
			currentSlide = 5;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -54px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('5');
			$('#services-nav h4').css('color', '#000');
			$('#services-nav h4').html('MONTHLY<br />PAYMENTS<br />&nbsp;<br />&nbsp;');
			$('#services-nav .prev').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-up.png")',
					'background-position': '0 -15px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav .next').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-down.png")',
					'background-position': '0 -15px',
					'background-repeat': 'no-repeat'
			});
	}, {offset: 150});
	$('.nbr06').waypoint(function(down){
			currentSlide = 6;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -108px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('6');
			$('#services-nav h4').css('color', '#000');
			$('#services-nav h4').html('RETROACTIVE<br />PAYMENT<br />SEARCH<br />&nbsp;');
			$('#services-nav .prev').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-up.png")',
					'background-position': '0 0px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav .next').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-down.png")',
					'background-position': '0 -31px',
					'background-repeat': 'no-repeat'
			});
	}, {offset: 150});
	$('.nbr07').waypoint(function(up){
			currentSlide = 6;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -108px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('6');
			$('#services-nav h4').css('color', '#000');
			$('#services-nav h4').html('RETROACTIVE<br />PAYMENT<br />SEARCH<br />&nbsp;');
			$('#services-nav .prev').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-up.png")',
					'background-position': '0 0px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav .next').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-down.png")',
					'background-position': '0 -31px',
					'background-repeat': 'no-repeat'
			});
	}, {offset: 150});
	$('.nbr07').waypoint(function(down){
			currentSlide = 7;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -54px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('6');
			$('#services-nav h4').css('color', '#000');
			$('#services-nav h4').html('DEDICATED<br />CLIENT SERVICE<br />TEAM<br />&nbsp;');
			$('#services-nav .prev').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-up.png")',
					'background-position': '0 -15px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav .next').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-down.png")',
					'background-position': '0 -15px',
					'background-repeat': 'no-repeat'
			});
	}, {offset: 150});
	$('.nbr08').waypoint(function(up){
			currentSlide = 7;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -54px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('6');
			$('#services-nav h4').css('color', '#000');
			$('#services-nav h4').html('DEDICATED<br />CLIENT SERVICE<br />TEAM<br />&nbsp;');
			$('#services-nav .prev').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-up.png")',
					'background-position': '0 -15px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav .next').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-down.png")',
					'background-position': '0 -15px',
					'background-repeat': 'no-repeat'
			});
	}, {offset: 150});
	$('.nbr08').waypoint(function(down){
			currentSlide = 8;
			$('#services-nav h4').html('&nbsp;<br />&nbsp;<br />&nbsp;');
			$('#services-nav .prev').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-up.png")',
					'background-position': '0 0',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav .next').css({
					'display': 'none',
					'background-image': 'url("img/services-arrow-down.png")',
					'background-position': '0 -31px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -108px',
					'background-repeat': 'no-repeat'
			});
	}, {offset: 150});

	$('.waypoint').waypoint(function(direction) {
		if (direction === 'down') {
			newURL = '#' + $(this).attr("id");
			window.history.pushState({kobalt: 'Neighbouring Rights'}, 'Kobalt Neighbouring Rights', newURL);
		} else if ( direction === 'up' && currentSlide <= 1 ) {
			newURL = '#';
			window.history.pushState({kobalt: 'Neighbouring Rights'}, 'Kobalt Neighbouring Rights', newURL);
		} else {
			newURL = '#' + $(this).waypoint('prev').attr("id");
			window.history.pushState({kobalt: 'Neighbouring Rights'}, 'Kobalt Neighbouring Rights', newURL);
		}
	}, {offset:150});

});