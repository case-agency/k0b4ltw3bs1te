<?php
include("includes/data.php");


$roster = getGet('roster');
$currentLetter = getGet('artist_letter', 'all');

$isGoogleCrawling = isGoogleCrawling();


$googleCrawlerSelectedLetter = getGoogleCrawlingParameter('artist_letter');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo formatPageTitle('Roster') ?></title>
  <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/44fce422-70e0-4a38-9fc9-11cf02f17686.css" />
  <link rel="stylesheet" type="text/css" href="css/input.css" />
  <link rel="stylesheet" type="text/css" href="css/phase-two.css" />
  <link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css" />
  <?php include('includes/js.php'); ?>
  <script type="text/javascript" src="js/roster-featured.js"></script>

</head>
<?php include("includes/js.php"); ?>
<body>
<?php
include('includes/header.php'); ?>

<!-- start main -->
<section class="main" id="roster-featured">

  <div class="wrapper">

    <h1>ROSTER<br /><span>FEATURED</span></h1>
    <a href="page-roster.php">See our full roster</a>

</div>

  <div id="roster-featured-wrapper">
    BLA
    <?php
    if ($isGoogleCrawling) {
      echo loadTemplateFile(APP_DIR . '/includes/roster-featured-content.php', array(
          'currentAlpha' => $googleCrawlerSelectedLetter,
          'currentPage' => getGoogleCrawlingParameter('page', 1),
          'roster' => getGoogleCrawlingParameter('roster')
      ));
    }
    ?>
  </div>
</section>

<?php include("includes/footer.php"); ?>
</body>
</html>
