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
#$rosterMaxPages = ceil($rosterAlphaCurrentCount / 12);
$rosterMaxPages = ceil($rosterAlphaCurrentCount / 24);
#$startRecord = ($currentPage - 1) * 12;
$startRecord = ($currentPage - 1) * 24;
#if ($rosterAlphaCurrentCount <= 12) {
if ($rosterAlphaCurrentCount <= 24) {
    $recordsOnPage = $rosterAlphaCurrentCount;
} else {
    if ($currentPage == $rosterMaxPages) {
        #$recordsOnPage = $rosterAlphaCurrentCount - (($rosterMaxPages - 1) * 12);
        $recordsOnPage = $rosterAlphaCurrentCount - (($rosterMaxPages - 1) * 24);
    } else {
        #$recordsOnPage = 12;
        $recordsOnPage = 24;
    }
}

$rosterMaxRows = ceil($recordsOnPage / 3);
$rosterLastCol = $recordsOnPage - (($rosterMaxRows - 1) * 3);
?>


<div class="roster-artist-alpha">

    <?php
    $rosterAlpha = Array('#', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    for ($rosterAlphaCurrent = 0; $rosterAlphaCurrent < count($rosterAlpha); $rosterAlphaCurrent++) {

        if (isset($json_roster_data[$rosterAlpha[$rosterAlphaCurrent]]) && count($json_roster_data[$rosterAlpha[$rosterAlphaCurrent]]) != 0) {
            ?>
            <a
                href="#!artist_letter=<?php echo $rosterAlpha[$rosterAlphaCurrent]; ?>&roster=<?php echo $roster ?>"
                onclick="javscript: updateRosterDisplay('<?php echo $roster ?>', '<?php echo $rosterAlpha[$rosterAlphaCurrent]; ?>',1);"><?php echo $rosterAlpha[$rosterAlphaCurrent]; ?></a>
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
    <?php for ($currentRow = 0; $currentRow < $rosterMaxRows; $currentRow++) { ?>
    <div class="pages-roster-artist-row">
        <?php
        if ($currentRow == $rosterMaxRows - 1) {
            $rosterMaxCols = $rosterLastCol;
        } else {
            $rosterMaxCols = 3;
        }
        for ($currentCol = 0; $currentCol < $rosterMaxCols; $currentCol++) {
            $rosterCurrentRecord = ($currentRow * 3) + $currentCol + $startRecord;
            $json_active_data_current = objectToArray($json_active_data[$rosterCurrentRecord]);

            if (strlen($json_active_data_current['roster_image_url']) < 1) {
                $json_active_data_current_image = $json_images_default;
            } else {
                $json_active_data_current_image = $json_images . '/' . $json_active_data_current['roster_image_url'];
            }
            ?>
            <div class="rosterGridBlock">
                    <?php if (strlen($json_active_data_current['roster_website_url']) > 0): ?>
                    <a href="<?php echo $json_active_data_current['roster_website_url']; ?>" target="_blank">
                        <?php endif ?>
                    <img src="<?php echo $json_active_data_current_image; ?>" width="294" height="186"
                         alt="<?php echo strtoupper($json_active_data_current['roster_name']); ?>"/>
                    <?php if (strlen($json_active_data_current['roster_website_url']) > 0): ?>
                </a>
                     <?php endif ?>
                <?
                		$str = '';
                      if($json_active_data_current['roster_name'] == 'Paul McCartney') {
                         $str = 'PAUL McCARTNEY';
                      } else {
                      	$str = strtoupper($json_active_data_current['roster_name']);
                      	$pattern = '/&([A-Z])(UML|ACUTE|CIRC|TILDE|RING|';
                      	$pattern .= 'ELIG|GRAVE|SLASH|HORN|CEDIL|TH);/e';
                      	$replace = "'&'.'\\1'.strtolower('\\2').';'"; //convert the important bit back to lower
                      	$str = preg_replace($pattern, $replace, $str);
                      }

                ?>
                    <p><?php echo $str; ?></p>
                    <?php if (strlen($json_active_data_current['roster_website_url']) > 0): ?>
                        <a href="<?php echo $json_active_data_current['roster_website_url']; ?>" target="_blank">Visit site </a>
                    <?php endif ?>

            </div>
            <?php } ?> 
    </div>
    <?php } ?> 
</div>


<div class="pager">

    <?php if ($currentPage > 1) { ?>
    <a class="pager_previous"
       href="<?php echo '#!artist_letter=' . $currentAlpha . '&page=' . ($currentPage - 1) . '&roster=' . $roster ?>"
       onclick="javscript: updateRosterDisplay('<?php echo $roster ?>', '<?php echo $currentAlpha; ?>',<?php echo $currentPage - 1; ?>);">
        PREVIOUS</a>
    &nbsp;&nbsp;|&nbsp;&nbsp;

    <?php } ?>

    <?php for ($displayPage = 1; $displayPage < $rosterMaxPages + 1; $displayPage++) { ?>
    <?php if ($displayPage != $currentPage) { ?>
        <a
            href="<?php echo '#!artist_letter=' . $currentAlpha . '&page=' . $displayPage . '&roster=' . $roster ?>"
            onclick="javscript: updateRosterDisplay('<?php echo $roster ?>', '<?php echo $currentAlpha; ?>',<?php echo $displayPage; ?>);" class="pagerActive"><?php echo $displayPage; ?></a>
        <?php } else { ?>
        <a href="#" class="pager_active"><?php echo $displayPage; ?></a>
        <?php } ?>
    <?php } ?>

    <?php if ($currentPage < $rosterMaxPages) { ?>
    &nbsp;&nbsp;|&nbsp;&nbsp;
    <a class="pager_next"
       href="<?php echo '#!artist_letter=' . $currentAlpha . '&page=' . ($currentPage + 1) . '&roster=' . $roster ?>"
       onclick="javscript: updateRosterDisplay('<?php echo $roster ?>', '<?php echo $currentAlpha; ?>',<?php echo $currentPage + 1; ?>);">
        NEXT</a>
    <?php } ?>

</div>