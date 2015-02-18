<?php
include("includes/data.php");


$json_string = file_get_contents(DATA_NEWS_PRESS_RELEASE);
$pressReleaseList__ = decodeFeed($json_string, false);

    for( $i=0;$i<sizeof($pressReleaseList__); $i++ ) {
        $pressReleaseList__[$i]['entry_headline'] = "PRESS RELEASE: ".$pressReleaseList__[$i]['entry_headline'];
    }

$json_string = file_get_contents(DATA_NEWS_IN_THE_NEWS);
$inTheNewsList = decodeFeed($json_string, false);

$pressReleaseList = array_merge($pressReleaseList__, $inTheNewsList);
usort($pressReleaseList, 'sortNewsByDate');

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
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
  <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>

</head>
<body>
<?php
include('includes/header.php'); ?>

<!-- start main -->
<section class="main" id="news">

<div class="wrapper">

  <h1><span>NEWS</span><br />PRESS<br />RELEASES</h1>

</div>

<div class="wrapper" id="news-category">

  <?php
    echo loadTemplateFile(APP_DIR . '/includes/news-list.php', array(
        'newsList' => $pressReleaseList,
        'baseUrl'=>'page-news-press-releases.php?page={page}'
    ));
  ?>

</div>

</section>

<?php include("includes/footer.php"); ?>
</body>
</html>
