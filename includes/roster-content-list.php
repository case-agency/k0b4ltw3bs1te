<?php
switch ($roster) {
    case 'featured':
        $dataFeed = DATA_ROSTER_FEATURED;
        break;
    case 'new':
        $dataFeed = DATA_ROSTER_NEW_SIGNINGS;
        break;
    case 'companies':
        $dataFeed = DATA_ROSTER_COMPANIES;
        break;
    default:
        $roster = 'artists';
        $dataFeed = DATA_ROSTER_ARTIST;
}

$json_string = file_get_contents($dataFeed);

$json_images = 'images/json/Rosters';
$json_images_default = 'images/pages/roster/No_image.png';
$json_roster_data = decodeFeed(trim($json_string));


function objectToArray($d)
{
    if (is_object($d)) {
        $d = get_object_vars($d);
    }
    if (is_array($d)) {
        return array_map(__FUNCTION__, $d);
    } else {
        return $d;
    }
}

if (strtolower($currentAlpha) != 'all') {
    if (isset($json_roster_data[$currentAlpha])) {
        $json_active_data = $json_roster_data[$currentAlpha];
    } else {
        $json_active_data = null;
    }
} else {
    $json_temp = '[';
    $roster_all_data = Array('#', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    for ($roster_all_data_crrent = 0; $roster_all_data_crrent < count($roster_all_data); $roster_all_data_crrent++) {
        if (isset($roster_all_data[$roster_all_data_crrent]) &&
            isset($json_roster_data[$roster_all_data[$roster_all_data_crrent]])
            && count($json_roster_data[$roster_all_data[$roster_all_data_crrent]]) != 0
        ) {
            $json_temp .= substr(json_encode($json_roster_data[$roster_all_data[$roster_all_data_crrent]]), 1, -1);
            $json_temp .= ',';
        }
    }
    $json_temp = substr($json_temp, 0, -1);
    $json_temp .= ']';
    $json_active_data = decodeFeed($json_temp);
}

$rosterAlphaCurrentCount = count($json_active_data);
$recordsOnPage = $rosterAlphaCurrentCount;

/*
#$rosterMaxPages = ceil($rosterAlphaCurrentCount / 12);
$rosterMaxPages = ceil($rosterAlphaCurrentCount / 1000);
#$startRecord = ($currentPage - 1) * 12;
$startRecord = ($currentPage - 1) * 1000;
#if ($rosterAlphaCurrentCount <= 12) {
if ($rosterAlphaCurrentCount <= 1000) {
    $recordsOnPage = $rosterAlphaCurrentCount;
} else {
    if ($currentPage == $rosterMaxPages) {
        #$recordsOnPage = $rosterAlphaCurrentCount - (($rosterMaxPages - 1) * 12);
        $recordsOnPage = $rosterAlphaCurrentCount - (($rosterMaxPages - 1) * 1000);
    } else {
        #$recordsOnPage = 12;
        $recordsOnPage = 1000;
    }
}
*/


/* ****************************** */
/* **** Columns calculations **** */
/* ****************************** */
$rosterMaxCols = 3;	// Maximum number of columns
$rosterRows = 0;	// Maximum Rows in Each Columns

$rosterRowsPerCol = ceil($recordsOnPage / $rosterMaxCols);
$rosterLastRow = $rosterRows - (($rosterRows * $rosterMaxCols) - $recordsOnPage);

/*
print "recordsOnPage ".$recordsOnPage." <br />\n";
print "rosterMaxCols ".$rosterMaxCols." <br />\n";
print "rosterRowsPerCol ".$rosterRowsPerCol." <br />\n";
print "rosterLastRow ".$rosterLastRow." <br />\n";
*/

?>


<div class="roster-artist-alpha">

    <?php
    $rosterAlpha = Array('#', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    for ($rosterAlphaCurrent = 0; $rosterAlphaCurrent < count($rosterAlpha); $rosterAlphaCurrent++) {

        if (isset($json_roster_data[$rosterAlpha[$rosterAlphaCurrent]]) && count($json_roster_data[$rosterAlpha[$rosterAlphaCurrent]]) != 0) {
            ?>
            <a class="alpha_none"
                href="#!artist_letter=<?php echo $rosterAlpha[$rosterAlphaCurrent]; ?>&roster=<?php echo $roster ?>">
               <?php echo $rosterAlpha[$rosterAlphaCurrent]; ?></a>
            <?php } else { ?>
            <a class="alpha_none"><?php echo $rosterAlpha[$rosterAlphaCurrent]; ?></a>
            <?php
        }
    }
    ?>
    <a
        href="#!artist_letter=all&roster=<?php echo $roster ?>"
        onclick="javscript: updateRosterDisplay('<?php echo $roster ?>', 'all',1);">ALL</a>
</div>

<a href="page-roster-featured.php">See our featured roster</a>





<div id="roster-interior-wrapper">
<div class="rosterList">
    <?php
    $prevName = "";
    $currName = "";
    $i = 0;
    for ($currentCol = 0; $currentCol < $rosterMaxCols; $currentCol++) { ?>
    <div class="list-column">
    <div class="rosterLetter">
        <?php
        $rosterMaxRows = 0;	// Maximum Rows in Each Columns
        if ($currentCol == $rosterMaxCols - 1) {
            $rosterMaxRows = $rosterLastRow;
        } else {
            $rosterMaxRows = $rosterRowsPerCol;
        }

        for ($currentRow = 0; $currentRow < $rosterMaxRows; $currentRow++) {
            $rosterCurrentRecord = ($currentCol * $rosterRowsPerCol) + $currentRow ;
        	//if ( $rosterCurrentRecord < sizeof($json_active_data) ) {
            	$json_active_data_current = objectToArray($json_active_data[$rosterCurrentRecord]);
            ?>

            <?php
                    $str = '';
                    if($json_active_data_current['roster_name'] == 'Paul McCartney') {
                         $str = 'Paul McCartney';
                      } else {
                      	$str = $json_active_data_current['roster_name'];
                      	$pattern = '/&([A-Z])(UML|ACUTE|CIRC|TILDE|RING|';
                      	$pattern .= 'ELIG|GRAVE|SLASH|HORN|CEDIL|TH);/e';
                      	$replace = "'&'.'\\1'.strtolower('\\2').';'"; //convert the important bit back to lower
                      	$str = preg_replace($pattern, $replace, $str);
                      } ?>
                    <?php
                        $prevName = $currName;
                        $currName = strtoupper(substr($str, 0, 1));
                        if ( $currName != $prevName ): ?>
                            </div><div class="rosterLetter">
                            <h6><?php echo($currName); ?></h6>
                        <?php else: ?>
                        <?php endif; ?>
                    <?php if (strlen($json_active_data_current['roster_website_url']) > 0): ?>
                        <a href="<?php echo $json_active_data_current['roster_website_url']; ?>" target="_blank">
                    <?php endif ?>
                    <p><?php echo $str; ?></p>
                    <?php if (strlen($json_active_data_current['roster_website_url']) > 0): ?>
                        </a>
                    <?php endif ?>
        <?php
        //}
        ?>
        <?php } ?>
    </div>
    </div>
    <?php } ?>

</div>
</div>