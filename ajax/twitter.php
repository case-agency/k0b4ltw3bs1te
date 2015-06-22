<?php
require_once ("../includes/data.php");
$feedData = getTwitterFeed();
if($feedData != '') {
?>
<h3><span><a target="_blank" href="http://twitter.com/#!/kobalt"><?php echo $feedData[0]['text'] ?></a></span></h3>
<?
} else {
?>
<h3><span><a target="_blank" href="http://twitter.com/#!/kobalt">Go and visit our twitter page at http://www.twitter.com/kobalt/</a></span></h3>
<?
}
?>