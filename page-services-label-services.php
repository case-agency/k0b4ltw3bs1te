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
<title><?php echo formatPageTitle('Label Services') ?></title>

<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/44fce422-70e0-4a38-9fc9-11cf02f17686.css"/>
<link rel="stylesheet" type="text/css" href="css/input.css" />
<link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css" />
<link rel="stylesheet" type="text/css" href="css/cookiecuttr.css" />

<?php include('includes/js.php'); ?>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/lab.js"></script>
<script type="text/javascript" src="js/video-js/video.js"></script>


</head>

<body>
<?php include('includes/header.php'); ?>
<div id="services-nav" class="lab">
	<div class="wrapper">
		<h1>1</h1>
		<h4>Flexible<br />Contracts</h4>
		<h5 class="prev" style="display: none;">prev</h5><h5 class="next">next</h5>
	</div>
</div>
<div class="container black" id="label-services">
	<div class="wrapper services">
		<div class="module seven">
			<h1>Kobalt<br />Label<br />Services</h1>
			<ol class="services-anchor waypoint" id="">
				<li><a data-target="lab01" href="#flexible-contracts">Flexible contracts</a></li>
				<li><a data-target="lab02" href="#kobalt-portal">Powerful, transparent reporting</a></li>
				<li><a data-target="lab03" href="#global-administration-distribution-and-manufacturing">Global administration, Distribution, &amp; manufacturing</a></li>
				<li><a data-target="lab04" href="#worldwide-marketing">Worldwide marketing</a></li>
				<li><a data-target="lab05" href="#synch-and-brand-deals">Proactive Synch &amp; brand deals</a></li>
				<li><a data-target="lab06" href="#youtube-maximization">YouTube maximization</a></li>
			</ol>
		</div>
	</div>
</div>
<div class="video-tout-bar service-container black">
	<div class="wrapper">
		<h5 class="white fancybox brandVideo" href="#brandVideo"><span>Remember when music was simple?</span> Watch to learn more about the Kobalt solution. <span class="video-link">Play video</span></h5>
	</div>
</div>
<div class="container red lab01 waypoint" id="flexible-contracts">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module six">
				<h3 class="white">KOBALT'S "NEW MODEL" CONTRACTS ENSURE THAT ARTISTS RETAIN OWNERSHIP OF THEIR MASTER RIGHTS AND THE MAJORITY OF REVENUE AFTER RECOUPMENT.</h3>
			</div>
			<div class="module clear five">
				<p>Flexible contracts mean artists and writers have more control over their work&mdash;and their future. With no commitment to deliver a minimum number of recordings and no lock-in, clients are free to make the artistic choices that are right for them.</p>
			</div>
			<img src="img/lab_contract_ph.png" style="margin-top: 50px;" />
		</div>
	</div>
</div>
<div class="container black lab02 waypoint" id="kobalt-portal">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module six">
				<h3 class="red">Every piece of info collected by Kobalt's advanced technology platform feeds into<br />the Kobalt Portal.</h3>
			</div>
			<img class="fancybox portalVideo" href="#portalVideo" src="img/portal_video_thumb.png" style="margin: 50px 0 30px;" />
			<div class="module five clear">
				<p>With Kobalt, you have access to all your data, at any time. Our industry-defining Kobalt Portal provides full transparency with real-time updates, powerful reporting, and user-friendly analysis tools that make it easy to review and understand all your income streams, from physical sales to downloads, and streaming to Synch.</p>
			</div>
		</div>
	</div>
</div>
<div class="service-container black lab02b">
	<div class="wrapper services">
		<div class="long-column">
			<div class="module left-img">
				<img src="img/lab-portal-img.png" alt="Kobalt Portal" />
			</div>
			<div class="module portal-cat three">
				<h4 class="red">Dashboard</h4>
				<p>Check the dashboard to see what's happening with your account globally or explore the full range of services that Kobalt provides, from Catalogue to Reporting to Synch.</p>
				<h4 class="red">Analytics</h4>
				<p>See live sales data on all your releases in every territory. View a snapshot overview of sales performance and then drill much deeper into the data for more detailed analysis. You can set timeframes, choose territories, and compare sales, streams, and views on iTunes, Spotify, and YouTube.</p>
				<h4 class="red">Catalogue</h4>
				<p>Full access to all catalogue information about your recordings, along with a global summary of distribution status and analysis of earnings on a product or recording basis.</p>
				<h4 class="red">Licensing</h4>
				<p>Complete transparency in a traditionally opaque area. Quickly see and understand your global Synch pipeline by stage in the licensing process.</p>
			</div>
		</div>
	</div>
