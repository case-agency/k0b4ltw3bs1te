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

		if ( currentSlide >= 8 ) {
			currentSlide == 7;
			return false;
		}
		else {
			newSlideTop = $('.pub0' + currentSlide).offset();
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
		}
		else {
			newSlideTop = $('.pub0' + currentSlide).offset();
			slideTarget = newSlideTop.top - 35;
			$( 'html, body' ).animate({
				scrollTop: slideTarget + 'px'
			}, 700);
		}

	});

	$( window ).scroll(function() {

		// subNavColor( $(window).scrollTop() );

		if  ( $(document).scrollTop() < 705 ) {
			$('#services-nav').css({
				"position": "absolute",
				"top": "816px"
			});
		}

		else if ( $(document).scrollTop() >= 705 && $(document).scrollTop() < 8955 ) {
			$('#services-nav').css({
				"position": "fixed",
				"top": "112px"
			});
		}

 
		else if ( $(document).scrollTop() >= 8955 ) {
			/* $('#services-nav').css({
				"position": "absolute",
				"top": "9067px",
				"z-index": "5000"
			}); */
		}

	});

	var scrollToSlide = function( target ) {

		if ( 'target' <= 0 ) {
			return false;
			
		}
		else if ( 'target' > 0 || 'target' < 8) {
			newSlideTop = $('.pub0' + 'target').offset();
			slideTarget = newSlideTop.top - 80;
			$( 'html, body' ).animate({
				scrollTop: slideTarget + 'px'
			}, 700);
		}
	}

	$('.pub02').waypoint(function(up){
			currentSlide = 1;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -54px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('1');
			$('#services-nav h4').css('color', '#000');
			$('#services-nav h4').html('COLLECTING<br />20-30% MORE MONEY, FASTER<br />&nbsp;');
			$('#services-nav .prev').css({
					'display': 'none',
					'background-image': 'url("img/services-arrow-up.png")',
					'background-position': '0 0',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav .next').css({
					'display': 'inline-block',
					'background-image': 'url("img/services-arrow-down.png")',
					'background-position': '0 -15px',
					'background-repeat': 'no-repeat'
			});
	}, {offset: 150});

	$('.pub02').waypoint(function(down){
			currentSlide = 2;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -108px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('2');
			$('#services-nav h4').css('color', '#fff');
			$('#services-nav h4').html('<span style="color: #f93b2b;">THE KOBALT PORTAL</span><br />POWERFUL, TRANSPARENT REPORTING');
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

	$('.pub03').waypoint(function(up){
			currentSlide = 2;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -108px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('2');
			$('#services-nav h4').css('color', '#fff');
			$('#services-nav h4').html('<span style="color: #f93b2b;">THE KOBALT PORTAL</span><br />POWERFUL, TRANSPARENT REPORTING');
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

	$('.pub03').waypoint(function(down){
			currentSlide = 3;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 0',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('3');
			$('#services-nav h4').css('color', '#fff');
			$('#services-nav h4').html('FLEXIBLE<br />CONTRACTS<br />&nbsp;');
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

	$('.pub04').waypoint(function(up){
			currentSlide = 3;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 0',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('3');
			$('#services-nav h4').css('color', '#fff');
			$('#services-nav h4').html('FLEXIBLE<br />CONTRACTS<br />&nbsp;');
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
	$('.pub04').waypoint(function(down){
			currentSlide = 4;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -54px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('4');
			$('#services-nav h4').css('color', '#000');
			$('#services-nav h4').html('SYNCH &amp;<br />BRAND DEALS<br />&nbsp');
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
	$('.pub05').waypoint(function(up){
			currentSlide = 4;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -54px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('4');
			$('#services-nav h4').css('color', '#000');
			$('#services-nav h4').html('SYNCH &amp;<br />BRAND DEALS<br />&nbsp');
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

	$('.pub05').waypoint(function(down){
			currentSlide = 5;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -108px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('5');
			$('#services-nav h4').css('color', '#f93b2b');
			$('#services-nav h4').html('CREATIVE<br />SERVICES<br />&nbsp;');
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

	$('.pub06').waypoint(function(up){
			currentSlide = 5;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -108px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('5');
			$('#services-nav h4').css('color', '#f93b2b');
			$('#services-nav h4').html('CREATIVE<br />SERVICES<br />&nbsp;');
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

	$('.pub06').waypoint(function(down){
			currentSlide = 6;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -54px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('6');
			$('#services-nav h4').css('color', '#000');
			$('#services-nav h4').html('YOUTUBE<br />MAXIMIZATION<br />&nbsp;');
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

	$('.pub07').waypoint(function(up){
			currentSlide = 6;
			$('#services-nav').css('display', 'block');
			$('#services-nav h1').css({
					'display': 'inline-block',
					'background-image': 'url("img/services_nav_k.png")',
					'background-position': '0 -54px',
					'background-repeat': 'no-repeat'
			});
			$('#services-nav h1').text('6');
			$('#services-nav h4').css('color', '#000');
			$('#services-nav h4').html('YOUTUBE<br />MAXIMIZATION<br />&nbsp;');
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

	$('.pub07').waypoint(function(down){
			currentSlide = 7;
			$('#services-nav h4').html('&nbsp;<br />&nbsp;<br />&nbsp;');
			$('#services-nav .prev').css({
					'display': 'display-inline',
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
			window.history.pushState({kobalt: 'Music Publishing'}, 'Kobalt Music Publishing', newURL);
		} else if ( direction === 'up' && currentSlide <= 1 ) {
			newURL = '#';
			window.history.pushState({kobalt: 'Music Publishing'}, 'Kobalt Music Publishing', newURL);
		} else {
			newURL = '#' + $(this).waypoint('prev').attr("id");
			window.history.pushState({kobalt: 'Music Publishing'}, 'Kobalt Music Publishing', newURL);
		}
	}, {offset:150});
});