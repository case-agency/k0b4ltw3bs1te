<?php

require_once ("../includes/data.php");


echo loadTemplateFile(APP_DIR . '/includes/roster-content-list.php', array(
    'currentAlpha' => getGet("val", 'all'),
    'currentPage' => getGet("page"),
    'roster' => getGet('roster')
));