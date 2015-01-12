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
<title>Music Publishing | Kobalt</title>

<!-- <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/44fce422-70e0-4a38-9fc9-11cf02f17686.css"/> -->
<link rel="stylesheet" type="text/css" href="css/input.css" />
<link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css" />
<?php include('includes/js.php'); ?>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/pub.js"></script>
<script type="text/javascript" src="js/video-js/video.js"></script>


</head>

<body>
<?php include('includes/header.php'); ?>
<div id="services-nav" class="pub">
	<div class="wrapper">
		<h1>1</h1>
		<h4>Collecting<br />20&ndash;30%more money, faster</h4>
		<h5 class="prev" style="display: none;">prev</h5><h5 class="next">next</h5>
	</div>
</div>
<div class="container black" id="music-publishing">
	<div class="wrapper services">
		<div class="module seven">
			<h1>Kobalt<br />Music<br />Publishing</h1>
			<ol class="services-anchor waypoint" id="">
				<li><a data-target="pub01" href="#more-money">Collecting 20&ndash;30% more money, faster</a></li>
				<li><a data-target="pub02" href="#kobalt-portal">Powerful, transparent reporting</a></li>
				<li><a data-target="pub03" href="#flexible-contracts">Flexible contracts</a></li>
				<li><a data-target="pub04" href="#synch-and-brand-deals">Synch &amp; Brand deals</a></li>
				<li><a data-target="pub05" href="#creative-services">Creative services</a></li>
				<li><a data-target="pub06" href="#youtube-maximization">Youtube maximization</a></li>
			</ol>
		</div>
	</div>
</div>
<div class="video-tout-bar service-container black">
	<div class="wrapper">
		<h5 class="white fancybox brandVideo" href="#brandVideo"><span>Remember when music was simple?</span> Watch to learn more about the Kobalt solution. <span class="video-link">Play video</span></h5>
	</div>
</div>
<div class="container white pub01 waypoint" id="more-money">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module five">
				<h3 class="red">Fewer fees, less time, more money.</h3>
				<p>Each step in the collection process costs more time and more money&mdash;leaving more room for error and revenue unaccounted for.</p>
				<p>Kobalt's pioneering collection technology platform bypasses the middleman and collects directly from societies, iTunes, Spotify, YouTube and most major distributors resulting in 20&ndash;30% higher revenues for our artists and writers.</p>
			</div>
		</div>
	</div>
</div>
<div class="service-container white pub01b">
	<div class="wrapper services">
		<div class="long-column">
			<div class="module graph-label">
				<p><strong>A direct comparison of two singles with two writers each&mdash;one with Kobalt and the other with a major publisher&mdash;illustrates both the speed and significant increase in revenue collected by Kobalt.</strong></p>
			</div>
		</div>
	</div>
</div>
<div class="container black pub02 waypoint" id="kobalt-portal">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module six">
				<h3 class="red">Every piece of info collected by Kobalt's advanced technology platform feeds into<br />the Kobalt Portal.</h3>
			</div>
			<img class="fancybox portalVideo" href="#portalVideo" src="img/portal_video_thumb.png" style="margin: 50px 0 30px;" />
			<div class="module five clear">
				<p>With Kobalt, you have access to all your data, at any time. Our industry-defining Kobalt Portal provides full transparency with real-time updates, powerful reporting, and user-friendly analysis tools that make it easy to review and understand complex publishing income, from Registration to Synch.</p>
			</div>
			<div class="clear portal-cat module three">
				<h4 class="red">Dashboard</h4>
				<p>Check the dashboard to see what's happening with your account globally or explore the full range of services that Kobalt provides, from Registration to Reporting to Synch.</p>
				<h4 class="red">Reporting</h4>
				<p>Instant access to everything you want to know about the collection of your global income. Download your last statements or drill down into detailed, historic accounting on income streams and types.</p>
			</div>
			<div class="module portal-cat three">
				<h4 class="red">Catalogue</h4>
				<p>Full access to your compositions with a global summary of all work registrations, key data, and analysis of earnings on a work, product, or recording basis.</p>
				<h4 class="red">Creative</h4>
				<p>Complete transparency in a traditionally opaque area. Quickly see and understand your global Synch revenue pipeline through every stage of the licensing process.</p>
			</div>
		</div>
	</div>
</div>
<div class="service-container black pub02b">
	<div class="wrapper services">
		<div class="long-column">
				<h5 class="white">Online advances at your convenience</h5>
				<h5 class="white">Real-time, global feed of activity on your account</h5>
				<h5 class="white">Weekly account balance updates</h5>
				<h5 class="white">Full access to bespoke reporting on the micro detail of your income</h5>
				<h5 class="white">Watch, monitor, and see real earnings from Youtube UGC videos</h5>
				<h5 class="white">Monitor collections on a release-basis, comparing received units with expected units</h5>
		</div>
	</div>