</div>
<div class="container white lab03 waypoint" id="global-administration-distribution-and-manufacturing">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module six">
				<h3 class="red">We enable artists to achieve the full potential of their releases around<br />the world. </h3>
			</div>
			<div class="module five clear">
				<h4 class="red">Global Administration</h4>
				<p class="black">KLS fulfills all mechanical licensing obligations for both digital and physical sales worldwide. This includes the quarterly processing and payment of all mechanical royalties to collection societies and/or direct to publishers as required, as well as cash flow funding of mechanical payments on behalf of the artist.</p>
				<p>We also collect the Label Share of Neighbouring Rights income around the world, as well as manage all metadata and label copy, chart registrations, issuing of ISRCs and UPCs, etc.</p>
				<p>And we're there to answer any administrative question, including royalty earnings and statements, rates, YouTube collection, digital providers, and more. We also offer personal tutorials on using the Kobalt Portal.</p>

				<h4 class="red">Digital Distribution</h4>
				<p class="black">Kobalt owns one of the world's leading digital distribution platforms, AWAL, delivering music seamlessly worldwide for 10 years to all key online/mobile stores and service providers.</p>
				<p>Certified "Live Direct" by iTunes, AWAL is one of iTunes' preferred priority partners.</p>
				<p>AWAL excels in priority processing and delivery to meet every campaign's dynamic needs and deadlines.</p>
				<p>The Kobalt Portal provides live product status and sales data.</p>
				<p>Artists retain ownership of all digital assets and metadata, stored and managed securely by Kobalt.</p>

				<h4 class="red">Physical Distribution &amp; Manufacturing</h4>
				<p class="black">Kobalt has a robust network of leading physical distribution and licensing partners around the world. Each of these relationships is non-exclusive, enabling us to secure the right partners for each project. Licensees are approved by artists on a case-by-case basis.</p>
				<p>We use various leading manufacturers around the world to produce both deluxe and standard packaging, allowing for competitive pricing and deadline flexibility.</p>
			</div>
			<div class="module one clear-col"></div>

			<div class="module two partners">
				<h4 class="red">Kobalt Physical Distribution Partners</h4>
				<h6>USA</h6>
				<h4 class="red">Alliance/<br />Super D</h4>

				<h6>Germany/<br />Switzerland/<br />Austria</h6>
				<h4 class="red">Rough Trade/<br />Good to Go</h4>

				<h6>Japan</h6>
				<h4 class="red">Sony Music</h4>

				<h6>Scandinavia</h6>
				<h4 class="red">Playground</h4>

				<h6>Greece</h6>
				<h4 class="red">Feel Good</h4>

				<h6>South Africa</h6>
				<h4 class="red">Just Music</h4>

				<h6>Canada</h6>
				<h4 class="red">Sony Music</h4>

				<h6>France</h6>
				<h4 class="red">Pias</h4>

				<h6>Latin America</h6>
				<h4 class="red">Sony Music</h4>

				<h6>Belgium/The Netherlands</h6>
				<h4 class="red">V2</h4>

				<h6>Russia/CIS</h6>
				<h4 class="red">Soyuz Music</h4>

				<h6>Israel</h6>
				<h4 class="red">LGM</h4>

				<h6>New Zealand</h6>
				<h4 class="red">Rhythm Method</h4>

				<h6>UK/EIRE</h6>
				<h4 class="red">Proper</h4>

				<h6>Australia</h6>
				<h4 class="red">Inertia</h4>

				<h6>Italy</h6>
				<h4 class="red">Self/Spin-Go</h4>

				<h6>Spain/Portugal</h6>
				<h4 class="red">Popstock Everlasting</h4>

				<h6>Asia</h6>
				<h4 class="red">Love DA</h4>

				<h6>Poland/Czech Republic</h6>
				<h4 class="red">Mystic Productions</h4>
			</div>
		</div>
	</div>
