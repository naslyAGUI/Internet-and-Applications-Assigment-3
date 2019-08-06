<?php

$zip=$_GET["zip"]; 
$url = "http://api.openweathermap.org/data/2.5/weather?zip=$zip,us&units=metric&appid=6145c329f81e848dd9f58f52bde6b39e";

$fp = fopen ( $url , "r" );
$content = "";
while ($more = fread ($fp, 3000)) { $contents .= $more; }
echo $contents ;

?>