</div>
<div class="container red pub03 waypoint" id="flexible-contracts">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module eight">
				<h3 class="white">Artists and writers have more<br />control over their work&mdash;and their future.</h3>
			</div>
			<div class="module five">
				<p class="black">With no commitment to deliver a minimum number<br />of songs and no lock-in, clients are free to make the artistic choices that are right for them.</p>
			</div>
			<img src="img/pub_contract_ph.png" style="margin-top: 50px;" />
		</div>
	</div>
</div>
<div class="container white pub04 waypoint" id="synch-and-brand-deals">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module six">
				<h3 class="red">At Kobalt, we pride ourselves in our quick turnaround and personalized, hands-on approach to Synch.</h3>
			</div>
			<div class="clear module five">
				<p>We work releases early to find mutual placement opportunities and have a strong track record procuring music across advertising, TV shows, films and trailers, and games.</p>
				<p>Our proactive, experienced team of 45 Synch and brand partnership experts across 25 countries matches artists and writers with the right partners, worldwide.</p>
				<p><a href="page-synch.php">Learn more about our Synch services</a></p>
			</div>
		</div>
	</div>
</div>
<div class="container black pub05 waypoint" id="creative-services">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module seven">
				<h3 class="white">Our priority is to create both songwriting and networking opportunities for our writers around<br />the world.</h3>
			</div>
		</div>
	</div>
</div>
<div class="service-container black pub-album-grid"></div>
<div class="service-container black pub05b">
	<div class="wrapper services">
		<div class="long-column">
			<div class="module three">
				<h5 class="red">KOBALT'S CREATIVE<br />TEAM HAS PROCURED COLLABORATIONS WITH SOME OF THE WORLD'S GREATEST TALENT.</h5>
			</div>
			<div class="module five">
				<p>Kobalt's Creative Services team works closely with a select group of songwriters to help them develop their career. We provide a dedicated A&amp;R/Creative point person who aggressively pitches their songs for other artists to cover, secures collaborations with other songwriters, and presents them with leads and briefs for upcoming projects. Our Creative team also supports our songwriters in artist development and makes introductions to key A&amp;R execs, managers, producers, and more.</p>
			</div>
		</div>
	</div>
</div>
<div class="container white pub06 waypoint" id="youtube-maximization">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module six">
				<h3 class="red">Kobalt is a YouTube certified partner, monetizing over one billion YouTube streams per month.</h3>
			</div>
			<div class="module five clear">
				<p>A hit song today influences up to 50,000 user-generated YouTube videos, many of which remain undetected and unpaid.</p>
				<p>Our unique integration with YouTube solves that problem, significantly increasing the speed and accuracy in which we find and claim missing content for our artists and writers.</p>
			</div>
			<div class="module three">
				<img src="img/pub-youtube.png" />
			</div>
		</div>
	</div>
</div>
<div class="service-container black pub-quote"></div>
<div class="container white pub06b">
	<div class="wrapper services">
		<div class="long-column">
			<div class="youtube-max module three">
				<h4 class="red">Higher Quality Metadata</h4>
				<p>Kobalt provides YouTube with an additional range of high-quality metadata for each song that enables faster, more efficient content matching and reporting.</p>
				<h4 class="red">Daily Content Updates</h4>
				<p>We deliver automated feeds of new, claimed, and blocked YouTube content daily to ensure the fastest turnaround possible.</p>
				<h4 class="red">Proklaim&#153;</h4>
				<p>In addition to YouTube's powerful Content ID platform, we use our own advanced detection technology PROKLAIM&#153; to monetize the millions of unmatched, user-generated videos within YouTube's ecosystem.</p>
			</div>
			<div class="youtube-max module three">
				<h4 class="red">Transparent Reporting</h4>
				<p>Our leading Kobalt Portal provides transparent, user-friendly live reporting that enables artists to drill down on the full range of their YouTube activity and accounting.</p>
				<h4 class="red">Active Marketing Strategy</h4>
				<p>In order to ensure that each piece of content is maximized, our digital marketing experts provide strategic channel and video optimization planning, premium monetization via advertising and sponsorship sales, and pre-clearance content pitching.</p>
			</div>
		</div>
	</div>
</div>
<div class="container red pub07 waypoint" id="">
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
					<a class="button black" href="media/pdf/KobaltMusic_Music-Publishing.pdf">Download PDF</a>
				</div>
				<div class="module two">
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