</div>
<div class="service-container black lab-quote-01"></div>
<div class="container red lab04 waypoint" id="worldwide-marketing">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module six">
				<h3 class="white">We are committed to helping artists do what they do best.</h3>
			</div>
			<div class="clear module five">
				<h4 class="white">Marketing &amp; Project Management</h4>
				<p class="black">KLS delivers creative, customized marketing plans in each key territory around the world to ensure that every release has a powerful, bespoke campaign strategy.</p>
				<p class="black">Every release has a dedicated lead project manager who has extensive experience with major releases. The international coordination of each release is managed by our international teams in London, New York, and Los Angeles.</p>
				<p class="black">We plan together with the artist on formats, packaging, pricing, retail marketing strategy, singles, release dates, creative assets, D2C strategy, budgets, and other aspects of the campaign.</p>
				<p class="black">We recommend and manage all external PR, radio/TV promotions, club promotions, and other specialist agencies for the project in each territory.</p>
				<h4 class="white">Retail &amp; Sales Marketing</h4>
				<p class="black">Our retail marketing teams deliver strategic global sales campaigns for both physical and digital retail partners worldwide.</p>
				<p class="black">The digital retail team works closely with the editorial departments at every digital retailer to ensure priority coverage and promotional placement.</p>
				<p class="black">Our project managers and international marketing teams work closely with our physical distribution partners to deliver retail sales campaigns with key accounts in all the major territories.</p>
				<p class="black">In the US, Kobalt has a dedicated in-house sales team working across both physical and digital retail accounts.</p>
				<p class="black">We also create specific D2C projects and campaigns with the leading specialist platforms, including Sandbag, PledgeMusic, MusicGlue, and Generator.</p>
			</div>
		</div>
	</div>
</div>
<div class="service-container red lab-quote-02"></div>
<div class="service-container red lab04b">
	<div class="wrapper services">
		<div class="long-column">
			<div class="module three"><img src="img/lab04b-img.png" alt="Social Media Services" /></div>
			<div class="module five">
				<h4 class="white">Digital Marketing</h4>
				<p class="black"><strong>Social Media Priming &amp; Planning</strong><br />Our team of digital marketing experts can help guide you to get the most out of your social media profiles from online campaigns to SEO and website optimization. We provide best practices to ensure that every social media engagement is a strategic element of the campaign.</p>
				<p class="black"><strong>Online/Mobile Partnerships &amp; Apps</strong><br />Kobalt creates promotional opportunities with online and mobile partners to bring added impressions, activity, and unique excitement to projects through contests, playlists, streaming premieres, app development and integration, interviews, phoners, and more.</p>
				<p class="black"><strong>Online &amp; Mobile Advertising</strong><br />We execute advertising across all digital platforms, including the design and creation of all online marketing assets, including copy, pre-roll and audio spots, and banner creative.</p>
			</div>
		</div>
	</div>
</div>
<div class="container black lab05 waypoint" id="synch-and-brand-deals">
	<div class="wrapper services first">
		<div class="long-column">
			<div class="module six">
				<h3 class="red">At Kobalt, we pride ourselves in our quick turnaround and personalized, hands-on approach to Synch.</h3>
			</div>
			<div class="clear module five">
				<p class="white">We work releases early to find mutual placement opportunities and have a strong track record procuring music across advertising, TV shows, films and trailers, and games.</p>
				<p class="white">Our proactive, experienced team of 45 Synch and brand partnership experts across 25 countries matches artists and writers with the right partners, worldwide.</p>
				<p><a href="page-synch.php">Learn more about our Synch services</a></p>
			</div>
		</div>
	</div>
</div>
<div class="service-container lab-album-grid"></div>
<div class="container white lab06 waypoint" id="youtube-maximization">
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
<div class="service-container black lab-quote-03"></div>
<div class="container white lab06b">
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
<div class="container red lab07 waypoint" id="">
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
					<a class="button black" href="media/pdf/KobaltMusic_Label-Services.pdf">Download PDF</a>
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