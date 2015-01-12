<?php

$dataFeed = DATA_ROSTER_FEATURED;

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
$rosterMaxPages = ceil($rosterAlphaCurrentCount / 50);
#$startRecord = ($currentPage - 1) * 12;
$startRecord = ($currentPage - 1) * 50;
#if ($rosterAlphaCurrentCount <= 12) {
if ($rosterAlphaCurrentCount <= 50) {
    $recordsOnPage = $rosterAlphaCurrentCount;
} else {
    if ($currentPage == $rosterMaxPages) {
        #$recordsOnPage = $rosterAlphaCurrentCount - (($rosterMaxPages - 1) * 12);
        $recordsOnPage = $rosterAlphaCurrentCount - (($rosterMaxPages - 1) * 50);
    } else {
        #$recordsOnPage = 12;
        $recordsOnPage = 50;
    }
}

$rosterMaxRows = ceil($recordsOnPage / 3);
$rosterLastCol = $recordsOnPage - (($rosterMaxRows - 1) * 3);
?>
    <?php for ($currentRow = 0; $currentRow < $rosterMaxRows; $currentRow++) { ?>
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
            } ?>

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

            <?php $randomBlockBefore = rand(1, 20);

            if ($randomBlockBefore == 1 ) { ?>
            <div class="featured-block one-column black"><p>kobalt</p></div>
            <?php } elseif ($randomBlockBefore <= 2 ) { ?>
            <div class="featured-block one-column triangle" data-block-color="#262626"><div>&nbsp;</div></div>
            <?php } elseif ($randomBlockBefore > 3 && $randomBlockBefore < 5 ) { ?>
            <div class="featured-block one-column triangle" data-block-color="white"><div>&nbsp;</div></div>
            <?php } elseif ($randomBlockBefore == 5 ) { ?>
            <div class="featured-block one-column red"><p>kobalt</p></div>
            <?php } elseif ($randomBlockBefore > 5 && $randomBlockBefore < 6 ) { ?>
            <div class="featured-block one-column flatblack"><p>kobalt</p></div>
            <?php } elseif ($randomBlockBefore == 8 ) { ?>
            <div class="featured-block one-column black"><p>kobalt</p></div>
            <div class="featured-block one-column black"><p>kobalt</p></div>
            <?php } else { ?>
            <?php } ?>

            <div class="featured-block artist">
                <h2><?php echo $str; ?></h2>
                <?php if (strlen($json_active_data_current['roster_website_url']) > 0): ?>
                    <a href="<?php echo $json_active_data_current['roster_website_url'] ?>" target="_blank">Visit site</a>
                <?php endif ?>
                <?php 
                if (strlen($json_active_data_current['roster_image_url']) > 1) {
                    $json_active_data_current_image = $json_images . '/' . $json_active_data_current['roster_image_url'];
                } else {
                    $json_active_data_current_image = $json_images_default;
                } ?>
                <img src="<?php echo $json_active_data_current_image; ?>" alt="<?php echo strtoupper($json_active_data_current['roster_name']); ?>" width="100%" />
                <div class="overlay">&nbsp;</div>
            </div>

            <?php $randomBlockAfter = rand(1, 20);

            if ($randomBlockAfter == 1 ) { ?>
            <div class="featured-block one-column black"><p>kobalt</p></div>
            <?php } elseif ($randomBlockAfter <= 2 ) { ?>
            <div class="featured-block one-column triangle" data-block-color="#262626"><div>&nbsp;</div></div>
            <?php } elseif ($randomBlockAfter > 3 && $randomBlockAfter < 5 ) { ?>
            <div class="featured-block one-column triangle" data-block-color="white"><div>&nbsp;</div></div>
            <?php } elseif ($randomBlockAfter == 5 ) { ?>
            <div class="featured-block one-column red"><p>kobalt</p></div>
            <?php } elseif ($randomBlockAfter > 5 && $randomBlockAfter < 8 ) { ?>
            <div class="featured-block one-column flatblack"><p>kobalt</p></div>
            <?php } elseif ($randomBlockAfter == 8 ) { ?>
            <div class="featured-block one-column black"><p>kobalt</p></div>
            <?php } elseif ($randomBlockAfter == 9 ) { ?>
            <div class="featured-block one-column flatblack"><p>kobalt</p></div>
            <div class="featured-block one-column flatblack"><p>kobalt</p></div>
            <?php } else { ?>
            <?php } ?>
    <?php } ?>
    <?php } ?>

</div>