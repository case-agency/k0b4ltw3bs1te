<?php
include("includes/data.php");


?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo formatPageTitle('Services') ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include('includes/css.php'); ?>
<link rel="stylesheet" type="text/css" href="css/cookiecuttr.css" />
<link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css" />
<?php include('includes/js.php'); ?>


</head>

<body>
<?php include('includes/header.php'); ?>
<div class="services-container white services-landing-quote desktop"></div>
<div class="container white">
	<div class="wrapper">
		<h1 class="mobile services">SERVICES</h1>
		<div class="module three">
			<h3 class="homepage">Kobalt<br />Music Publishing</h3>
			<p>Kobalt Music Publishing is the largest independent music publisher in the world. Using our proprietary technology platform, we provide unparalleled transparency with seamless online copyright administration, royalty tracking, and digital collections.</p>
			<a class="button red mobile" href="page-services-music-publishing.php">Learn More</a>
			<a class="button black mobile" href="media/pdf/KobaltMusic_Music-Publishing.pdf">Download PDF</a>			
		</div>
		<div class="module one clear-col"></div>
		<div class="module three">
			<h3 class="homepage">Kobalt<br />Label Services</h3>
			<p>Kobalt Label Services (KLS) was established in 2012 for independent artists as an alternative to the traditional Major Label regime. We provide the team and expertise, the global network and infrastructure, and the funding that enables artists to achieve the full potential of their releases around the globe.</p>
			<a class="button red mobile" href="page-services-label-services.php">Learn More</a>
			<a class="button black mobile" href="media/pdf/KobaltMusic_Label-Services.pdf">Download PDF</a>
		</div>
		<div class="module one clear-col"></div>
		<div class="module three">
			<h3 class="homepage">Kobalt<br/>Neighbouring Rights</h3>
			<p>Kobalt's unique, modern, and transparent approach to Neighbouring Rights is geared to simplify a very complex process, maximize earnings, and speed up payments. Our direct relationships with key global collection societies reduces repetition, minimizes potential errors, and provides a substantial uplift in revenue.</p>
			<a class="button red mobile" href="page-services-neighbouring-rights.php">Learn More</a>
			<a class="button black coming-soon mobile" href="#coming-soon">Download PDF</a>
		</div>
		<div class="full-width module desktop">
			<div class="module three">
				<a class="button red" href="page-services-music-publishing.php">Learn More</a>
				<a class="button black" href="media/pdf/KobaltMusic_Music-Publishing.pdf">Download PDF</a>
			</div>
			<div class="module one clear-col"></div>
			<div class="module three">
				<a class="button red" href="page-services-label-services.php">Learn More</a>
				<a class="button black" href="media/pdf/KobaltMusic_Label-Services.pdf">Download PDF</a>
			</div>
			<div class="module one clear-col"></div>
			<div class="module three">
				<a class="button red" href="page-services-neighbouring-rights.php">Learn More</a>
				<a class="button black coming-soon" href="#coming-soon">Download PDF</a>
			</div>
		</div>
	</div>
</div>

<div id="coming-soon" style="display: none;">

	<h3>Neighbouring Rights PDF Coming Soon</h3>

</div>

<script type="text/javascript">

$(document).ready (function() {
	$('.coming-soon').fancybox();
});

</script>

<?php include('includes/footer.php'); ?>
</body>
</html>