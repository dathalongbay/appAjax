<?php


$json1 = '["h\u00e0 n\u1ed9i","h\u1ed3 chi m\u00ecnh","\u0111\u00e0 n\u1eb5ng"]';
$json2 = '{"name":"nguy\u1ec5n v\u0103n an","age":21,"location":"h\u00e0 n\u1ed9i"}';

$convert1 = json_decode($json1);
$convert2 = json_decode($json2);

echo "<pre>";
print_r($convert1);
echo "</pre>";

echo "<pre>";
print_r($convert2);
echo "</pre>";