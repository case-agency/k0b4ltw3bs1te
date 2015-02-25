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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo formatPageTitle('Roster') ?></title>
  <?php include('includes/css.php'); ?>
  <link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css" />
  <?php include('includes/js.php'); ?>
  <script type="text/javascript" src="js/roster-featured.js"></script>

</head>
<script type="text/javascript">
    function updateRosterDisplay(roster, jsonData, page){
      ///$('#mainRosterContainer').load("ajax/roster-content.php?val="+jsonData+"&page="+page);
      $.get('ajax/roster-content.php', {
        val: jsonData,
        page: page,
        roster: roster
      }, function(data){
        $('#roster-wrapper').html(data);
      });
    }

    function updateRosterDisplayList(roster, jsonData, page){
      ///$('#mainRosterContainer').load("ajax/roster-content.php?val="+jsonData+"&page="+page);
      $.get('ajax/roster-content-list.php', {
        val: jsonData,
        page: page,
        roster: roster
      }, function(data){
        $('#roster-wrapper').html(data);
      });
    }

    function rosterLinkHandler(self){
      var el = $(self);

      updateRosterDisplay(
      getPrettyFragment('roster', 'artist', el.attr('href')), 'all', 1
    );
    }

    $(document).ready(function() {
<?php if ($roster != null): ?>
      updateRosterDisplayList('<?php echo $roster ?>', '<?php echo __e($currentLetter) ?>',1);
<?php else: ?>
      updateRosterDisplay(
      getPrettyFragment('roster', 'all'),
      getPrettyFragment('artist_letter', 'all') ,
      getPrettyFragment('page', '1')
    );
<?php endif ?>
  });
</script>
<body>
<?php
include('includes/header.php'); ?>

<!-- start main -->
<section class="main" id="roster">

  <div class="wrapper">

    <h1>ROSTER<br /><span>ALL</span></h1>

    <a href="#" onclick="javscript: updateRosterDisplay('artists', 'all' ,1);" class="switch rosterGrid rosterToggle">Grid</a>
    <a href="#" onclick="javscript: updateRosterDisplayList('artists', 'all' ,1);" class="switch rosterList">List</a>


  <div id="roster-wrapper">
    <?php
    if ($isGoogleCrawling) {
      echo loadTemplateFile(APP_DIR . '/includes/roster-content-list.php', array(
          'currentAlpha' => $googleCrawlerSelectedLetter,
          'currentPage' => getGoogleCrawlingParameter('page', 1),
          'roster' => getGoogleCrawlingParameter('roster')
      ));
    }
    ?>
  </div>
  </div>
</section>

<?php include("includes/footer.php"); ?>
<script type="text/javascript">

$(document).ready (function() {
  $('.switch').click( function() {
    $('.switch.rosterToggle').removeClass('rosterToggle');
    $(this).addClass('rosterToggle');
  });
});

</script>
</body>
</html>
