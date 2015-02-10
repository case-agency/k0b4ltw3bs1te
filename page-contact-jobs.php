<?php
include("includes/data.php");
$jobs = getJobs("current_jobs");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo formatPageTitle('Contact') ?></title>
  <?php include('includes/js.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/input.css" />
  <link rel="stylesheet" type="text/css" href="css/phase-two.css" />
	<?php include('includes/analyticstracking.php'); ?>
    <?php include("includes/js.php"); ?>
</head>
<body>
<?php include("includes/header.php"); ?>
<section class="main" id="jobs">

<div class="wrapper">

<h1 class="black">JOBS</h1>

<?php
if (isset($jobs) && is_array($jobs) && isset($jobs["current_jobs"]) && is_array($jobs["current_jobs"]) && count($jobs["current_jobs"]) > 0) {
    echo loadTemplateFile(APP_DIR . '/includes/current_jobs.php', array('jobs' => $jobs["current_jobs"]));
} else {
    ?>
    <p class="pages-about-descirption">
        We are always looking for talented people to join our team. Please send your CV and cover letter to <a href="mailto:Jobs@kobaltmusic.com" class="email">Jobs@kobaltmusic.com</a>.
    </p>
<?php } ?>

</div>
</section>
<?php include("includes/footer.php"); ?>
</body>
</html>
