<?php
	include("includes/data.php");

	$youtubefaqlist = youtubeFAQ();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo formatPageTitle('Contact') ?></title>
  <?php include('includes/js.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/input.css" />
  <link rel="stylesheet" type="text/css" href="css/phase-two.css" />
<?php include("includes/js.php"); ?>

</head>
<body>
<?php include("includes/header.php"); ?>
<section class="main" id="contact">

<div class="wrapper youtubeFAQ">

<h1>YOUTUBE<br />LICENSING<br />FAQ</h1>

<p><strong>
We take all reasonable care to ensure that the materials and information on this web site are accurate and complete, however the information contained on this website is for general information purposes only, it is not intended to constitute legal or other professional advice, and should not be relied on or treated as a substitute for specific advice relevant to particular circumstances.  You should always consult a suitably qualified lawyer on any specific legal matter.
</strong></p>

<?php
	echo loadTemplateFile(APP_DIR. '/includes/youtubeLicenseFaq.php', array('faq' => $youtubefaqlist['faq']));
?>

</div>
</section>
<?php include("includes/footer.php"); ?>
</body>
</html>
