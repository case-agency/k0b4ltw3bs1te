<?php
include("includes/data.php");
$json_string = file_get_contents(DATA_CHARTS);
$json_array = decodeFeed($json_string);
$initialChartName = "Billboard Hot 100";
$initialChartIdx  = 0;


for ($currentChart = 0; $currentChart < count($json_array); $currentChart++) {
  if ($json_array[$currentChart]['chart_name'] == $initialChartName) {
    $initialChartIdx = $currentChart;
  }
}

date_default_timezone_set('Europe/London');
if (date('N') == 1) {
    //already monday
    $currentWeekTs = time();
} else {
    //get last monday timesamp
    $currentWeekTs = strtotime("last Monday");
}

echo "<!-- $currentWeekTs -->\n";

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

</head>

<script type="text/javascript">
    var chartsPanelsJQuery = "<?php
    for ($currentChart = 0; $currentChart < count($json_array); $currentChart++) {
        echo '.pages-news-charts-' . $json_array[$currentChart]['chart_id'];
        if ($currentChart != count($json_array) - 1) {
            echo ',';
        }
    }
    ?>";
    var chartsDatesJQuery = "<?php
    for ($currentChart = 0; $currentChart < count($json_array); $currentChart++) {
        echo '.pages-news-charts-title-week-' . $json_array[$currentChart]['chart_id'];
        if ($currentChart != count($json_array) - 1) {
            echo ',';
        }
    }
    ?>";
    var initChartsPanel = "<?php echo '.pages-news-charts-' . $json_array[$initialChartIdx]['chart_id']; ?>";
    var initChartsDate  = "<?php echo '.pages-news-charts-title-week-' . $json_array[$initialChartIdx]['chart_id']; ?>";

    function openNewWindow(newWindowURL) {
        window.open(newWindowURL);
    }

    function dropdown(mySel) {
        var myChart = '.pages-news-charts-' + $(mySel).val();
        var myDate = '.pages-news-charts-title-week-' + $(mySel).val();
        $(chartsPanelsJQuery).hide();
        $(chartsDatesJQuery).hide();
        $(myChart).show();
        $(myDate).show();
        return false;
    }

    $(document).ready(function () {
        $(chartsPanelsJQuery).hide();
        $(chartsDatesJQuery).hide();
        $(initChartsPanel).show();
        $(initChartsDate).show();
    });

</script>
<body>

<?php include("includes/wrapper-start.php"); ?>
<?php include("includes/header.php"); ?>
<section class="main" id="charts">

    <div class="wrapper">

    <h1><span>NEWS<br /></span>CHARTS</h1>

    <?php
    for ($currentChart = 0; $currentChart < count($json_array); $currentChart++) {
        if($json_array[$currentChart]['chart_date'] != '') {
           $currentWeekTs = strtotime(str_replace("/", "-", $json_array[$currentChart]['chart_date']));
        }
    ?>
        <h2 class="pages-news-charts-title-week-<?php echo $json_array[$currentChart]['chart_id']?> charts-week">WEEK OF <?php echo strtoupper(date('j F Y', $currentWeekTs)); ?></h2>
    <?php
        }
    ?>

    <select name="gourl" onchange="dropdown(this)">
    <?php
        for ($currentChart = 0; $currentChart < count($json_array); $currentChart++) {
            $ddl_chart_name = $json_array[$currentChart]['chart_name'];
            if (strlen($ddl_chart_name) > 25) {
                $ddl_chart_name = substr($ddl_chart_name, 0, 25) . "...";
            }
            $selected = "";
            if($initialChartIdx == $currentChart) {
               $selected = " selected='true'";
            }
            echo '<option value="' . $json_array[$currentChart]['chart_id'] . '"'.$selected.'>' . $ddl_chart_name . '</option>';
        }
    ?>
    </select>

    <?php
    for ($currentChartJSON = 0; $currentChartJSON < count($json_array); $currentChartJSON++) {
        $json_string_chart = file_get_contents(DATA_CHARTS_JSON . $json_array[$currentChartJSON]['chart_data']);
        $json_array_chart = decodeFeed($json_string_chart);
        ?>

        <div id="pages-news-charts-columns" class="pages-news-charts-<?php echo $json_array[$currentChartJSON]['chart_id']; ?>">
            <?php for ($currentRecord = 0; $currentRecord < count($json_array_chart); $currentRecord++) { ?>
            <a class="chartBlock" href="<?php echo $json_array_chart[$currentRecord]['kobaltsynch_url']; ?>" target="_blank">
                <h2>#<?php echo $json_array_chart[$currentRecord]['entry_this_week_position']; ?></h2>
                <p><span><?php echo $json_array_chart[$currentRecord]['entry_title']; ?></span>
                <br /><?php echo $json_array_chart[$currentRecord]['entry_artist']; ?>
                <br /><em>licensing info</em></p>
            </a>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</section>

<?php include("includes/footer.php"); ?>

</body>
</html>