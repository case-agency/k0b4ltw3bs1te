<?php

require_once ("../includes/data.php");


echo loadTemplateFile(APP_DIR . '/includes/roster-featured-content.php', array(
    'currentAlpha' => getGet("val", 'all'),
    'currentPage' => getGet("page"),
    'roster' => getGet('roster')
));

echo "<script type=\"text/javascript\">resizeBlocks();</script>";