<?php
include("includes/data.php");
require_once 'includes/functions.php';

$json_string = file_get_contents(DATA_NEWS_PRESS_RELEASE);
$json_press_releases = decodeFeed($json_string);

$active_article = 0;


if (!isset($_GET['id'])) {
    do404();
}

$id = $_GET['id'];

if (preg_match('/^WN[0-9]+$/', $id) !== 1) {
    do404('invalid file name.');
}


$newsFilePath = APP_JSONS_DIR . '/News/' . $id . '.json';

if (!file_exists($newsFilePath)) {
    do404();
}

$newsContent = decodeFeed(file_get_contents($newsFilePath));

if (is_array($newsContent)) {
    $newsContent = $newsContent[0];
} else {
    $newsContent = 'content is not available.';
}


$newsMeta = newReverseLookupById($id);
$newsData = $newsMeta['news'];



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo formatPageTitle('News') ?></title>
  <link rel="stylesheet" type="text/css" href="css/input.css" />
  <link rel="stylesheet" type="text/css" href="css/phase-two.css" />
  <?php include('includes/js.php'); ?>


<meta property="og:title" content="<?php echo $newsData['entry_headline'] ?>">
<meta property="og:description" content="<?php echo $newsData['entry_headline'] ?>">
<meta property="og:image" content="http://www.kobaltmusic.com/images/json/News<?php echo $newsData['entry_article_img']  ?>">
<meta property="og:image:secure_url" content="https://www.kobaltmusic.com/images/json/News<?php echo $newsData['entry_article_img']  ?>">
<meta property="og:image:type" content="image/jpg">
	<?php include('includes/analyticstracking.php'); ?>


</head>

<script type="text/javascript">var switchTo5x = true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher:"ur-30602a89-d12d-f710-758a-b07ff59a12e0"}); </script>



<body>

<?php include("includes/header.php"); ?>
<!-- start main -->
<section class="main" id="news-detail">

    <div class="wrapper">

            <h2 class="black"><?php echo $newsData['entry_headline'] ?></h2>

            <div class="date"><?php echo formateKobaltDate($newsData['entry_date']) ?></div>

            <?php if (strlen($newsData['entry_article_img']) > 0): ?>
            <img src="images/json/News<?php echo $newsData['entry_article_img']  ?>" alt="article image"
                 class="main_image"/>
            <?php endif ?>

            <?php echo wpautop(auto_link($newsContent)) ?>

            <div id="pages-news-press-releases-content-share">
                <p><span style="padding:0 5px 0 0">SHARE THIS</span></p>
                <span class='st_facebook' displayText='' st_title="<?php echo ($newsData['entry_headline']) ?>"></span>
                <span class='st_twitter' displayText='' st_title="<?php echo ($newsData['entry_headline']) ?>"></span>
                <span class='st_linkedin' displayText='' st_title="<?php echo ($newsData['entry_headline']) ?>"></span>
                <span class='st_email' displayText='' st_title="<?php echo ($newsData['entry_headline']) ?>"></span>
            </div>

    </div>

</section>
<?php include("includes/footer.php"); ?>
</body>
</html>