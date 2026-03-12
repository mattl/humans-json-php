<?php

// humans.json generator in PHP by Matt Lee is marked CC0 1.0.
// To view a copy of this mark, visit https://creativecommons.org/publicdomain/zero/1.0/

$pals = file('pals.txt');
$me = "https://example.com/";

error_reporting("2048");

$json = [];
$json['version'] =  "0.1.1";
$json['url'] = $me;
$json['vouches'] = array();

foreach ($pals as $pal) {
    $details = explode("|", $pal);

    $url = trim($details[0]);
    $date = trim($details[1]);

    if (!$date) {
        $date = date('Y-m-d');
    }

    $array['url'] = $url;
    $array['vouched_at'] = $date;

    array_push($json['vouches'], $array);
}

echo json_encode($json, JSON_PRETTY_PRINT);
