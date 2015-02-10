<?php
include("includes/data.php");

// $newsList = splitRecentReleases();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo formatPageTitle('News') ?></title>
  <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/44fce422-70e0-4a38-9fc9-11cf02f17686.css"/>
  <link rel="stylesheet" type="text/css" href="css/input.css" />
  <link rel="stylesheet" type="text/css" href="css/phase-two.css" />
  <link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css" />
  <?php include('includes/js.php'); ?>
	<?php include('includes/analyticstracking.php'); ?>
</head>
<body>
<?php
include('includes/header.php'); ?>

<!-- start main -->
<section class="main" id="key-releases-page">

  <div class="wrapper">

    <h1><span>NEWS<br /></span>KEY<br />RELEASES</h1>

  <div id="key-releases-wrapper">
        <?php echo loadTemplateFile(APP_DIR . '/includes/releases-content.php', array(
            'future'=>true
        )) ?>
  </div>
</section>

<?php include("includes/footer.php"); ?>
</body>
</html>
