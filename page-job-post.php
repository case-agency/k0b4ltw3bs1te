<?php
include("includes/data.php");
$job = getJobs(getGet("id", null));
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
<script type="text/javascript">

    function showClick(activeDiv) {
        $("#pages-about-text-bio-hide-content-" + activeDiv).hide();
        $("#pages-about-text-bio-show-content-" + activeDiv).show();
    }

    function hideClick(activeDiv) {
        $("#pages-about-text-bio-hide-content-" + activeDiv).show();
        $("#pages-about-text-bio-show-content-" + activeDiv).hide();
    }

    function applyClick(activeDiv) {
        alert(activeDiv);
    }

    $(document).ready(function() {
        $("#pages-about-text-bio-show-content-a").show();
        $("#pages-about-text-bio-hide-content-a").hide();
    });

</script>
    <body>
        <?php include("includes/header.php"); ?>
        <section class="main" id="contact">
        <div class="wrapper">
            <?php
            if (isset($job) && is_array($job) && isset($job["job_description"]) && is_array($job["job_description"]) && count($job["job_description"]) > 0) {
                echo loadTemplateFile(APP_DIR . '/includes/job.php', array('job' => $job["job_description"]));
            } else {
                ?>
                <p>Unfortunately, this position is no longer available.</p>
            <?php } ?>
        </div>
        </section>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
