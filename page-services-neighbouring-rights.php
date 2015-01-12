<?php
include("includes/data.php");

function requireToVar($file){
    ob_start();
    require($file);
    return ob_get_clean();
}

?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo formatPageTitle('Neighbouring Rights') ?></title>

<!-- <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/44fce422-70e0-4a38-9fc9-11cf02f17686.css"/> -->
<link rel="stylesheet" type="text/css" href="css/input.css" />
<link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css" />
<link rel="stylesheet" type="text/css" href="css/cookiecuttr.css" />

<?php include('includes/js.php'); ?>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/nbr.js"></script>
<script type="text/javascript" src="js/video-js/video.js"></script>


</head>

<body>
<?php include('includes/header.php'); ?>
<div id="services-nav" class="nbr">
	<div class="wrapper">
		<h1>1</h1>
		<h4>EXPERT PERSONAL<br />SERVICE, GLOBALLY<br />&nbsp;</h4>
		<h5 class="prev" style="display: none;">prev</h5><h5 class="next">next</h5>
	</div>
</div>
<div class="container black" id="neighbouring-rights">
	<div class="wrapper services">
		<div class="module nine">
			<h1>Kobalt<br />Neighbouring<br />Rights</h1>
			<ol class="services-anchor waypoint" id="">
				<li><a data-target="nbr01" href="#expert-personal-service">Expert personal service, globally</a></li>
				<li><a data-target="nbr02" href="#pre-distribution-analysis">Pre-distribution analysis</a></li>
				<li><a data-target="nbr03" href="#global-performance-tracking">Global performance tracking</a></li>
				<li><a data-target="nbr04" href="#kobalt-portal">The Kobalt Portal</a></li>
				<li><a data-target="nbr05" href="#monthly-payments">Monthly payments</a></li>
				<li><a data-target="nbr06" href="#retroactive-payment-search">Retroactive payment search</a></li>
				<li><a data-target="nbr07" href="#dedicated-client-service-team">Dedicated client service team</a></li>
			</ol>
		</div>
	</div>
</div>
<div class="video-tout-bar service-container nbr white">
	<div class="wrapper">
		<h5 class="black fancybox brandVideo" href="#brandVideo"><span>Remember when music was simple?</span> Watch to learn more about the Kobalt solution. <span class="video-link">Play video</span></h5>
	</div>
</div>
<div class="container black nbr01 waypoint" id="expert-personal-service">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module five">
				<h3 class="red">We work directly with collection societies around the world.</h3>
				<p>Kobalt's team has expert local knowledge and long established relationships with collection societies, ensuring all rights are administered to the highest standard.</p>
				<p>Kobalt's direct interfaces with global societies reduce the number of links in the chain, increase collection value and reduce collection times.</p>
			</div>
		</div>
	</div>
</div>
<div class="service-container black nbr01b">
	<div class="wrapper services"></div>
</div>
<div class="container red nbr02 waypoint" id="pre-distribution-analysis">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module six">
				<h3 class="white">We ensure all of your data is cross-checked and accurate.</h3>
			</div>
			<div class="clear module five">
				<p class="black">Where the society offers access to their online database of recordings, our expert Neighbouring Rights team undertakes a detailed pre-distribution analysis, which increases data accuracy and maximizes revenue collection.</p>
			</div>
			<div class="clear portal-cat module three">
				<h4 class="white">Qualification Criteria</h4>
				<p class="black">A full review of qualification criteria provides a detailed understanding of expected earning territories</p>
				<h4 class="white">Complete Discography</h4>
				<p class="black">Ensuring a properly referenced completed discography improves society collections</p>
			</div>
			<div class="module portal-cat three">
				<h4 class="white">Gap analysis of society databases</h4>
				<p class="black">Undertaking a detailed review of society databases identifies data and income gaps</p>
				<h4 class="white">Song<br />fingerprinting</h4>
				<p class="black">Ensuring songs are fingerprinted is key to maximizing collections in certain territories</p>
			</div>
		</div>
	</div>
</div>
<div class="container white nbr03 waypoint" id="global-performance-tracking">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module six">
				<h3 class="red">We collect up to 20&ndash;30% more revenue for artists and writers.</h3>
			</div>
			<div class="module five clear">
				<p class="black">Kobalt's powerful tracking system compares collection against detailed in-house expectations to ensure all income is correctly accounted. Kobalt develops these detailed expectations from 3rd party performance data, Territory expectations from Kobalt's pre-distribution health check, as well as from the client's income data. Combining these three data sources allows us to monitor collection and ensures all income is received.</p>
			</div>
		</div>
	</div>
