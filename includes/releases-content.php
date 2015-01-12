<?php

require_once ("data.php");

$newsListSpl = splitRecentReleases();
$newsList = $newsListSpl['upcomingList'];
$newsList = array_merge($newsList, $newsListSpl['recentList']);

        $future = true;
        $headline = "Recent Releases";
        /*
switch ($release) {
    case 'upcoming':
        $newsList = $newsList['upcomingList'];
        $future = false;
        $headline = "Upcoming Releases";
        break;
    case 'recent':
        $newsList = $newsList['recentList'];
        $future = true;
        $headline = "Recent Releases";
        break;
    default:
        $newsList = $newsList['recentList'];
        $future = true;
        $headline = "Recent Releases";
}
*/

$newsCounter= 0;
?>

<?php foreach ($newsList as $news): ?>

    <?php
        $newsCounter++;
        if($newsCounter <= 9) {
    ?>

    <div class="releaseBlock">
        <?php if ($future && (strlen($news['release_website_url']) > 0)): ?>
            <a href="<?php echo $news['release_website_url'] ?>" target="_blank">
        <?php endif ?>

        <img src="images/json/NewReleases<?php echo $news['release_image']?>" alt="album image"/>

        <?php if ($future && (strlen($news['release_website_url']) > 0)): ?>
            </a>
        <?php endif ?>

        <?php if ($future && (strlen($news['release_website_url']) > 0)): ?>
            <a href="<?php echo $news['release_website_url'] ?>" target="_blank">
        <?php endif ?>
        <p>
        <strong><?php echo $news['release_artist_name']?></strong>
        <?php if ($future && (strlen($news['release_website_url']) > 0)): ?>
            </a>
        <?php endif ?>
        <br />
        <?php echo $news['release_title']?><br />
        <?php echo formateKobaltDate($news['release_date']); ?></p>
    </div>

<?php } ?>

<?php endforeach ?>