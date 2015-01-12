<?php

$content = file_get_contents("http://gimli.kobaltmusic.com/kls_portal/read/CLIENTS_MODULE.GET_CLIENT_LIST?pPartyId=IP232894");

$json =  utf8_encode($content);

$array = json_decode($json);

echo "<pre>";
print_r($array);
echo "</pre>";

?>