</div>
<div class="service-container black nbr-quote-01"></div>
<div class="container black nbr04 waypoint" id="kobalt-portal">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module six">
				<h3 class="red">Every piece of info collected by Kobalt's advanced technology platform feeds into<br />the Kobalt Portal.</h3>
			</div>
			<img class="fancybox portalVideo" href="#portalVideo" src="img/portal_video_thumb.png" style="margin: 50px 0 30px;" />
			<div class="module five clear">
				<p>With Kobalt, you have access to all your data, at any time. Our industry-defining Kobalt Portal provides full transparency with real-time updates, powerful reporting, and user-friendly analysis tools that make it easy to review and understand complex Neighbouring Rights data and income.</p>
			</div>
			<div class="clear portal-cat-nbr module">
				<h4 class="red">Dashboard</h4>
				<p>Check the dashboard to see what's happening with your account globally or explore the full range of services that Kobalt provides, from Registration to Reporting.</p>
			</div>
			<div class="portal-cat-nbr module">
				<h4 class="red">Reporting</h4>
				<p>Instant access to everything you want to know about the collection of your global income. Download your last statements or drill down into detailed, historic accounting on income streams and types.</p>
			</div>
			<div class="module portal-cat-nbr module">
				<h4 class="red">Catalogue</h4>
				<p>Full access to your recordings with a global summary of all registrations, key data and analysis of earnings on a territory or recording basis.</p>
			</div>
		</div>
	</div>
</div>
<div class="service-container black nbr04b">
	<div class="wrapper services">
		<div class="long-column portal-caption">
				<h5 class="white">Real-time, global feed of activity on your account</h5>
				<h5 class="white">Weekly account balance updates</h5>
				<h5 class="white">Full access to bespoke reporting on the micro detail of your income</h5>
				<h5 class="white">Monitor collections on a recording or right type basis</h5>
		</div>
	</div>
</div>
<div class="container white nbr05 waypoint" id="monthly-payments">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module six">
				<h3 class="red">Say that again?<br />Yes, monthly payments.</h3>
			</div>
			<div class="module two clear"><img src="img/payment-icon.png" alt="Monthly payments" /></div>
			<div class="module four">
				<p class="black">Kobalt pays Neighbouring Rights income monthly by direct deposit. Royalty statements are issued 31 days after the end of the month in which the income was received. The Kobalt Portal provides downloadable statements, which are accessible anytime.</p>
			</div>
		</div>
	</div>
</div>
<div class="container red nbr06 waypoint" id="retroactive-payment-search">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module six">
				<h3 class="white">We find and collect as much income as far back as the law allows.</h3>
			</div>
			<div class="module five clear">
				<p class="black">For clients with no previous Neighbouring Rights collection, there may be income already accumulated and ready to collect. In some countries, income from up to 10 years ago can still be claimed retroactively.</p>
				<p class="black">Kobalt's expert team ensures each client's repertoire claims are filed correctly with the societies in order to access any accumulated historic funds.</p>
				<p class="black">Payments secured in the form of "back claims" are clearly indicated in statements.</p>
			</div>
		</div>
	</div>
</div>
<div class="container white nbr07 waypoint" id="dedicated-client-service-team">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module six">
				<h3 class="red">We work for you.</h3>
			</div>
			<div class="module five clear">
				<p class="black">We provide each client with a dedicated client manager. We're there to help make the transition into the Kobalt team as smooth as possible, and answer any administrative questions, including registrations, royalty earnings and statements, rates and more.</p>
			</div>
		</div>
	</div>
</div>
<div class="container red nbr08 waypoint" id="">
	<div class="wrapper services">
		<div class="long-column">
			<div class="module eight">
				<div class="module six">
					<h3 class="white">The future of music<br />really is this simple.</h3>
				</div>
				<div class="module five clear">
					<p>With all the choices in music today, can't artists and writers have more choices, too?</p>
					<p>Can't the power of digital work both ways&mdash;technology serving the consumers AND the creators?</p>
					<p>It can.</p>
					<p>Kobalt.</p>
				</div>
				<div class="module two clear">
					<a class="button black" href="page-contact.php">Contact Us</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="brandVideo" class="video-js-box video-box" style="display: none;">

</div>
<div id="portalVideo" class="video-js-box video-box" style="display: none;">
</div>
<?php include('includes/footer.php'); ?>

<script type="text/javascript">
	$(' document ').ready( function() {
<?
$videos=requireToVar('includes/brand_video.php');
$videos = str_replace(PHP_EOL, "   ", $videos);
$videos = str_replace("'", "\'", $videos);
?>

		$( '.fancybox.brandVideo' ).fancybox({
	        afterShow   : function() {
	           $('#brandVideo').html('<?= $videos?>');
	        },
	        afterClose	: function() {
	        	$('#brandVideo').html('');
	        }
		});
<?
$videos=requireToVar('includes/portal_video.php');
$videos = str_replace(PHP_EOL, "   ", $videos);
$videos = str_replace("'", "\'", $videos);
?>
		$( '.fancybox.portalVideo' ).fancybox({
	        afterShow   : function() {
	           $('#portalVideo').html('<?= $videos?>');
	        },
	        afterClose	: function() {
	        	$('#portalVideo').html('');
	        }
		});
	});
</script>

</body>
</html>