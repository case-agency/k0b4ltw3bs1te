<?php
include("includes/data.php");

$WhatsHotList = decodeFeed(file_get_contents(DATA_WHAT_HOT));

$json_string = file_get_contents(DATA_NEWS_PRESS_RELEASE);
$pressReleaseList__ = decodeFeed($json_string, false);

    for( $i=0;$i<sizeof($pressReleaseList__); $i++ ) {
        $pressReleaseList__[$i]['entry_headline'] = "PRESS RELEASE: ".$pressReleaseList__[$i]['entry_headline'];
    }

$json_string = file_get_contents(DATA_NEWS_IN_THE_NEWS);
$inTheNewsList = decodeFeed($json_string, false);

$pressReleaseList = array_merge($pressReleaseList__, $inTheNewsList);
usort($pressReleaseList, 'sortNewsByDate');

$newReleaseList = decodeFeed(file_get_contents(DATA_NEW_RELEASES));
usort($newReleaseList, 'sortReleaseByDate');


$BillboardHot = 2;
$json_string_chart = file_get_contents(DATA_CHARTS);
$json_array_chart = decodeFeed($json_string_chart);
for ($currentChart = 0; $currentChart < count($json_array_chart); $currentChart++) {
  if ($json_array_chart[$currentChart]['chart_name'] == "Billboard Hot 100") {
    $BillboardHot = $currentChart;
  }
}

$json_string_billboard = file_get_contents(DATA_CHARTS_JSON . $json_array_chart[$BillboardHot]['chart_data']);
$json_array_billboard = decodeFeed($json_string_billboard);
if (count($json_array_billboard) < 6) {
  $BillboardMax = count($json_array_billboard);
} else {
  $BillboardMax = 6;
}


/*

$mainNewsList = decodeFeed(file_get_contents(DATA_NEWS_RECENT));
usort($mainNewsList, 'sortNewsByPositionDate');
*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo formatPageTitle('News') ?></title>
  <?php include('includes/css.php'); ?>
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

    <h1>NEWS</h1>

  </div>

<div class="container white" style="position: relative;">
    <div class="hp-controls"><div class="wrapper"><div class="control-prev"></div><div class="control-next"></div></div></div>
    <div class="wrapper">
        <div id="hp-slider">
        <?
            $WhatsHotListCounter = 0;
            foreach ($WhatsHotList as $WhatsHot):
                $WhatsHotListCounter++;
                if ($WhatsHotListCounter > 5) {
                    break;
                }
        ?>
            <!-- slide 1 -->
            <div class="slide">
                <!-- slide image -->
                <img src="images/json/WhatHot<?php echo $WhatsHot['feature_image_url'] ?>" width=960 height=549 alt="<?php echo $WhatsHot['feature_headline'] ?>" />
                <div class="module whats-hot">
                    <div class="module four">
                        <!-- slide headline -->

                        <h3><?php echo $WhatsHot['feature_headline'] ?></h3>
                    </div>
                    <div class="module six">
                        <!-- slide text -->
                        <p><?php echo $WhatsHot['feature_subline'] ?></p>
                    </div>
                </div>
            </div>

        <?
            endforeach
        ?>

        </div>
    </div>
</div>
<div class="wrapper" id="press-releases">

  <a href="#"><h2>In The News</h2></a>
  <a class="red button-right" href="page-news-press-releases.php">See all</a>

  <?php
    $pressReleaseListCounter = 0;
    foreach ($pressReleaseList as $news):

    if ($pressReleaseListCounter >= 4 ) {
      break;
    }

    $pressReleaseListCounter++;
  ?>

  <div class="news-block">
    <a href="page-news-detail.php?id=<?php echo $news['entry_id']; ?>">
    <?php if (strlen($news['entry_thumbnail_img']) > 0): ?>
      <img src="images/json/News/<?php echo $news['entry_thumbnail_img'] ?>" alt="thumbnail" />
    <?php else: ?>
      <img src="images/pages/news/pages-news-archive-image.png" alt="thumbnail" />
    <?php endif ?>
    </a>
    <p><span><?php echo $news['entry_headline']; ?></span><br /><?php echo truncateText($news['entry_abstract'], 20); ?></p>
    <a href="page-news-detail.php?id=<?php echo $news['entry_id']; ?>">read more</a>
  </div>

  <?php endforeach; ?>

</div>
<div class="container black">
  <div class="wrapper" id="key-releases">
  <a  class="white" href="#"><h2>Key Releases</h2></a>
  <a class="red button-right" href="page-news-key-releases.php">See all</a>

  <?php
    $newReleaseListCounter = 0;
    foreach ($newReleaseList as $newRelease):

    $newReleaseListCounter++;

    if ($newReleaseListCounter > 5 ) {
      break;
    }
  ?>

  <div class="key-release-block">
    <img src="images/json/NewReleases/<?php echo $newRelease['release_image'] ?>" alt="Kobalt New Release" width="172" height="172" />
    <div>
      <p><span><?php echo $newRelease['release_title']; ?></span><br /><?php echo formateKobaltDate($newRelease['release_date']); ?></p>
    </div>
  </div>

<?php endforeach; ?>

  </div>
</div>

<div class="container patterned">
  <div class="wrapper-padding white">
    <div class="full-width module">
        <h2>On the Charts<br /><span>The Billboard Hot 100</span></h2>
        <a class="button-right red" href="page-news-charts.php">View more charts</a>

      <!-- I thought that these 'li a' chart tiles could link to each respective song on Synch. If the track isn't available, it could just link through to the Charts page with the News section. I left the link targets blank, as I'm not sure what standard practice is for linking to tracks within Synch. 09.3.14 pb -->
      <ul id="chartGrid">
      <?php
        for ($currentRecord = 0; $currentRecord < $BillboardMax; $currentRecord++) {
            $billboard_rank = $json_array_billboard[$currentRecord]['entry_this_week_position'];
            $billboard_uri = $json_array_billboard[$currentRecord]['kobaltsynch_url'];
            $billboard_title = $json_array_billboard[$currentRecord]['entry_title'];
            $billboard_artist = $json_array_billboard[$currentRecord]['entry_artist'];
    ?>
                <li><a href="<?= $billboard_uri?>"><span>#<?= $billboard_rank?></span><span><?= $billboard_title?></span><br/><?= $billboard_artist?></a></li>
    <?php } ?>

      </ul>

    </div>
  </div>
</div>

<div class="container red">
  <div class="wrapper">
    <div class="module six">
      <h2 class="socialHeader">@KOBALT</h2>
    </div>
    <a class="button-right black twitter-button" href="http://www.twitter.com/kobalt"><span class="twitter-icon">Follow</span></a>
    <?php echo loadTemplateFile(APP_DIR . '/includes/_twitter.php'); ?>
  </div>
</div>

</section>

<?php include("includes/footer.php"); ?>
<script type="text/javascript">
  $(document).ready( function(){
      var _slider = $('#hp-slider').bxSlider({
    slideWidth: 960,
    slideSelector: 'div.slide',
    adaptiveHeight: false,
    nextSelector: '.control-next',
    prevSelector: '.control-prev',
    auto: true,
    pause: 3500,
    speed: 500
  });

  $('.hp-controls .wrapper').mouseenter(function() {
        _slider.stopAuto();
     }).mouseleave(function() {
        _slider.startAuto();
     });

  $('.bx-wrapper').mouseenter(function() {
        _slider.stopAuto();
     }).mouseleave(function() {
        _slider.startAuto();
     });
  });
</script>
</body>
</html>
