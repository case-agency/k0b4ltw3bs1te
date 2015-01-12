<?php

require_once ("../includes/data.php");


$locationId = getGet('tab');

echo loadTemplateFile(APP_DIR . '/includes/contact-location.php', array(
    'locationId' => $locationId
));